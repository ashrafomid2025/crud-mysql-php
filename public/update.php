<?php 
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dastor = "SELECT * FROM product where id='$id'";
    $result = $connection->query($dastor);
    $row = $result->fetch_assoc();
   
}
if($_SERVER['REQUEST_METHOD']==="POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $dastor = "UPDATE product SET id='$id', name ='$name', PRICE ='$price' WHERE id='$id'";
    if($connection->query($dastor)===true){
        header("location:read.php");
    }
    else{
        header("location:read.php");
    }

}
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
    <!-- update -->
     <div class="w-full flex justify-center items-center h-screen">
        <form action="<?php echo $_SERVER['PHP_SELF']."?id=".$row['id']; ?> " method = "post" class="w-[50%] p-4 border rounded-[9px]">
            <div>
                <label >ID</label>
            <input name="id" value =<?php echo $row['id'] ?> class="py-2 w-full border rounded-[8px] focus:outline-0" type="text">
</div>
<div>
    <label >Name</label>
            <input name="name" value =<?php echo $row['name']; ?> class="py-2 w-full border rounded-[8px] focus:outline-0" type="text">
</div>
<div>
    <label >Price</label>
            <input name="price" value = <?php echo $row['PRICE'] ?> class="py-2 w-full border rounded-[8px] focus:outline-0" type="text">

</div>
         <button class="py-2.5 px-5 bg-blue-500 text-white my-2 rounded-[9px] hover:bg-red-500 transition-all duration-500">Update</button>
        </form>
     </div>
</body>
</html>