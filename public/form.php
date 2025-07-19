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
    <div class ="w-full h-screen flex justify-center items-center">
        
        <form action = <?php echo $_SERVER["PHP_SELF"]; ?> method="post" class = "w-1/2 p-4 border rounded-md shadow-2xl shadow-black flex gap-1.5 flex-col" action="">
            <h1 class = "text-center">PRODUCT ENTRY</h1>
            <input name= "id" placeholder = "ID" class= "py-3 border rounded-md focus:outline-0 " type="number">
            <input name="proName" placeholder = "Name" class= "py-3 border rounded-md focus:outline-0 " type="text">
            <input name = "price" placeholder = "PRICE" class= "py-3 border rounded-md focus:outline-0 " type="number">
            <button class= "px-5 py-2 bg-green-500 text-white rounded-md hover:bg-blue-500 transition-all duration-500">Save</button>
        </form>
    </div>
    <?php
    // logic insert data into database 
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST["id"];
        $name = $_POST["proName"];
        $price = $_POST["price"];

        $dastor = "INSERT INTO product(id,name,PRICE) values('$id','$name','$price')";

        if($connection->query($dastor) ===true){
            echo "data inserted";
        }
        else{
            echo "data not inserted";
        }
    }
    ?>
</body>
</html>