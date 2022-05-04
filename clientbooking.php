<?php

@include 'config\dbcon.php';
session_start();
if(isset($_SESSION['Client_Name'])){
  if(isset($_POST['submit'])){
    
    $TherapistName =mysqli_real_escape_string($con,$_POST['TherapistName']);
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $ClientEmail =mysqli_real_escape_string($con,$_POST['ClientEmail']);
  
    $select = "SELECT * FROM `booking` WHERE Date = '$Date' AND Time ='$Time'";
  
    $result = mysqli_query($con, $select);
  
    if(mysqli_num_rows($result) > 0){
     $error[] = 'That booking already exists,Select another time slot!';
    }else{
          $insert = "INSERT INTO `booking` (`TherapistName`, `Date`, `Time`,`ClientEmail`) VALUES ('$TherapistName','$Date','$Time','$ClientEmail')";
          mysqli_query($con, $insert);
          $error[] = 'Booking Successful!';
    }
  
  };
}else{
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/vol.css">
</head>
<body>
  <!--header section starts-->
  <header class="header">

    <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
    <nav class="navbar">
        <a href="user_landing.php">Home</a>
        <a href="therapistview.php">Therapist Available</a>
        <a href="clientbooking.php">Book Now</a>
        <a href="viewappointments.php">View Appointments</a>
        <a href="login.php">Logout</a>
      
      
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </header>
  <!--header ends-->
  <div class="container">
      <form action="" method="post">
            <h1>Book now</h1>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <select name="TherapistName" id="">
              <option value="" disabled selected >Select Therapist</option>
              <?php
               $sql = "SELECT * FROM `therapist`";
               $result = mysqli_query($con, $sql);
               while($row = mysqli_fetch_assoc($result)){
                echo '<option value="'.$row['FirstName'].'">'.$row['FirstName'].'</option>';
               }
              ?>       
            <input type="date" name="Date" min="<?php echo date("Y-m-d");?>" required placeholder="Enter your preferred day">
            <input type="time" name="Time" min="09:00" max="17:00" required placeholder="Enter your preferred time">
            <input type="email" name="ClientEmail" required placeholder="Please input your Email for communication">
            <input type="submit" name="submit" value="Book" class="form-btn">
      </form>
  </div>  
</body>
</html>