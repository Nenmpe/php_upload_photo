<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    // Check if file is selected
    if (!empty($_FILES['image']['name'])) {
       
        $uploadDir = "assets/uploads/";
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        // Check for file upload errors
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "File is valid and uploaded successfully";
        } else {
            echo "Unable to upload. Error: " . $_FILES['image']['error'];
        }
    }

    // Establish database connection
    $con = mysqli_connect('localhost', 'root', '', 'student');

    // Check for database connection errors
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the database
    $sql = "INSERT INTO product_table (product_name, price, description, product_image) VALUES ('$product', '$price', '$desc', '$uploadFile')";

    // Execute the SQL query
    $result = mysqli_query($con, $sql);

    // Check for SQL errors
    if ($result) {
        header("Location: homePage.php");
        exit();
    } else {
        echo "Error in SQL query: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
