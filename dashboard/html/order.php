<?php
include 'connection.php';
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
                            <i class='bx bx-search-alt-2 icon' ></i>
                             <input type="search" name="" id="" placeholder="Search..">
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/index.html">
                            <i class='bx bx-home'></i>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/store.php">
                            <i class='bx bxs-store'></i>
                            <span class="text">Store</span>
                        </a>
                    </li>
                    <li class="nav-link active">
                        <a href="../html/order.php">
                            <i class='bx bxs-package'></i>
                            <span class="text">Order</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/user.php">
                            <i class='bx bx-user'></i>
                            <span class="text">Users</span>
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

                    <?php
                        include 'connection.php';
                        if (isset($_GET['productid'])) {
                          $id = $_GET['productid'];
                          $insertQuery = "INSERT INTO orders (product_id) VALUES ($id)";

                          $result = mysqli_query($connection, $insertQuery);
                          
                          if ($result) {
                            echo '<script>alert("Order inserted successfully!")</script>';
                          } else {
                              echo '<script>alert("Error inserting order: " . mysqli_error($connection))</script>' ;
                          }}
                    ?>
                    <?php
                        $query=" SELECT products.product_name, products.product_image,products.product_price, products.links, COUNT(orders.product_id) FROM `orders` JOIN 
                        `products` ON orders.product_id = products.product_id GROUP BY orders.product_id";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_array($query_run)){
                            ?>


                    <div class="card">
                        <div class="photo">
                            <img src="../Image/Items/<?php echo $row['product_image']; ?>" alt="">
                        </div>
                        <div class="name">
                            <span><?php echo $row['product_name'];   ?></span>
                            <span>x <?php echo $row['COUNT(orders.product_id)'];   ?></span>
                        </div>
                        </div>
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