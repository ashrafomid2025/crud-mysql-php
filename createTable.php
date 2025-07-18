<?php
include "connection.php"; // Assumes your connection uses $conn

$sql = "CREATE TABLE USERS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USERNAME VARCHAR(50),
    EMAIL VARCHAR(50)
)";

if ($connection->query($sql) === TRUE) {
    echo "Successfully created the table.";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
