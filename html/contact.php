<?php
 include "connection.php";
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="shortcut icon" href="../Image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/style.css">
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
            <li class="nav-link active">
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
            <section id="contact" class="contact">
                <div class="left">
                    <div class="contact-info">
    
                        <h2>CONTACT <span>INFO</span></h2>
                        <div class="mail-us sub">
                            <div class="icon">
                                <span>
                                    <i class='bx bxs-envelope' ></i>
                            </div> 
                            <div class="info">
                                <h6>MAIL US</h6>
                                <p>mugishajoseph092@gmail.com</p>
                                <p>josephmugisha092@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-us sub" id="sub">
                            <div class="icon">
                                <i class='bx bxs-phone-call'></i>
                            </div>
                            <div class="info">
                                <h6>CONTACT US</h6>
                                <p>+250792418795</p>
                                <p>+250780925595</p>
                            </div>
                        </div>
    
                        <div class="location sub">
                            <div class="icon">
                                <i class='bx bx-current-location'></i>
                            </div>
                            <div class="info">
                                <h6>LOCATION</h6>
                                <p>Nyarugenge, Kigali</p>
                                <p>Nyamirambo</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-info">
                       <h2>SOCIAL <span>INFO</span></h2> 
                       <div class="c">
                        <div class="social">
                            <div class="img">
                                <i class='bx bxl-instagram-alt' ></i>
                            </div>
                            <span>Instagram</span>
                        </div>
                        <div class="social">
                            <div class="img">
                                <i class='bx bxl-github' ></i>
                            </div>
                            <span>Github</span>
                        </div>
                        <div class="social">
                            <div class="img">
                                <i class='bx bxl-linkedin-square' ></i>
                            </div>
                            <span>LinkedIn</span>
                        </div>
                       </div>
                       
                    </div>
                </div>
    
    
    
                <div class="right">
                    <h2>Let's work <span>together</span></h2>
                    <div class="input">
                        <div class="inputbox">
                            <input type="text" required="required">
                            <span>FUll Name</span>
                        </div>
                        <div class="inputbox">
                            <input class="" id="input" type="text" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <input id="input" type="number" required="required">
                            <span>Telephone</span>
                        </div>
                        <div class="inputbox">
                            <textarea class="in" name="" id="" cols="30" rows="6" required></textarea>
                            <span>Message</span>
                        </div>
                        <button class="btn in">Send Message</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>