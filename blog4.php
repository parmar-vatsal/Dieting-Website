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
    <center><h1 id="blogtitle">10 Dieting Mistakes You Should Avoid Making?</h1>
    <img src="assets/images/blog-4.jpg" alt="dragon_Fruit" width="50%" id="blog-hero">
    <p class="description"><b>Introduction:</b><br> Dieting can be a challenging journey for many people, especially when there are so many dieting myths and misconceptions out there. With so much conflicting information, it's easy to fall into the trap of making common dieting mistakes that can sabotage your weight loss goals. In this blog post, we'll cover the top 10 dieting mistakes you should avoid making to help you stay on track and achieve your desired results.<br><br>
      <strong>1. Skipping Meals : </strong>Skipping meals can seem like a quick way to reduce calories, but it can actually backfire on your weight loss efforts. Skipping meals can slow down your metabolism and cause you to overeat later in the day. Instead, aim to eat smaller, more frequent meals throughout the day to keep your metabolism firing.<br><br>
      <strong>2. Focusing on the Scale : </strong>  The number on the scale is not the only indicator of success when it comes to weight loss. It's important to track other metrics, such as body fat percentage, measurements, and how you feel overall. Remember, weight loss is a journey, and progress is not always linear.<br><br>
      <strong>3. Not Eating Enough Protein : </strong> Protein is essential for building and repairing muscle, which can help increase your metabolism and burn more calories. Make sure to include protein in every meal, such as eggs, chicken, fish, and tofu.
      <br><br>
      <strong>4. Cutting Out Entire Food Groups : </strong>     Cutting out entire food groups, such as carbs or fats, can be detrimental to your health and weight loss efforts. Your body needs a balanced diet to function properly, so focus on eating whole, nutrient-dense foods in moderation.<br><br>
      <strong>5. Relying on Processed Diet Foods : </strong>    While diet foods may seem like a convenient option, many are highly processed and filled with artificial ingredients. Instead, focus on whole foods that are rich in nutrients and can help fuel your body.<br><br>
      <strong>6. Not Drinking Enough Water : </strong>     Drinking enough water is essential for overall health and can also help with weight loss. Water can help flush out toxins, reduce appetite, and increase metabolism. Aim for at least eight glasses of water a day.<br><br>
      <strong>7. Not Getting Enough Sleep : </strong>     Sleep is crucial for overall health, and lack of sleep can lead to weight gain. When you're sleep-deprived, your body produces more ghrelin, a hormone that increases appetite. Aim for at least seven hours of sleep a night to help support weight loss efforts.<br><br>
      <strong>8. Setting Unrealistic Goals : </strong>     Setting unrealistic goals can lead to frustration and disappointment. Instead, focus on making small, achievable goals that can help you stay motivated and on track.<br><br>
      <strong>9. Not Planning Ahead : </strong>Failing to plan is planning to fail. It's important to plan ahead when it comes to meal prep and workouts to ensure you stay on track with your weight loss goals.<br><br>
      <strong>10. Relying on Willpower Alone : </strong> Relying on willpower alone can be challenging and can lead to temptation and binging. Instead, focus on building healthy habits that can help support your weight loss efforts in the long term.<br><br>
    <b>Conclusion:</b><br> Dieting mistakes can happen to anyone, but by avoiding these top 10 mistakes, you can help support your weight loss goals and overall health. Remember, it's important to focus on building healthy habits and making small, achievable goals to help you stay on track. By doing so, you can achieve long-lasting weight loss success.

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