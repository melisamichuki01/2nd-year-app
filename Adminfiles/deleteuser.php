<?php
@include 'config\dbcon.php';
session_start();

if(!isset($_SESSION['Admin_Name'])){
   header('location:login.php');
}

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $delete = "DELETE FROM users WHERE id = $id";
    $result =mysqli_query($con, $delete);

    if($result) {
        //echo"Deleted Successfully";
        header('location:Adminfiles\displayusers.php');
    }else{
        echo"An error occurred";
        header('location:Adminfiles\displayusers.php.php');
        die();
    }
}

?>