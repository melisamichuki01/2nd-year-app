<?php

@include 'config\dbcon.php';
session_start();

if(isset($_POST['submit'])){
    
   $Email = mysqli_real_escape_string($con, $_POST['Email']);
   $Password = mysqli_real_escape_string($con,$_POST['Password']);
   


   $select = " SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);

    if($row['UserType'] == 'Admin')
    {
        $_SESSION['Admin_Name'] = $row['UserName'];
        header('location:admin_landing.php');
    }elseif($row['UserType'] == 'Client')
    {
        $_SESSION['Client_Name'] = $row['UserName'];
        header('location:user_landing.php');
    }elseif($row['UserType'] == 'Therapist')
    {
        $_SESSION['Therapist_Name'] = $row['UserName'];
        header('location:therapist_landing.php');
    }
   }else{
       $error[] = 'Incorrect email or pasword!';
   }
   

};
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <!--header section starts-->
    <header class="header">

        <a href="#" class="logo"><i class="fa-solid fa-people-group">WEvolve.</i></a>
        <nav class="navbar">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Contact</a>
          <a href="">Volunteer</a>
          <a href="login.php">Login</a>
          <a href="signup.php">Signup</a>
          
          
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
  
    </header>
    <!--header ends-->
    <!--login section starts  -->
    <div class="form-container">

        <form action="" method="post">
            <h3>login now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="Email" required placeholder="Enter your email">
            <input type="password" name="Password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="signup.php">register now</a></p>
        </form>

    </div>

    <!--login section ends-->

    <script src="js\script.js"></script>
</body>