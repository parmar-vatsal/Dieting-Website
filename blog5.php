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
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/single-blog.css">

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

  <div class="blog">
    <center><h1 id="blogtitle">How to Build a Healthy Meal Plan for Long-Term Weight Loss</h1>
    <img src="assets/images/blog-5.jpg" alt="dragon_Fruit" width="50%" id="blog-hero">
    <p class="description">If you're looking to lose weight and keep it off for the long term, building a healthy meal plan can be an effective strategy. A healthy meal plan should include a balance of nutrients and be sustainable over the long term. Here's how to build a healthy meal plan for long-term weight loss.<br><br>
      <strong>1. Start with a calorie target  : </strong>Determine how many calories you need to consume each day to support weight loss. A calorie calculator can help you estimate your daily calorie needs based on your age, gender, weight, and activity level.<br><br>
      <strong>2. Plan your meals and snacks : </strong> Plan out your meals and snacks for the week ahead. This can help you stay on track with your calorie goals and avoid impulsive food choices. <br><br>
      <strong>3. Include a balance of nutrients : </strong> Your meals should include a balance of nutrients, including protein, complex carbohydrates, healthy fats, and fiber. This can help you feel satisfied and prevent overeating.<br><br>
      <strong>4. Focus on whole foods : </strong> Choose whole, nutrient-dense foods such as fruits, vegetables, whole grains, lean protein sources, and healthy fats. These foods are typically lower in calories and higher in nutrients than processed foods.<br><br>
      <strong>5. Cook at home : </strong>Cooking at home can help you control the ingredients in your meals and avoid added sugars, unhealthy fats, and excess calories. Aim to cook at least a few meals at home each week.<br><br>
      <strong>6. Practice portion control : </strong> Use measuring cups, spoons, and a food scale to help you practice portion control. This can help you stay on track with your calorie goals and avoid overeating.<br><br>
      <strong>7. Allow for flexibility : </strong>Allow for some flexibility in your meal plan, as this can help you stick to it over the long term. Include a few favorite foods or meals that you enjoy, and allow for occasional indulgences in moderation.<br><br>
    By following these tips, you can build a healthy meal plan that supports long-term weight loss. Remember to focus on whole, nutrient-dense foods, practice portion control, and allow for some flexibility and indulgences. With time and consistency, a healthy meal plan can become a sustainable habit that supports your weight loss goals.
    </p>
    </center>
  </div>

  <!-- #FOOTER -->

  <footer class="footer">

    <div class="footer-top" style="background-image: url('assets/images/footer-illustration.png')">
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
            <p class="footer-list-title">Opening Hours</p>
          </li>

          <li>
            <p class="footer-list-item">Monday-Friday: 08:00-22:00</p>
          </li>

          <li>
            <p class="footer-list-item">Tuesday 4PM: Till Mid Night</p>
          </li>

          <li>
            <p class="footer-list-item">Saturday: 10:00-16:00</p>
          </li>

        </ul>

        <form method="POST" class="footer-form">

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
          &copy; 2022 <a href="#" class="copyright-link">The MVA Diet</a> All Rights Reserved.
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
  <script src="assets/js/script.js" defer></script>

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