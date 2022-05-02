<?php

@include 'config\dbcon.php';

if(isset($_POST['submit'])){
    
  $TherapistName =mysqli_real_escape_string($con,$_POST['TherapistName']);
  $Date = $_POST['Date'];
  $Time = $_POST['Time'];

  $select = "SELECT * FROM `booking` WHERE Date = '$Date' AND Time ='$Time'";

  $result = mysqli_query($con, $select);

  if(mysqli_num_rows($result) > 0){
   $error[] = 'That booking already exists,Select another time slot!';
  }else{
        $insert = "INSERT INTO `booking` (`TherapistName`, `Date`, `Time`) VALUES ('$TherapistName','$Date','$Time')";
        mysqli_query($con, $insert);
        $error[] = 'Booking Successful!';
  }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/vol-cont.css">
</head>
<body>
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
            <input type="text" name="TherapistName" required placeholder="Enter your preferred Therapist">        
            <input type="date" name="Date" min="<?php echo date("Y-m-d");?>" required placeholder="Enter your preferred day">
            <input type="time" name="Time" min="09:00" max="17:00" required placeholder="Enter your preferred time">
            <input type="submit" name="submit" value="Book" class="form-btn">
      </form>
  </div>  
</body>
</html>