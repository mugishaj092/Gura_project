<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/store.css">
    <link rel="stylesheet" href="../CSS/order.css">
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css">
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Image/logo.png" alt="">
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
                    <i class="bx bx-search-alt-2 icon"></i>
                    <input type="search" name="" id="" placeholder="Search.." />
                </a>
                </li>
                <li class="nav-link">
                <a href="#">
                    <i class="bx bx-home"></i>
                    <span class="text">Home</span>
                </a>
                </li>
                <li class="nav-link">
                <a href="../html/store.php">
                    <i class="bx bxs-store"></i>
                    <span class="text">Store</span>
                </a>
                </li>
                <?php
                if (isset($_SESSION['user_id'])) {
                echo'<li class="nav-link active">
                <a href="../html/order.php">
                    <i class="bx bxs-package"></i>
                    <span class="text">Order</span>
                </a>
                </li>';
                }
                else{
                echo'';
                }
                ?>
                <li class="nav-link">
                <a href="../html/contact.php">
                    <i class="bx bxs-contact"></i>
                    <span class="text">contact</span>
                </a>
                </li>
                <li class="nav-link">
                <a href="../html/menu.php">
                    <i class="bx bxs-purchase-tag-alt"></i>
                    <span class="text">Menu/Price</span>
                </a>
                </li>
                <?php
            if (isset($_SESSION['user_id'])) {
                echo '<li class="nav-link">
                <a href="../html/profile.php">
                    <i class="bx bx-user-circle bx-tada bx-flip-vertical" ></i>
                    <span class="text">Profile</span>
                </a>
                </li>';
                echo '<li class="nav-link">
                <a href="../html/logout.php">
                    <i class="bx bx-log-out-circle bx-tada bx-flip-vertical" ></i>
                    <span class="text">Logout</span>
                </a>
                </li>';
            } else {
                echo '<li class="nav-link">
                <a href="../html/login.php">
                    <i class="bx bx-log-in"></i>
                    <span class="text">Login</span>
                </a>
                </li>';
                echo '<li class="nav-link">
                <a href="../html/login.php">
                    <i class="bx bx-log-in-circle bx-tada bx-flip-vertical" ></i>
                    <span class="text">SignUp</span>
                </a>
                </li>';
            }
            ?>
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

                <?php
    $user_id = $_SESSION['user_id'];

    if (isset($_GET['productid']) && isset($_SESSION['user_id'])) {
        $id = $_GET['productid'];
        $product_quantity = $_GET['product_quantity'];

        // Check if order quantity is less than product quantity
        if ($product_quantity > 0) {
            $insertQuery = "INSERT INTO orders (product_id, user_id) VALUES ($id, $user_id)";
            $result = mysqli_query($connection, $insertQuery);

            if ($result) {
                $selectquantity = "SELECT * FROM orders WHERE product_id = $id";
                $quantityResult = mysqli_query($connection, $selectquantity);
                $row1 = mysqli_fetch_array($quantityResult);
                $orderQuantity = $row1['quantity'];

                // Check if order quantity is less than product quantity
                if ($orderQuantity <= $product_quantity) {
                    echo '<script>alert("Order inserted successfully! Order quantity: ' . $orderQuantity . '")</script>';
                } else {
                    echo '<script>alert("Error: Order quantity exceeds product quantity!")</script>';
                }
            } else {
                echo '<script>alert("Error inserting order: ' . mysqli_error($connection) . '")</script>';
            }
        } else {
            echo '<script>alert("Error: Invalid product quantity!")</script>';
        }
    }
?>

<?php
    $query = "SELECT products.product_name, products.product_image, products.product_price, orders.quantity, orders.user_Id, orders.product_id FROM `orders` JOIN 
    `products` ON orders.product_id = products.product_id WHERE user_Id='$user_id' GROUP BY orders.product_id";
    $query_run = mysqli_query($connection, $query);

    if (!$query_run) {
        die("Error in query: " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($query_run)) {
?>
<a href="../html/items/html/item.php?itemid=<?php echo $row['product_id']; ?>" style="text-decoration: none;">
<div class="card">
                <div class="photo">
                    <img src="<?php echo $row['product_image']; ?>" alt="">
                </div>
                <div class="name">
                    <span><?php echo $row['product_name']; ?></span>
                    <span>x <?php echo $row['quantity']; ?></span>
                </div>
            </div>
        </a>
<?php
    }
?>

                    
                </div>
            </div>

        </div>

            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>