<?php
include('button.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVA Diets - Blog</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/blog.css">

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


  <section class="section section-divider white blog" id="blog">
    <div class="container">

      <p class="section-subtitle">Latest Blog Posts</p>

      <h2 class="h2 section-title">
        This Is All Diets <span class="span">Blog</span>
      </h2>

      <p class="section-text">
        Fuel your body, nourish your soul: Transform your health with our personalized diet plans.
      </p>

      <ul class="blog-list">

        <li>
          <div class="blog-card">

            <div class="card-banner">
              <img src="./assets/images/blog-1.jpg" width="600" height="390" loading="lazy"
                alt="Top 5 benifits of eating dragon fruit" class="w-100">
            </div>

            <div class="card-content">

              <div class="card-meta-wrapper">

                <a href="#" class="card-meta-link">
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                </a>

                <a href="profile.php" class="card-meta-link">
                  <ion-icon name="person-outline"></ion-icon>

                  <p class="meta-info">Vatsal Parmar</p>
                </a>

              </div>

              <h3 class="h3">
                <a href="blog1.php" class="card-title">Top 5 benifits of eating dragon fruit</a>
              </h3>

              <p class="card-text">
                Dragon fruit, also known as pitaya, is a unique and nutritious tropical fruit that can more...
              </p>

              <a href="blog1.php" class="btn-link">
                <span>Read More</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </a>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <div class="card-banner">
              <img src="./assets/images/blog-2.jpg" width="600" height="390" loading="lazy"
                alt="Healthy Snacking: Ideas and Recipes for Nutritious Options" class="w-100">
            </div>

            <div class="card-content">

              <div class="card-meta-wrapper">

                <a href="#" class="card-meta-link">
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                </a>

                <a href="profile.php" class="card-meta-link">
                  <ion-icon name="person-outline"></ion-icon>

                  <p class="meta-info">Suthar Abhi</p>
                </a>

              </div>

              <h3 class="h3">
                <a href="blog2.php" class="card-title">Healthy Snacking: Ideas and Recipes for Nutritious Options</a>
              </h3>

              <p class="card-text">
                Snacking is an important part of any healthy diet, but it's important to choose snacks more...
              </p>

              <a href="blog2.php" class="btn-link">
                <span>Read More</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </a>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <div class="card-banner">
              <img src="./assets/images/blog-3.jpg" width="600" height="390" loading="lazy"
                alt="Innovative Hot Chessyraw Pasta Make Creator Fact." class="w-100">
            </div>
            <div class="card-content">
              <div class="card-meta-wrapper">
                <a href="#" class="card-meta-link">
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                </a>
                <a href="profile.php" class="card-meta-link">
                  <ion-icon name="person-outline"></ion-icon>
                  <p class="meta-info">Vatsal Parmar</p>
                </a>
              </div>
              <h3 class="h3">
                <a href="blog3.php" class="card-title">Top 8 Foods to Boost Your Metabolism and Burn Fat</a>
              </h3>
              <p class="card-text">
                If you're looking to lose weight or maintain a healthy weight, boosting your metabolism more...
              </p>
              <a href="blog3.php" class="btn-link">
                <span>Read More</span>
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </a>
            </div>
          </div>
        </li>

        <li>
            <div class="blog-card">
  
              <div class="card-banner">
                <img src="./assets/images/blog-4.jpg" width="600" height="390" loading="lazy"
                  alt="10 Dieting Mistakes You Should Avoid Making?" class="w-100">
              </div>
  
              <div class="card-content">
  
                <div class="card-meta-wrapper">
  
                  <a href="#" class="card-meta-link">
                    <ion-icon name="calendar-outline"></ion-icon>
  
                    <time class="meta-info" datetime="2022-01-01">Jan 01 2022</time>
                  </a>
  
                  <a href="profile.php" class="card-meta-link">
                    <ion-icon name="person-outline"></ion-icon>
  
                    <p class="meta-info">Manav Kankotiya</p>
                  </a>
  
                </div>
  
                <h3 class="h3">
                  <a href="blog4.php" class="card-title">10 Dieting Mistakes You Should Avoid Making?</a>
                </h3>
  
                <p class="card-text">
                  Dieting can be a challenging journey for many people, especially when there are so many more...
                </p>
  
                <a href="blog4.php" class="btn-link">
                  <span>Read More</span>
  
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
  
              </div>
  
            </div>
          </li>
  
          <li>
            <div class="blog-card">
  
              <div class="card-banner">
                <img src="./assets/images/blog-5.jpg" width="600" height="390" loading="lazy"
                  alt="How to Build a Healthy Meal Plan for Weight Loss." class="w-100">
              </div>
  
              <div class="card-content">
  
                <div class="card-meta-wrapper">
  
                  <a href="#" class="card-meta-link">
                    <ion-icon name="calendar-outline"></ion-icon>
  
                    <time class="meta-info" datetime="2022-01-01">Feb 12 2022</time>
                  </a>
  
                  <a href="profile.php" class="card-meta-link">
                    <ion-icon name="person-outline"></ion-icon>
  
                    <p class="meta-info">Suthar Abhi</p>
                  </a>
  
                </div>
  
                <h3 class="h3">
                  <a href="blog5.php" class="card-title">How to Build a Healthy Meal Plan for Weight Loss.</a>
                </h3>
  
                <p class="card-text">
                  If you're looking to lose weight and keep it off for the long term, building a healthy meal more...
                </p>
  
                <a href="blog5.php" class="btn-link">
                  <span>Read More</span>
  
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
  
              </div>
  
            </div>
          </li>
  
          <li>
            <div class="blog-card">
  
              <div class="card-banner">
                <img src="./assets/images/blog-6.jpg" width="600" height="390" loading="lazy"
                  alt="Innovative Hot Chessyraw Pasta Make Creator Fact." class="w-100">
              </div>
              <div class="card-content">
                <div class="card-meta-wrapper">
                  <a href="#" class="card-meta-link">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time class="meta-info" datetime="2022-01-01">Feb 22 2022</time>
                  </a>
                  <a href="profile.php" class="card-meta-link">
                    <ion-icon name="person-outline"></ion-icon>
                    <p class="meta-info">Kankotiya Manav</p>
                  </a>
                </div>
                <h3 class="h3">
                  <a href="blog6.php" class="card-title">Mindful Eating : How to Eat with Intention and Enjoyment</a>
                </h3>
                <p class="card-text">
                  Mindful eating is an approach that involves paying attention to your eating habits more...
                </p>
                <a href="blog6.php" class="btn-link">
                  <span>Read More</span>
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </div>
          </li>
      </ul>

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
    include("book.php");
  ?>
  
</body>

</html>