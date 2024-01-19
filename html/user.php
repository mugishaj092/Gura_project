<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/user.css" />
    <link rel="stylesheet" href="../CSS/home.css" />
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
            <li class="nav-link active">
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
            <li class="nav-link">
              <a href="../html/order.php">
                <i class="bx bxs-package"></i>
                <span class="text">Order</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="../html/contact.html">
                <i class="bx bxs-contact"></i>
                <span class="text">contact</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="../html/menu.html">
                <i class="bx bxs-purchase-tag-alt"></i>
                <span class="text">Menu/Price</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="../html/login.php">
                <i class='bx bx-log-in'></i>
                <span class="text">Login</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="../html/login.php">
                <i class='bx bx-log-in-circle bx-tada bx-flip-vertical' ></i>
                <span class="text">SignUp</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="containerUser">
        <div class="itemHeader">
            <span id="names">Names</span>
            <span id="email">Email</span>
            <span id="password">Password</span>
            <span id="password">Confirm Password</span>
            <span id="password">Created At</span>
            <span>Update</span>
            <span>Delete</span>
        </div>

                <?php
                if (isset($_GET['deleteid'])) {
                  $id = $_GET['deleteid'];
                  $sql = "DELETE FROM `signup` WHERE id=$id";
                  $result = mysqli_query($connection, $sql);
                  
                  if ($result) {
                      echo "Record deleted successfully";
                      echo '<script>location.href="user.php";</script>';
                  } else {
                      echo "Error deleting record: " . mysqli_error($connection);
                  }
              }
                        $sql= "SELECT id,Names,email, password, confirm_password,created_at FROM `signup`";
                        $result=mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                          $names=$row['Names'];
                          $email=$row['email'];
                          $password=$row['password'];
                          $confirmPassword=$row['confirm_password'];
                          $created=$row['created_at'];
                          $id=$row['id'];
                            ?>


                        <div class="item" id="item">
                                    <span id="names"><?php echo $names ?></span>
                                    <span id="email"><?php echo $email ?></span>
                                    <span id="password"><?php echo $password ?></span>
                                    <span id="password"><?php echo $confirmPassword ?></span>
                                    <span id="password"><?php echo $created ?></span>
                                    <button class="update"><a href="update.php?updateid=<?php echo $id; ?>"><i class='bx bx-edit'></i></></button>
                                    <button class="delete"><a href="user.php?deleteid=<?php echo $id; ?>"><i class='bx bx-trash'></i></a></button>                                
                                  </div>
                            <?php
                        }
                    ?>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
