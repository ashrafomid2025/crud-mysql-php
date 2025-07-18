<?php
include "connection.php";
$sql = "insert into users(username,email) values('Mohammad','ashrafomid@gmail')";
$connection->query($sql);

?>