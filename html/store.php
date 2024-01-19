<?php
 include "connection.php";
   session_start();
?>

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
                <li class="nav-link active">
                <a href="../html/store.php">
                    <i class="bx bxs-store"></i>
                    <span class="text">Store</span>
                </a>
                </li>
                <?php
                if (isset($_SESSION['user_id'])) {
                echo'<li class="nav-link">
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
                <span>PRODUCT AVAILABLE IN STORE</span>
                <div class="line"></div>
            </div>

            <div class="mainstore">
                <div class="div1">
                    <div class="search-box">
                        <div class="icon"><i class='bx bx-search-alt-2 icon' ></i></div>
                        <input type="search" name="" id="" placeholder="Search product">
                    </div>
                    <div class="add">
                        <a href="addpro.html"><button class="add">Add Products<i class='bx bx-add-to-queue'></i></button></a>
                    </div>
                </div>
                <div class="store">
                    <?php
                    

                        $query=" SELECT * FROM `products`";
                        $query_run=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_Array($query_run)){
                            ?>


                    <div class="card">                        
                            <div class="photo">
                                <img src="<?php echo $row['product_image']; ?>" alt="">
                            </div>
                            <div class="name">
                                <div style=" width:100%;   display: flex;justify-content: space-between;align-items: center;">
                                    <span><?php echo $row['product_name']; ?></span>
                                    
                                    <span style="font-size:0.8rem;"><?php echo $row['product_price']; ?>$</span>
                                </div>
                                <span><?php echo $row['quantity']; ?></span>
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                    echo '<button id="cart" style="background: var(--primary-color); border-radius: 6px; border:2px solid #fff;padding:5px"><a href="order.php?productid=' . $row['product_id'] . ' && product_quantity='. $row['quantity'] .'" style="text-decoration: none; color:#fff;">Add to cart</a></button>';
                                } else {
                                    echo '';
                                }
                                
                                ?>

                                               
                            </div>
                    
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