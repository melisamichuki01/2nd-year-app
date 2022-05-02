<?php
@include 'config\dbcon.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $delete = "DELETE FROM users WHERE id = $id";
    $result =mysqli_query($con, $delete);

    if($result) {
        //echo"Deleted Successfully";
        header('location:displayusers.php');
    }else{
        echo"An error occurred";
        header('location:displayusers.php');
        die();
    }
}

?>