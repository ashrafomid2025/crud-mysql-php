<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <table class = "w-[80%] mx-auto border p-2 text-center">
        <tr class="h-6">
            <th class= "border">ID</th>
            <th class= "border">Name</th>
            <th class= "border">Price</th>
        </tr>
        <?php
         $dastor = "SELECT * FROM product";
        $result =  $connection->query($dastor);
         while($row = $result->fetch_assoc()){
            echo "<tr class ='even:bg-gray-500 even:text-white'>";
            echo "<td class ='border p-2 border-collapse '>". $row["id"]. "</td>";
            echo "<td class ='border p-2 border-collapse '>". $row["name"]. "</td>";
            echo "<td class ='border p-2 border-collapse '>". $row["PRICE"]. "</td>";
            echo "<tr>";
         }
        ?>

    </table>
</body>
</html>