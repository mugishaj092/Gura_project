<?php
include 'connection.php';
if (isset($_GET['updateid'])) {
  $id = $_GET['updateid'];
  $sql = "SELECT * FROM `signup` WHERE id = $id";
  $result = mysqli_query($connection,$sql);
  $row=mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['conf_password'];

    if ($password != $confirmPassword) {
        echo '<script>alert("Passwords do not match!");</script>';
    } else {
        // Fix the variable name from $updateQuery to $updateQuery
        $updateQuery = "UPDATE `signup` SET email='$email', 
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/login.css" />
    <link rel="stylesheet" href="../CSS/signup.css" />
    <link rel="stylesheet" href="../CSS/contact.css" />
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
              <a href="">
                <i class="bx bx-search-alt-2 icon"></i>
                <input type="search" name="" id="" placeholder="Search.." />
              </a>
            </li>
            <li class="nav-link">
              <a href="index.php">
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
            <li class="nav-link">
              <a href="../html/order.php">
                <i class="bx bxs-package"></i>
                <span class="text">Order</span>
              </a>
            </li>
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
            <li class="nav-link">
              <a href="../html/login.php">
                <i class="bx bx-log-in"></i>
                <span class="text">Log In</span>
              </a>
            </li>
            <li class="nav-link active">
              <a href="../html/signup.php">
                <i class="bx bx-log-in-circle bx-tada bx-flip-vertical"></i>
                <span class="text">Sign Up</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="container">
        <div class="image-text">
          <span class="image">
            <img src="../Image/logo.png" alt="" />
          </span>
          <div class="text header-text">
            <span class="name">Gura</span>
            <span class="profession">Supermarket</span>
          </div>
        </div>
        <div class="online-shoping">
          <div class="photo">
            <img src="../Image/back.png" />
          </div>
          <div class="right">
            <div class="text">
              <div class="text1">
                <span>ONLINE</span>
                <span>Supermarket</span>
              </div>
              <div class="text2">
                <span>FOOD DELIVERY</span>
                <span>SERVICE</span>
              </div>
            </div>
            <span class="btn"><button>Order now</button></span>
          </div>
        </div>
      </div>
      <div class="login">
        <div class="header">
          <div class="log active">
            <a href="login.php"><span class="text">Login</span></a>
          </div>
          <div class="sign active">
            <a href="#"><span class="text">SignUp</span></a>
          </div>
        </div>
        <form action="" method="POST">
          <div class="main">
            <div class="input">
            <div class="inputbox">
                <input class="" name="names" id="input" type="text" value="<?php echo $row['Names'] ?>" required="required" />
                <span>Names</span>
              </div>
              <div class="inputbox">
                <input class="" name="email" id="input" type="text" value="<?php echo $row['email'] ?>" required="required" />
                <span>Email</span>
              </div>
              <div class="inputbox">
                <input id="input" name="password" type="text" value="<?php echo $row['password'] ?>" required="required" />
                <span>Password</span>
              </div>
              <div class="inputbox">
                <input id="input" name="conf_password" type="text" value="<?php echo $row['confirm_password'] ?>" required="required" />
                <span>Confirm Password</span>
              </div>
              <div class="forget">
                <span>Already Have An Account?<span><a href="">Login</a></span></span
                >
              </div>
              <button class="btn in" type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
