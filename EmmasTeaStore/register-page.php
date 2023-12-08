<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emma's Tea Shop - Register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/register.css">

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
    
    <a href="user-profile.html">
        <div class="fas fa-user" id="login-btn"></div>
    </a>
        <div class="fas fa-bars" id="menu-btn"></div>
</div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

</header>

<!-- header section ends -->


<!-- register section starts  -->

<section class="register" id="register">

    <h1 class="heading"> <span>regi</span>ster</h1>

    <div class="row">

    <form name="register" method="post" action="register-script.php">
            <div class="inputBox">
                <span class="fas fa-id-card-alt"></span>
                <input type="text" name="FirstName" placeholder="first name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-id-card-alt"></span>
                <input type="text" name="LastName" placeholder="last name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <input type="submit" value="register" class="btn">
        </form>

    </div>

</section>
     <!-- register section end -->


<!-- footer section starts  -->

<div class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">created by <span>Luiziane Branta</span> | all rights reserved</div>

  </div>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>