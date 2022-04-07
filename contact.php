<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="ctacstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

        <div class="navbar">
          <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">Blake</h1></div>
            <div class="menu-container">
                <ul class="menu-list">
                    <?php
                    session_start();
                    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                    ?>
                     <li class="menu-item"><a class="home" href="home.php">Home</a></li>
                    <?php
                    }
                    else {
                    ?>
                     <li class="menu-item"><a class="home" href="home1.php">Home</a></li>
                    <?php
                    }
                    ?>
                   
                    <li class="menu-item"><a class="movie" href="https://www.netflix.com/bd/browse/genre/34399">Movies</a></li>
                    <li class="menu-item"><a class="series" href="https://www.netflix.com/bd/browse/genre/83">Series</a></li>
                    <li class="menu-item"><a class="trending" href="https://www.netflix.com/bd/browse/genre/839338">Trending</a></li>
                    <li class="menu-item"><a class="contact" href="contact.php">Contact</a></li>
                </ul>
            </div>
          </div>
        </div>

      <!--sidebar-->
      <div class="sidebar">
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-search"></i></a>
            <p class="sidebar-text">Search</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-home"></i></a>
            <p class="sidebar-text">Home</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="https://www.netflix.com/bd/browse/genre/83"><i class="fas fa-tv"></i></a>
            <p class="sidebar-text">Tv</p>
        </div>
        <div class="left-menu-icon">
            <a class="sidebar-logo" href="home1.php"><i class="fas fa-shopping-cart"></i></a>
            <p class="sidebar-text">Shop</p>
        </div>
      </div>

    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marked-alt"></i>k - 58, Dhaka, Bangladesh</div>
        <div><i class="fas fa-envelope-square"></i>kproshanto44@gmail.com</div>
        <div><i class="fa-brands fa-facebook"></i>https://www.facebook.com/proshanto.rivera.3/</div>
        <div><i class="fas fa-phone-square-alt"></i>+880 017********</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="contactform.php" method="post">
        <?php if(isset($_GET['error'])) { ?>
           <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if(isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  </body>
</html>
