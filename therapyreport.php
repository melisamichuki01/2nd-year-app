<?php

@include 'config\dbcon.php';
session_start();
if(isset($_SESSION['Therapist_Name'])){
    if(isset($_POST['submit'])){
        
    $ClientName =mysqli_real_escape_string($con,$_POST['ClientName']);
    $TherapistName = mysqli_real_escape_string($con, $_POST['TherapistName']);
    $TakeAway = mysqli_real_escape_string($con, $_POST['TakeAway']);

    $insert = "INSERT INTO `takeaways` (`ClientName`, `TherapistName`, `TakeAway`) VALUES ('$ClientName','$TherapistName','$TakeAway')";
    $result=mysqli_query($con, $insert);
    if (!$result){
            echo "An error occurred";
    }else{
            header('location:therapyreport.php');
            echo "Inserted Successfully";
            die();
    }
    }
}else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css\vol.css">
</head>
<body>
    <!--header section starts-->
    <header class="header">

        <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
        <nav class="navbar">
            <a href="therapist_landing.php">Home</a>
            <a href="therapyreport.php">Client Reports</a>
            <a href="tmybookings.php">View Appointments</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
  
    </header>
    <!--header ends-->

     <div class="container">
        <form action="" method="post">
            <h1>Take Aways from The Session</h1>
            <input type="text" name="ClientName" id="ClientName" required placeholder="ClientName">
            <input type="text" name="TherapistName" id="TherapistName" required placeholder="TherapistName">
            <textarea id="message" name="TakeAway" "rows="4" required placeholder="Write Down things that your Patient Should Take Note of"></textarea>
            <input type="submit" name="submit" value="Submit" class="form-btn">
        </form>
    </div>
    <script src="js\script.js"></script>
        
 
</body>
</html>