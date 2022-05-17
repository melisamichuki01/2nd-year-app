<?php

@include 'config\dbcon.php';

session_start();

if(!isset($_SESSION['Client_Name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/landingpage.css">

</head>
<body>
   <header class="header">

      <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
         <nav class="navbar">
         <a href="user_landing.php">Home</a>
         <a href="therapistview.php">Therapist Available</a>
         <a href="viewtakeaways.php">Therapy Reports</a>
         <a href="clientbooking.php">Book Now</a>
         <a href="viewappointments.php">View Appointments</a>
         <a href="login.php">Logout</a>

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
						<td><?=$_SESSION['Client_Name']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['Client_Email']?></td>
					</tr>
               <tr>
						<td>UserType:</td>
						<td><?=$_SESSION['Client_UserType']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['Client_Password']?></td>
					</tr>
               <tr>
                  <td colspan="2" align="right">
                  <br />
                     <a href="template.php">Edit Profile</a>
                  </td>
               </tr>
				</table>
			</div>
   </div>
</div>
</body>
</html>