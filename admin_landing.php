<?php

@include 'config\dbcon.php';

session_start();

if(!isset($_SESSION['Admin_Name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-users"></i> WEvolve </a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Volunteer</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <div class="container">

    <div class="content">
        <h3>hi, <span>admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['Admin_Name'] ?></span></h1>
        <p>this is an admin page</p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <a href="logout.php" class="btn">logout</a>
    </div>

    </div>

</body>
</html>