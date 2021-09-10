<?php
session_start();
$con= mysqli_connect("localhost","root","","eCommerce");
if($con->connect_error){
    die ("Connection Aborted");
}
?>