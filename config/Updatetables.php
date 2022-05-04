<?php

function updatetables($FirstName,$LastName,$Email,$UserType){
   require 'config\dbcon.php';
   $select = " SELECT * FROM users WHERE UserType = '$UserType'";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);

    if($row['UserType'] == 'Admin')
    {
        $insert = "INSERT INTO `admin` (FirstName, LastName, Email) VALUES ('$FirstName','$LastName','$Email')";
        mysqli_query($con, $insert);
    }elseif($row['UserType'] == 'Client')
    {   
        $insert = "INSERT INTO `clients` (FirstName, LastName, Email) VALUES ('$FirstName','$LastName','$Email')";
        mysqli_query($con, $insert);
    }elseif($row['UserType'] == 'Therapist')
    {
        $insert = "INSERT INTO `therapist` (FirstName, LastName, Email) VALUES ('$FirstName','$LastName','$Email')";
        mysqli_query($con, $insert);
    }
   }
}
?>