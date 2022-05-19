<?php
//create constants to store non Repeating values
$LOCALHOST="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_NAME="food-order";
$con = new mysqli($LOCALHOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME); //database connection

if($con->connect_error)
{
    die($con->connect_error);
}
?>