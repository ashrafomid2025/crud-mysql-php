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
    
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label for="">Class Name</label>
        <input type="text" name = "class">
        <br>
        <label for="">Instructor</label>
        <input type="text" name = "teacher">
        <br>
        <button>Save</button>
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"] ==="POST"){
        $name = $_POST["class"];
        $instructore = $_POST["teacher"];

        $sql = "INSERT INTO class(NAME, INSTRUCTOR) VALUES('$name','$instructore')";
        if($connection  ->query($sql)==true){
            echo "data inserted";
        }
        else{
            echo "something went wrong";
        }

     }
    ?>
</body>
</html>