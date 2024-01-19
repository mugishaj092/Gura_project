<?php
 include "connection.php";
   session_start();
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
    <link rel="stylesheet" href="../CSS/store.css" />
    <link rel="stylesheet" href="../CSS/order.css" />
    <link rel="stylesheet" href="../CSS/menu.css" />
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
            <li class="nav-link active">
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
        <div class="header">
          <div class="header-back"></div>
          <span>Menu / Price</span>
          <div class="line"></div>
        </div>
        <div class="menu">
          <table id="table">
            <tr>
              <th>Number</th>
              <th>Items</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Cheese</td>
              <td>100</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Eggs</td>
              <td>100</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Rice</td>
              <td>100</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Bread</td>
              <td>100</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Vegetables</td>
              <td>100</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Fruits</td>
              <td>100</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Soda</td>
              <td>100</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Candy bars</td>
              <td>100</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Cheese</td>
              <td>100</td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
