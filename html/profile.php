<?php
session_start();
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
  echo '<script>alert("Logout successful");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="../boxicons-2.1.4/css/boxicons.min.css" />
  </head>

  <body>
    <nav class="sidebar">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="../Image/logo.png" alt="" />
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
              echo '<li class="nav-link active">
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
        <div class="img">
            <img src="../Image/avator.png" alt="">
        </div>
        <div class="info">
            <div><span id="email">Names : </span><label for="email">Walmond</label></div>
            <div><span id="email">Email : </span><label for="email">Walmond@gmail.com</label></div>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
