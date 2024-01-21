<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/store.css">
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
                    <li class="nav-link active">
                        <a href="../html/store.php">
                            <i class='bx bxs-store'></i>
                            <span class="text">Store</span>
                        </a>
                    </li>
                    <li class="nav-link">
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
                <span>PRODUCT AVAILABLE IN STORE</span>
                <div class="line"></div>
            </div>

            <div class="mainstore">
                <div class="search-box">
                    <div class="icon"><i class='bx bx-search-alt-2 icon' ></i></div>
                     <input type="search" name="" id="" placeholder="Search product">
                </div>
                <div class="store">
                    <?php
                        include "connection.php";

                        $query=" SELECT * FROM `products`";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_array($query_run)){
                            ?>


                    <div class="card">
                        <a href="../html/items/html/item.php?itemid=<?php echo $row['product_id']; ?>">
                            <div class="photo">
                                <img src="../Image/Items/<?php echo $row['product_image']; ?>" alt="">
                            </div>
                            <div class="name">
                                <div>
                                    <span><?php echo $row['product_name']; ?></span>
                                    <span><?php echo $row['product_price']; ?>$</span>
                                </div>
                                <button><a href="order.php?productid=<?php echo $row['product_id']; ?>">Add to cart</a></button>               
                            </div>
                        </a>
                        <style>
                            .card{
                                height: 290px;
                            }
                            .card .photo{
                                height: 200px;
                            }
                            .card .name {
                                height: 20%;
                                padding: 20px;
                                display: flex;
                                justify-content: space-between;
                                flex-direction: column;
                                align-items: center;
                                color: var(--primary-color-light);
                                font-size: 1.2rem;
                                transition: all 0.3s ease;
                            }
                        </style>
                    </div>


                            <?php
                        }
                    ?>
                </div>
            </div>

        </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>