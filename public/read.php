<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = "border">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php
         $dastor = "SELECT * FROM product";
        $result =  $connection->query($dastor);
         while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["name"]. "</td>";
            echo "<td>". $row["PRICE"]. "</td>";
            echo "<tr>";
         }
        ?>

    </table>
</body>
</html>