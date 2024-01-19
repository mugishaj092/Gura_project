<?php
// Include your database connection file
include('../../connection.php');

// Get the product ID from the request
$id = $_GET['pro_id'];

// Fetch product and order quantities
$productQuery = "SELECT quantity FROM products WHERE product_id='$id'";
$orderQuery = "SELECT quantity AS orders_quantity FROM orders WHERE product_id='$id'";

$productResult = mysqli_query($connection, $productQuery);
$orderResult = mysqli_query($connection, $orderQuery);

$productRow = mysqli_fetch_assoc($productResult);
$orderRow = mysqli_fetch_assoc($orderResult);

$productQuantity = $productRow['quantity'];
$ordersQuantity = $orderRow['orders_quantity'];
echo '<script>alert("Order inserted successfully! ' . $ordersQuantity . '")</script>';

// Update product quantity by subtracting orders quantity
$newProductQuantity = $productQuantity - $ordersQuantity;

// Ensure the new quantity is not negative
if ($newProductQuantity >= 0) {
    $updateQuery = "UPDATE products SET quantity='$newProductQuantity' WHERE product_id='$id'";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo "Product quantity updated successfully!";
    } else {
        echo "Error updating product quantity: " . mysqli_error($connection);
    }
} else {
    echo "Error: Negative product quantity after updating orders quantity.";
}

// Close the database connection
mysqli_close($connection);
?>
