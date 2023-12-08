<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emma's Tea Shop - Login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login.css">

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


<!-- login section starts  -->

<section class="login" id="login">

    <h1 class="heading"> <span>Log</span>in</h1>

    <div class="row">

        <form name= login method="post" action="login-script.php"> 
        
        <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="text" name="password" placeholder="password" required>
            </div>
            <input type="submit" value="login" class="btn"><br>
            <a href="#" id="forgotButton">forgot password?</a>
            <p>or</p>
            <a href="register-page.php" id="registerButton">register Here</a>
        </form>

    </div>

</section>
     <!-- login section end -->


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