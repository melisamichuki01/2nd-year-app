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
    <title>Display</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css\view.css">
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
    
    <div class="container">

        <table class="greenTable" style="height: 5px;" width="209"> 
            
            <thead>
                <th>Id</th>
                <th>FirstName</th>
                <th>Email</th>
                <th>UserType</th>
                <th>Password</th>
                <th>Operations</th>
            </thead>
            
            
            <tbody>
                <?php
                $select = " SELECT * FROM users ";
                $result = mysqli_query($con,$select);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $FirstName=$row['FirstName'];
                    $Email=$row['Email'];
                    $UserType=$row['UserType'];
                    $Password=$row['Password'];
                    echo'<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$FirstName.'</td>
                                <td>'.$Email.'</td>
                                <td>'.$UserType.'</td>
                                <td>'.$Password.'</td>
                                <td> <button id="btn"> <a href="Adminfiles\updateuser.php?updateid='.$id.'">Update</a> </button>
                                    <button id="btn"> <a href="Adminfiles\deleteuser.php?deleteid='.$id.'">Delete</a> <button> </td>
                            </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
