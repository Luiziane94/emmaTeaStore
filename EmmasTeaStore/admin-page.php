<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emma's Tea Store - Admin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo2.png" alt="emma's tea store">
    </a>

    <nav class="navbar">
        <a href="../index.html">home</a>
        <a href="../products.html">products</a>
        <a href="../about/about.html">about</a>
        <a href="../contact.html">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <a href="login.html">
        <div class="fas fa-user" id="login"></div>
    </a>
        <div class="fas fa-bars" id="menu-btn"></div>
</div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

</header>

<!-- header section ends -->

<!-- admin section ends -->
<section class="admin" id="admin">

<div class="container">

  <h1 class="heading">Add Products</h1>
  
  <form action="insert_product.php" method="post">
      
    <label for="productName">Product Name:</label>
      <input type="text" name="productName" required>

      <label for="images">Image URL:</label>
      <input type="text" name="images" required>

      <label for="price">Price:</label>
      <input type="text" name="price" required>

      <label for="catid">Category ID:</label>
      <select name="catid" required>
        <option value="Premium Tea">Premium Tea</option>
        <option value="Organic Coffee">Organic Coffee</option>
        <option value="Fancy Cookies">Fancy Cookies</option>
    </select>

    <input type="submit" value="Add Product" class="btn">
  </form>
</div>
</section>
<!-- admin section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> premium <span>tea</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/tea-1.png" alt="">
            <h3> Green Tea </h3>
            <div class="price">$1.00 <span>1.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/tea-2.png" alt="">
            <h3> Pink Tea</h3>
            <div class="price">$3.99 <span>4.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/tea-3.png" alt="">
            <h3>Purple Tea</h3>
            <div class="price">$3.50 <span>4.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/tea-4.png" alt="">
            <h3>Red Tea</h3>
            <div class="price">$1.00 <span>1.70</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/tea-5.png" alt="">
            <h3>Black Tea</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/tea-6.png" alt="">
            <h3>Grey tea</h3>
            <div class="price">$1.40 <span>2.40</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"> you <span>may also</span> like </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/organiccoffee.png" alt="">
            </div>
            
            <div class="content">
                <h3>Organic Coffee</h3>
            </div>

            <div class="icons">
                <a href="../products/coffee.html" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/fancycookie.png" alt="">
            </div>
            
            <div class="content">
                <h3>Fancy Cookies</h3>
            </div>

            <div class="icons">
                <a href="../products/cookies.html" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>
     <!-- products section end -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">created by <span>Luiziane Branta</span> | all rights reserved</div>

</section>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>