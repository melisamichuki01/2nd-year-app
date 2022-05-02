<?php

@include 'config\dbcon.php';

if(isset($_POST['submit'])){
    
   $UserName =mysqli_real_escape_string($con,$_POST['UserName']);
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
         $insert = "INSERT INTO users (UserName,Email,UserType,Password) VALUES ('$UserName','$Email','$UserType','$Password')";
         mysqli_query($con, $insert);
         header('location:displayusers.php');
        
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
    
    <!--login section starts  -->

    <div class="form-container">

        <form action="" method="post">
                <h3>New User</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input type="text" name="UserName" required placeholder="Enter  name">
                <input type="email" name="Email" required placeholder="Enter  email">
                <select name="UserType">
                    <option value="" disabled selected>Register as a</option>
                    <option value="Client">Admin</option>
                    <option value="Therapist">Client</option>
                    <option value="Admin">Therapist</option>
                </select>
                <input type="password" name="Password" required placeholder="Enter  password">
                <input type="password" name="CPassword" required placeholder="Confirm  password">
                <input type="submit" name="submit" value="submit" class="form-btn">
            </form>

    </div>

    <!--login section ends-->
</body>