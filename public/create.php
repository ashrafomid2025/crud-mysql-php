<?php
include("connect.php");
if(isset($_POST["save"])){
    $name = $_POST["name"];
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "images/".$file_name;
    $query = "insert into  crud(name,imgurl) value('$name','$file_name')";
    $result = $connection->query($query);

    move_uploaded_file($tempname,$folder);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype ="multipart/form-data">
        <input type="text" name = "name">
        <br>
        <input type="file" name = "image">
        <br>
        <input type="submit" name ="save" value ="Save">
    </form>
</body>
</html>