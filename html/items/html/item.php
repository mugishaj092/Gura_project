<?php
include_once     '../../connection.php';
session_start();
if (isset($_GET['itemid'])) {
  $id = $_GET['itemid'];
  
  $sql = "SELECT * FROM `products` where product_id = '$id'"; 
  $result = mysqli_query($connection,$sql);
  $row=mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $names = $_POST['quantity'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['conf_password'];

    if ($password != $confirmPassword) {
        echo '<script>alert("Passwords do not match!");</script>';
    } else {
        // Fix the variable name from $updateQuery to $updateQuery
        $updateQuery = "UPDATE `order` SET email='$email', 
                        password='$password', confirm_password='$confirmPassword', 
                        created_at=NOW(), Names='$names' WHERE id=$id";

        $result = mysqli_query($connection, $updateQuery);

        if($result) {
            echo '<script>alert("Update successful");</script>';
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }
    }}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <link rel="shortcut icon" href="../../../Image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../CSS/style.css">
    <link rel="stylesheet" href="../../../CSS/home.css">
    <link rel="stylesheet" href="../../../CSS/store.css">
    <link rel="stylesheet" href="../../../CSS/order.css">
    <link rel="stylesheet" href="../CSS/items.css">
    <link rel="stylesheet" href="../../../boxicons-2.1.4/css/boxicons.min.css">
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../../../Image/logo.png" alt="">
                </span>
                <div class="text header-text">
                    <span class="text">Gura</span>
                    <span class="profession">Supermarket</span>
                </div>
            </div>
        </header>

        <div class="mune-bar">
            <div class="menu">
                <ul class="mune-links">
                    <li class="search-box">
                        <a href="#">
                            <i class='bx bx-search-alt-2 icon' ></i>
                             <input type="search" name="" id="" placeholder="Search..">
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../../index.php">
                            <i class='bx bx-home'></i>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../../store.php">
                            <i class='bx bxs-store'></i>
                            <span class="text">Store</span>
                        </a>
                    </li>
                    <li class="nav-link active">
                        <a href="../../order.php">
                            <i class='bx bxs-package'></i>
                            <span class="text">Order</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../../contact.php">
                            <i class='bx bxs-contact'></i>
                            <span class="text">contact</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../../menu.php">
                            <i class='bx bxs-purchase-tag-alt' ></i>
                            <span class="text">Menu/Price</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="header"><div class="header-back"></div>
                <span>PLACED ORDERS</span>
                <div class="line"></div>
            </div>

            <div class="mainstore">
                <div class="search-box">
                    <div class="icon"><i class='bx bx-search-alt-2 icon' ></i></div>
                     <input type="search" name="" id="" placeholder="Search product">
                </div>
                <div class="store">
                    <div class="card" id="none">
                        <div class="photo none" id="">
                            <img src="../../../Image/Items/cheese.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Cheese</span>
                            <span>x 1</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/eggs.png" alt="">
                        </div>
                        <div class="name">
                            <span>Eggs</span>
                            <span>x 1</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/rice.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Rice</span>
                            <span>x 5</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/bread.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Bread</span>
                            <span>x 8</span>
                        </div>
                    </div>
    
    
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/vegetables.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Vegetables</span>
                            <span>x 2</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/fruits.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Fruits</span>
                            <span>X 7</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/soda.png" alt="">
                        </div>
                        <div class="name">
                            <span>Soda</span>
                            <span>x 34</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/candy bars.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Candy bars</span>
                            <span>x 1</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/cheese.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Cheese</span>
                            <span>x 4</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/cheese.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Cheese</span>
                            <span>x 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/cheese.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Cheese</span>
                            <span>x 4</span>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="photo">
                            <img src="../../../Image/Items/cheese.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Cheese</span>
                            <span>x 4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
</main>
<?php
$id = $_GET['itemid'];
$user_id = $_SESSION["user_id"];
$query1 = "SELECT products.*, orders.* FROM `orders` 
           JOIN `products` ON orders.product_id = products.product_id 
           WHERE products.product_id='$id' AND orders.user_id='$user_id'";

$query_run = mysqli_query($connection, $query1);
$row = mysqli_fetch_assoc($query_run);
$order_quantity = $row['orders.quantity'];

if (!$query_run) {
    die("Error in query: " . mysqli_error($connection));
}

if (isset($row['orders.quantity'])) {
    echo '<script>alert("Order inserted successfully! ' . $order_quantity . '")</script>';
} else {
    echo '<script>alert("Insert fail"))</script>';
}
?>

<?php

if (isset($_POST['quantitysub'])) {
    $quantity = $_POST['quantity'];

    // Check if the new quantity is less than or equal to the available quantity
    $product_quantity = $row['product_quantity'];
    if ($quantity <= $product_quantity) {
        $updateQuery = "UPDATE `orders` SET quantity='$quantity' WHERE product_id=$id";

        $result = mysqli_query($connection, $updateQuery);
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
        if ($result) {
            echo '<script>alert("Update successful");</script>';
            echo '<script>alert("Order inserted successfully! ' . $order_quantity . '")</script>';
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }
    } else {
        echo '<script>alert("Error: Quantity exceeds available stock.")</script>';
    }
}
?>

<div class="cont">
    <div class="conta">
        <form method="POST" action="">
        <img src="../../../html/<?php echo $row['product_image'] ?>" alt="" width="400px" height="300px">
            <div class="base">
                <div class="info">
                    <div class="name"><span><?php echo $row['product_name'] ?></span></div>
                    <div class="price"><?php echo $row['product_price'] ?>$</div>
                    <div class="quantity">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" value="<?php echo $order_quantity; ?>">
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" style="color: #fff" name="quantitysub"><a href="updateQuantity.php?pro_id=<?php echo $row['product_id'] ?>">Submit</a></button>
                    <button><a href="../../order.php" style="color: #fff">Back</a></button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>