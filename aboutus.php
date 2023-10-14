<?php
include('button.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVA Diets - About Us</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/aboutus.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <h1>
        <a href="#" class="logo">MVA Diets<span class="span">.</span></a>
      </h1>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="nav-item">
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="nav-item">
            <a href="aboutus.php" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li class="nav-item">
            <a href="shop.php" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="nav-item">
            <a href="blog.php" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="navbar-link" data-nav-link>Creator</a>
          </li>

        </ul>
      </nav>

      <div class="header-btn-group">
        <button class="search-btn" aria-label="Search" data-search-btn>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <?php echo $message; ?>

        <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
          <span class="line top"></span>
          <span class="line middle"></span>
          <span class="line bottom"></span>
        </button>
      </div>

    </div>
  </header>

  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-container>
    <div class="search-box">
      <input type="search" name="search" aria-label="Search here" placeholder="Type keywords here..."
        class="search-input">

      <button class="search-submit" aria-label="Submit search" data-search-submit-btn>
        <ion-icon name="search-outline"></ion-icon>
      </button>
    </div>

    <button class="search-close-btn" aria-label="Cancel search" data-search-close-btn></button>
  </div>

  <section class="section section-divider gray about" id="about">
    <div class="container">

      <div class="about-banner">
        <img src="./assets/images/about-banner1.png" width="509" height="459" loading="lazy" alt="About Us image"
          class="w-100 about-img">
      </div>

      <div class="about-content">

        <h2 class="h2 section-title">
          The
          <span class="span">MVA</span>
          Dites
        </h2>

        <p class="section-text">
          Our project is a dieting website that offers diet plans and products to help customers achieve their health goals. Our range of products includes items specifically designed to complement different types of diets, making it easier for users to make healthier choices.
        </p>

        <ul class="about-list">

          <li class="about-item">
            <ion-icon name="checkmark-outline"></ion-icon>

            <span class="span">Customized diet plans</span>
          </li>

          <li class="about-item">
            <ion-icon name="checkmark-outline"></ion-icon>

            <span class="span">Healthy meal recipes</span>
          </li>

          <li class="about-item">
            <ion-icon name="checkmark-outline"></ion-icon>

            <span class="span">Fitness tips and exercises</span>
          </li>

          <li class="about-item">
            <ion-icon name="checkmark-outline"></ion-icon>

            <span class="span">Blog articles on nutrition and healthy lifestyle.</span>
          </li>

        </ul>

        <a href="blog.php"><button class="btn btn-hover">Read Blog</button></a>

      </div>

    </div>
  </section>

  <!-- #FOOTER -->

  <footer class="footer">

    <div class="footer-top" style="background-image: url('./assets/images/footer-illustration.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="" class="logo">MVA Diets<span class="span">.</span></a>

          <p class="footer-text">
            Please note that this ecommerce website is a college project and products listed here are not available for purchase. Thank you for your understanding.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Info</p>
          </li>

          <li>
            <p class="footer-list-item">+91 6541239874</p>
          </li>

          <li>
            <p class="footer-list-item">info@mvadites.com</p>
          </li>

          <li>
            <address class="footer-list-item">Gujrat ,India</address>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Privacy Policy</p>

            <p class="footer-text">
              At MVA Diet, we are committed to respecting your privacy and protecting your personal information.
            </p>
          </li>

        </ul>

        <form class="footer-form" method="post">

          <p class="footer-list-title">Book Consultant</p>

          <div class="input-wrapper">

            <input type="text" name="full_name" required placeholder="Your Name" aria-label="Your Name"
              class="input-field">

            <input type="email" name="email_address" required placeholder="Email" aria-label="Email"
              class="input-field">

          </div>

          <div class="input-wrapper">
            <input type="number" name="weight" require placeholder="Wight" class="input-field">

            <input type="date" name="booking_date" aria-label="Reservation date" class="input-field">

          </div>

          <textarea name="message" required placeholder="Message" aria-label="Message" class="input-field"></textarea>

          <button type="submit" class="btn" name="Submit">Book</button>

        </form>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright-text">
          &copy; 2022 <a href="profile.php" class="copyright-link">The MVA Diet</a> All Rights Reserved.
        </p>
      </div>
    </div>

  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <?php
    require('book.php');
  ?>

</body>
</html>