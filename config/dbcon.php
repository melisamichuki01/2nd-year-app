<?php

$host ="localhost";
$username="root";
$password="";
$database="mhasbooking";

$con =mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    echo "Error: Unable to connect to MySQL.";
    die();
}
?>