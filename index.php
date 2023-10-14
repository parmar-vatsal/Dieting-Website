<?php
include('button.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The MVA Diet - Eat Smart, Stay Fit!</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
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
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Welcome <?php include('connection.php'); echo $_SESSION['name']; ?></p>

            <h2 class="h1 hero-title">Eat healthy, live healthy</h2>

            <p class="hero-text">Dieting involves making conscious and healthy food choices to achieve and maintain a healthy weight and lifestyle.</p>
            
            <a href="blog.php" id="btn"><button class="btn">Read Blog</button></a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner-bg.png" width="820" height="716" alt="" aria-hidden="true"
              class="w-100 hero-img-bg">

            <img src="./assets/images/hero-banner.png" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 hero-img">
          </figure>

        </div>
      </section>


      <!-- 
        - #PROMO
      -->

      <section class="section section-divider white promo">
        <div class="container">

          <ul class="promo-list has-scrollbar">

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Mediterranean Salad</h3>

                <p class="card-text">
                  It is a vibrant combination of quinoa, colorful vegetables, herbs.
                </p>

                <img src="assets/images/food-menu-1.png" width="300" height="300" loading="lazy" alt="Maxican Pizza"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Rainbow Fruit Salad</h3>

                <p class="card-text">
                  Rainbow Fruit Salad is a colorful and nutritious mix of fresh fruits.
                </p>

                <img src="./assets/images/food-menu-2.png" width="300" height="300" loading="lazy" alt="Soft Drinks"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">
                <h3 class="h3 card-title">Green Salad</h3>

                <p class="card-text">
                  It is a refreshing mix of crisp lettuce, leafy greens, and assorted vegetables
                </p>

                <img src="./assets/images/food-menu-3.png" width="300" height="300" loading="lazy" alt="French Fry"
                  class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Veggie Wrap</h3>

                <p class="card-text">
                  It is a flavorful and nutritious combination of fresh vegetables.
                </p>

                <img src="./assets/images/food-menu-4.png" width="300" height="300" loading="lazy" alt="Veggie Wrap"
                  class="w-100 card-banner">

              </div>
            </li>
          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="./assets/images/about-banner1.png" width="509" height="459" loading="lazy" alt="Burger with Drinks"
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

            <a href="shop.php"><button class="btn btn-hover">Order Now</button></a>

          </div>

        </div>
      </section>





      <!-- 
        - #FOOD MENU
      -->

      <section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Popular Dishes</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Fuel your body, nourish your soul: Transform your health with our personalized diet plans.
          </p>

          <ul class="food-menu-list"> 

            
            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="products/img/dish/food-menu-1.png" width="300" height="300" loading="lazy"
                    alt="Healthy Potatoes" class="w-100">

                  <div class="badge">-15%</div>

                  <a href="products/Mediterranean-Salad.php"><button class="btn food-menu-btn">Order Now</button></a>
                </div>

                <div class="wrapper">
                  <p class="category">Diet dish</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Mediterranean Salad</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">₹180.00</data>

                  <del class="del" value="69.00">₹200.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="products/img/dish/food-menu-2.png" width="300" height="300" loading="lazy"
                    alt="Jusiy Tomato" class="w-100">

                  <div class="badge">-10%</div>

                  <a href="products/Rainbow-Fruit-Salad.php"><button class="btn food-menu-btn">Order Now</button></a>
                </div>

                <div class="wrapper">
                  <p class="category">Diet Dish</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Rainbow Fruit Salad</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">₹129.00</data>

                  <del class="del">₹149.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-3.png" width="300" height="300" loading="lazy"
                    alt="Green Salad" class="w-100">

                  <div class="badge">-25%</div>

                  <a href="products/Green-Salad.php"><button class="btn food-menu-btn">Order Now</button></a>
                </div>

                <div class="wrapper">
                  <p class="category">Diet Dish</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Green Salad</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">₹199.00</data>

                  <del class="del">₹269.00</del>

                </div>

              </div>
            </li>

          </ul>


        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section section-divider white cta" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              Nourish Your Body, Delight Your
              <span class="span">Palate</span>
            </h2>

            <p class="section-text">
              Discover a world of flavorful delights as you embark on a journey to nourish your body and delight your palate. Our mission is to show you that healthy eating doesn't have to be bland or restrictive.
            </p>

            <button class="btn btn-hover">Order Now</button>
          </div>

          <figure class="cta-banner">
            <img src="./assets/images/cta-bannerr.png" loading="lazy" alt="Diet-dish"
              class="w-100 cta-img">
          </figure>

        </div>
      </section>





      <!-- 
        - #DELIVERY
      -->

      <section class="section section-divider gray delivery">
        <div class="container">

          <div class="delivery-content">

            <h2 class="h2 section-title">
              Unleash Your <span class="span">Inner</span> Wellness Warrior
            </h2>

            <p class="section-text">
              Ignite your wellness journey with our cutting-edge dieting strategies. Our website is your go-to resource for achieving your health and fitness goals. Discover expert tips, mouthwatering recipes, and personalized approaches that will revolutionize the way you approach dieting. 
            </p>

            <a href="shop.php"><button class="btn btn-hover">Order Now</button></a>
          </div>

          <figure class="delivery-banner">
            <img src="./assets/images/quote-img.png" width="1000" height="880" loading="lazy" alt="quote-img"
              class="w-100 quote-img" data-quote-img>
          </figure>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section section-divider white testi">
        <div class="container">

          <p class="section-subtitle">Testimonials</p>

          <h2 class="h2 section-title">
            Our Customers <span class="span">Reviews</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional
            support for an organism.
          </p>

          <ul class="testi-list has-scrollbar">

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-1.jpg" width="80" height="80" loading="lazy" alt="Robert William">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Aarav Patel</h3>

                    <p class="testi-title">Software Engineer at Google</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "Exceeded expectations! Personalized plans, easy recipes. Achieved goals!"
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-2.jpg" width="80" height="80" loading="lazy" alt="Thomas Josef">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Nisha Sharma</h3>

                    <p class="testi-title">Marketing Manager at Meta</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "Standout website. Variety, interactive tools, reached healthier lifestyle!"
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="profile-wrapper">

                  <figure class="avatar">
                    <img src="./assets/images/avatar-3.jpg" width="80" height="80" loading="lazy" alt="Charles Richard">
                  </figure>

                  <div>
                    <h3 class="h4 testi-name">Rajan Gupta</h3>

                    <p class="testi-title">Financial Analyst at Lic</p>
                  </div>

                </div>

                <blockquote class="testi-text">
                  "Life transformed! Expert plans, online community, game-changer for fitness!"
                </blockquote>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>






      <!-- 
        - #BANNER
      -->

      <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">

            <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="./assets/images/banner-1.jpg" width="550" height="450" loading="lazy"
                  alt="Discount For Delicious Tasty Burgers!" class="banner-img">

                <div class="banner-item-content">
                  <p class="banner-subtitle">50% Off Now!</p>

                  <h3 class="banner-title">Discount For Delicious Tasty Burgers!</h3>

                  <p class="banner-text">Sale off 50% only this week</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-2.jpg" width="550" height="465" loading="lazy" alt="Delicious Pizza"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">Delicious Pizza</h3>

                  <p class="banner-text">50% off Now</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/banner-3.jpg" width="550" height="465" loading="lazy" alt="American Burgers"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">American Burgers</h3>

                  <p class="banner-text">50% off Now</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

            <li class="banner-item banner-md">
              <div class="banner-card">

                <img src="./assets/images/banner-4.jpg" width="550" height="220" loading="lazy" alt="Dieting Dies image"
                  class="banner-img">

                <div class="banner-item-content">
                  <h3 class="banner-title">Tasty Buzzed Pizza</h3>

                  <p class="banner-text">Sale off 50% only this week</p>

                  <button class="btn">Order Now</button>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section section-divider white blog" id="blog">
        <div class="container">

          <p class="section-subtitle">Latest Blog Posts</p>

          <h2 class="h2 section-title">
            This Is All About <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
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
                    <a href="Blogs/blog1.php" class="card-title">Top 5 benifits of eating dragon fruit</a>
                  </h3>
    
                  <p class="card-text">
                    Dragon fruit, also known as pitaya, is a unique and nutritious tropical fruit that can more...
                  </p>
    
                  <a href="Blogs/blog1.php" class="btn-link">
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
                    <a href="Blogs/blog2.php" class="card-title">Healthy Snacking: Ideas and Recipes for Nutritious Options</a>
                  </h3>
    
                  <p class="card-text">
                    Snacking is an important part of any healthy diet, but it's important to choose snacks more...
                  </p>
    
                  <a href="Blogs/blog2.php" class="btn-link">
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
                    <a href="Blogs/blog3.php" class="card-title">Top 8 Foods to Boost Your Metabolism and Burn Fat</a>
                  </h3>
                  <p class="card-text">
                    If you're looking to lose weight or maintain a healthy weight, boosting your metabolism more...
                  </p>
                  <a href="Blogs/blog3.php" class="btn-link">
                    <span>Read More</span>
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </section>
    </article>
  </main>

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

          <button type="submit" class="btn" name="Submit">Book</button><br>
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

  <?php
    include("book.php");
  ?>



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

</body>

</html>
