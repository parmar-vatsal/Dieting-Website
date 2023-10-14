<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Wrap</title>
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg+xml">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/svg+xml">
    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="img/fruits/watermelon-img1.png" alt="Veggie Wrap" id="product-main-image">
                        </div>
                        <div class="product-image-slider">
                            <img src="img/fruits/watermelon-img1.png" alt=""  class="image-list">
                            <img src="img/fruits/watermelon-img2.png" alt=""  class="image-list">
                        </div>
                    </div>
                </div>
                <div class="col-6">

                    <div class="product">
                        <div class="product-title">
                            <h2>Veggie Wrap</h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(29 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="offer-price">₹149</span>
                            <span class="sale-price">₹219.00</span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p>Indulge in the refreshing sweetness of watermelon, a quintessential summer fruit that delights both the palate and the senses. Bursting with juicy goodness, watermelon is a true oasis of hydration and a perfect way to beat the summer heat.</p>
                        </div>
                        <div class="product-size">
                            <h4>Quantity</h4>
                            <div class="size-layout">
                                <input type="radio" name="size" value="1 Kg" id="1" class="size-input">
                                <label for="1" class="size">1 Kg</label>

                                <input type="radio" name="size" value="2 Kg" id="2" class="size-input">
                                <label for="2" class="size">2 Kg</label>

                                <input type="radio" name="size" value="3 Kg" id="3" class="size-input">
                                <label for="3" class="size">3 Kg</label>

                                <input type="radio" name="size" value="5 Kg" id="4" class="size-input">
                                <label for="4" class="size">5 Kg</label>

                                <input type="radio" name="size" value="10 Kg" id="5" class="size-input">
                                <label for="5" class="size">10 Kg</label>
                            </div>
                        </div>
                        <span class="divider"></span>

                        <div class="product-btn-group">
                            <div class="button buy-now"><i class='bx bxs-zap'></i>Buy Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--script-->
    <script src="script.js"></script>
</body>
</html>