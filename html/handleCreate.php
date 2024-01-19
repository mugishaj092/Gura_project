<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_quantity = $_POST["product_quantity"];

    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] == UPLOAD_ERR_OK) {
        $file_name = $_FILES["product_image"]["name"];
        $file_tmp = $_FILES["product_image"]["tmp_name"];
        $target_directory ="uploads/";
        $file_path = $target_directory . uniqid() . $file_name;
        if (move_uploaded_file($file_tmp, $file_path)) {
            $sql = "INSERT INTO products (product_name, product_price, product_image,quantity) 
                    VALUES ('$product_name', '$product_price','$file_path','$product_quantity')";
            if ($connection->query($sql) === TRUE) {
               header("Location: store.php");
            } else {
                echo "Error: " . $connection->error;
            }
        } else {
            echo "Error: Failed to move uploaded file to the target directory.";
        }
    } else {
        echo "Error: File upload failed.";
    }
    $connection->close();
}
?>