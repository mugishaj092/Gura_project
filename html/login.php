<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/login.css" />
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
            <li class="nav-link active">
              <a href="../html/login.php">
                <i class="bx bx-log-in"></i>
                <span class="text">Log In</span>
              </a>
            </li>
            <li class="nav-link">
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
          <div class="log logg">
            <a href="#"><span class="text">Login</span></a>
          </div>
          <div class="sign signn">
            <a href="signup.php"><span class="text">SignUp</span></a>
          </div>
        </div>
        <div class="main">
          <form method="POST" action="./handleLogin.php">
            <div class="input">
              <div class="inputbox">
                <input
                  class=""
                  id="input"
                  type="text"
                  required="required"
                  name="email"
                />
                <span>Email</span>
              </div>
              <div class="inputbox">
                <input
                  id="input"
                  type="password"
                  required="required"
                  name="password"
                />
                <span>Password</span>
              </div>
              <div class="forget">
                <span
                  >Don't have an account?
                  <span><a href="signup.php">Sign up</a></span></span
                >
                <span><a href="#">Forget password?</a></span>
              </div>
              <button class="btn in">Login</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
