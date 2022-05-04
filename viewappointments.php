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
    <title>Display</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css\view.css">
</head>
<body>
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
    <div class="container table">

        <table class="greenTable" style="height: 5px;" width="209">
            
            <thead>
                <th >TherapistName</th>
                <th >Date</th>
                <th >Time</th>
                <th >Created at</th>
            </thead>
            
            <tbody>
                <?php
                if(isset($_SESSION['Client_Name'])){
            
                  
                    $select = "SELECT * FROM booking where `ClientEmail` = '".$_SESSION['Client_Email']."' ";
                    $result = mysqli_query($con,$select);
                    if(isset($_SESSION['Client_Name'])){
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                            $TherapistName=$row['TherapistName'];
                            $Date=$row['Date'];
                            $Time=$row['Time'];
                            $created_at=$row['created_at'];
                            echo'<tr>
                                    <td>'.$TherapistName.'</td>
                                    <td>'.$Date.'</td>
                                    <td>'.$Time.'</td>
                                    <td>'.$created_at.'</td>
                                </tr>';
                            }
                        }
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>