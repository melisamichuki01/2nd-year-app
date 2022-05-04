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
    <title>Display Available Therapist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css\view.css">
</head>
<body>
    <header class="header">

    <a href="#" class="logo"><i class="fas fa-users">WEvolve.</i></a>
            <nav class="navbar">
            <a href="Userfiles\user_landing.php">Home</a>
            <a href="Userfiles\therapistview.php">Therapist Available</a>
            <a href="Userfiles\clientbooking.php">Book Now</a>
            <a href="Userfiles\viewappointments.php">View Appointments</a>
            <a href="C:\xampp\htdocs\2nd year app\login.php">Logout</a>

            </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    
    <div class="container">

        <table class="greenTable" style="height: 5px;" width="209"> 
            
            <thead>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
            </thead>
            
            
            <tbody>
                <?php
                $select = " SELECT * FROM therapist";
                $result = mysqli_query($con,$select);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $FirstName=$row['FirstName'];
                    $LastName=$row['LastName'];
                    $Email=$row['Email'];
                    echo'<tr>   
                            <td>'.$FirstName.'</td>
                            <td>'.$LastName.'</td>
                            <td>'.$Email.'</td>                      
                        </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
