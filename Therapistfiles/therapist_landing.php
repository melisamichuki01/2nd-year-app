<?php

@include 'config\dbcon.php';

session_start();

if(!isset($_SESSION['Therapist_Name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Therapist page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/landingpage.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
   <header class="header">

   <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
      <nav class="navbar">
      <a href="">Home</a>
      <a href="">About</a>
      <a href="viewappointments.php">View Appointments</a>
      <a href="C:\xampp\htdocs\2nd year app\login.php">Logout</a>

      </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
   </header>
   
   <div class="container">
   
      <div class="content">
            <h2>Profile Page</h2>
            <div>
               <p><h1>Your account details are below:</h1></p>
               <table>
               <tr>
						<td>Username:</td>
						<td><?=$_SESSION['Therapist_Name']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['Therapist_Name']?></td>
					</tr>
               <tr>
						<td>UserType:</td>
						<td><?=$_SESSION['Therapist_UserType']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['Therapist_Password']?></td>
					</tr>
               </table>
            </div>
      </div>
   </div>

</body>
</html>