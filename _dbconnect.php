<?php
$server="localhost";
$username="root";
$password="";
$database="GCA-Quora";
$conn=mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die(" some error from our database connection!!");
}
?>