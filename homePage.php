<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Welcome to dashboard</h1>

    <?php
    $con=mysqli_connect('localhost','root','','student');
    $sql="select * from product_table";
    $result= mysqli_query($con,$sql);

    if($result){
        while($user = $result->fetch_assoc()){
        
        ?>
      
        <img src="<?=$user["product_image"]?>" alt="img" width="100" height="100">
         <p> <?=$user["product_name"]?></p>
        <p><?=$user["price"]?></p>
        <p><?=$user["description"]?></p>

<?php 
        }  
    }
    ?>
</body>
</html>
