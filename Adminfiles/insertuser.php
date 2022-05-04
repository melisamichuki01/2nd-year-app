<?php

@include 'config\dbcon.php';
@include 'config\Updatetables.php';

session_start();
if(!isset($_SESSION['Admin_Name'])){
    header('location:login.php');
 }else{
    if(isset($_POST['submit'])){
        
        $FirstName =mysqli_real_escape_string($con,$_POST['FirstName']);
        $LastName =mysqli_real_escape_string($con,$_POST['LastName']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $UserType = mysqli_real_escape_string($con, $_POST['UserType']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
        $CPassword = mysqli_real_escape_string($con,$_POST['CPassword']);
    
        $select = " SELECT * FROM users WHERE Email = '$Email'";
    
        $result = mysqli_query($con, $select);
    
        if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    
        }
        else{
            if($Password != $CPassword){
            $error[] = 'Password not matched!';
        }else{
            $insert = "INSERT INTO `users` (FirstName, LastName, Email, UserType, Password) VALUES ('$FirstName','$LastName','$Email','$UserType','$Password')";
            mysqli_query($con, $insert);
            updatetables($FirstName,$LastName,$Email,$UserType);
            header('location:Adminfiles\displayusers.php');
        }
        }
    }
 };


?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>New User</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <header class="header">

    <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
        <nav class="navbar">
            <a href="Adminfiles\admin_landing.php">View Profile</a>
            <a href="Adminfiles\displayusers.php">View Users</a>
            <a href="Adminfiles\insertuser.php"">Insert New User</a>
            <a href="Adminfiles\viewappointadmin.php">View Appointments</a>
            <a href="C:\xampp\htdocs\2nd year app\login.php">Logout</a>

        </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    
    

    <div class="form-container">

        <form action="" method="post">
            <h3>Sign Up</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="FirstName" required placeholder="Enter your first name">
            <input type="text" name="LastName" required placeholder="Enter your last name">
            <input type="email" name="Email" required placeholder="Enter your email">
            <select name="UserType">
                <option value="" disabled selected>Register as a</option>
                <option value="Client">Admin</option>
                <option value="Therapist">Client</option>
                <option value="Admin">Therapist</option>
            </select>
            <input type="password" name="Password" required placeholder="Enter your password">
            <input type="password" name="CPassword" required placeholder="Eonfirm your password">
            <input type="submit" name="submit" value="register now" class="form-btn">
        </form>
    </div>

    <!--login section ends-->
</body>