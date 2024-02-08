<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="addProductController.php" method="post" enctype="multipart/form-data">
        Add image : <input type="file" name="image">
        <br>

        Product Name : <input type="text" name="productName">
        <br>

        Description : <input type="text" name="desc">
        <br>

        Price : <input type="text" name="price">
        <br>

        <input type="submit" value="Add product">
    </form>
</body>
</html>