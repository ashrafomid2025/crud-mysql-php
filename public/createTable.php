<?php
include "connection.php";

$command = "CREATE TABLE product(id INT PRIMARY KEY, name VARCHAR(50), PRICE INT NOT NULL)";

$connection->query($command);

?>