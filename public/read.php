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
    <!-- crud=> create, read, update, delete -->
     <h1 class="w-full p-4 bg-purple-500 text-white text-center mb-4">Product List</h1>
     <?php
      $dastor = "SELECT * FROM product";
     $natija =  $connection->query($dastor);
     if($natija->num_rows >0){
        echo "<table class='w-[90%] mx-auto my-2 border rounded-md border-collapse'>";
        echo "<tr class ='border rounded-md text-center'>";
        echo "<th class='border'>ID</th>";
        echo "<th class='border'>Name</th>";
        echo "<th class='border'>Price</th>";
         echo "<th class='border'>Delete</th>";
         echo "<th class='border'>Update</th>";
      
        echo "</tr>";
        while($radif = $natija->fetch_assoc()){
            echo "<tr class ='border rounded-md text-center h-[30px]'>";
            echo "<td class='border'>". $radif['id']. "</td>";
            echo "<td class='border'>". $radif['name']. "</td>";
            echo "<td class='border'>". $radif['PRICE']. "</td>";
            echo "<td><a href = 'delete.php?id=". $radif['id']."'>Delete</td>";
            echo "<td class ='border h-[40px]'><a class='py-1 px-5 bg-blue-500 text-white' href ='update.php?id=".$radif['id']."'>Update</a></td>";
            echo "<tr>";
        }
        echo "</table>";
  
     }


     if(isset($_GET["message"])){
    if($_GET["message"]==="success"){
        echo "<h1 id='message' class='absolute top-2 right-3 bg-green-400 text-white p-4'>One item delete</h1>";
    }
    else{
        echo "<h1>The item could not be deleted</h1>";
    }
}
     ?>
   
</body>
</html>