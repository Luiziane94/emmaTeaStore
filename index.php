<?php
// Include your database connection file
include("dbConnection.php");

// Fetch menu items from the database
$sql = "SELECT * FROM product";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emma's tea Shop</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/product-subpages.css">

    <script>
  let d = new Date()
  alert("Today's date is " + d);
    </script>
    <script src="js/script.js"></script>
    <!-- <script src="js/cart.js"></script> -->
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
            <a href="login-page.php">
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


    <!-- menu section starts  -->

    <!-- menu section starts  -->
    <section class="menu" id="menu">

        <h1 class="heading"> premium <span>tea</span> </h1>

        <div class="box-container">

            <?php
            // Check if there are any menu items
            if ($result->num_rows > 0) {
                // Loop through each row of menu items
                while ($row = $result->fetch_assoc()) {
                    // Display menu item information
                    echo '<div class="box">';
                    echo '<img src="images/' . $row['images'] . '" alt="">';
                    echo '<h3>' . $row['productName'] . '</h3>';
                    echo '<div class="price">$' . $row['price'] . '</div>';
                    echo '<a href="#" class="btn" id="add-to-cart-btn">add to cart</a>';
                    echo '</div>';
                }
            } else {
                // Display a message if there are no menu items
                echo '<p>No items available.</p>';
            }

            // Close the database connection
            $db->close();
            ?>

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

</body>

</html>