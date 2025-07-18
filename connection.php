<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "testing321";

$connection = new mysqli($serverName,$username,$password,$dbName);

if($connection->connect_error){
    die("connection faild: ". $connection->connect_error);
}

?>