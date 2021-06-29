<!DOCTYPE html>
<html lang="en">
<!--Language-->

<head>
    <!--Description of meta (information about data used by browsers)-->
    <meta charset="utf-8">
    <meta name="keywords" content="MauriShop Shopping Website">
    <meta name="description" content="Shop with MauriShop, a trustworthy seller providing quality on time products">
    <meta name="author" content="Hadiyah Mohit">

    <!--User's visible area of a web page. It varies with the device-->
    <!--The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Display the page you are in in when mouse hovers in url-->
    <title> Men | T-shirts | Drawstring | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--The file containing codes in jQuery-->
    <script src="../../js/jQuery.js"></script>
    <script src="../../js/drawstring.js"></script>


    <!--Icon displayed on top-->
    <link href="../../images/top-icon.png" rel="shortcut icon">

    <!--Using Font awesome icons to put icons for envelop,phone number,gmail,linkedin,facebook,instagram-->
    <!--When crossorigin = "anonymous" it tells a browser to execute the https://kit.fontawesome.com/c8e4d183c2.js script without sending user-credential-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>


</head>

<body>

    <nav>

        <!--social-links-and-phone-number-->
        <?php include('../../frontend/social/social.php'); ?>

        <!--menu-bar----------------------------------------->
        <?php include('../../frontend/navigation/navigation.php'); ?>

    </nav>

    <!--search-bar----------------------------------->
    <?php include('../../frontend/searchbar/searchbar.php'); ?>


    <!--jQuery-->


    <!--Script-->
    <script type="text/javascript" src="../../script/script.js"></script>

    <!--Men's T-shirts-->
    <section class="men-tshirts">

        <!--heading-------->
        <div class="tshirts-heading">
            <strong>T-shirts</strong>
            <p>We Provide You Latest Design Tshirts</p>
        </div>

        <!--products----------------------->


        <!--product-box-1---------->
        <div class="product-box">


            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="../cart/cart.php" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>

                <!--add to wish-list-->
                <a href="../../frontend/wishlist.html" class="add-wishlist">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </a>

                <!--img------>
                <img id="tshirt_image" src="../../images/tshirt1.png" usemap="#workmap">

            </div>


            <!--product-details-------->
            <div class="product-details">
                <a href="#" id="tshirt_name" class="p-name">Drawstring Green</a>
                <span id="tshirt_price" class="p-price">Rs 250.00</span>
            </div>



            <!--product-box-1---------->
            <div class="product-box">


                <!--product-img------------>
                <div class="product-img">
                    <!--add-cart---->
                    <a href="../cart/cart.php" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <!--add to wish-list-->
                    <a href="../../frontend/wishlist.html" class="add-wishlist">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </a>

                    <!--img------>
                    <img id="tshirt_image" src="../../images/drawstring_black.jpg" usemap="#workmap">

                </div>


                <!--product-details-------->
                <div class="product-details">
                    <a href="#" id="tshirt_name" class="p-name">Drawstring Black</a>
                    <span id="tshirt_price" class="p-price">Rs 250.00</span>
                </div>

                <!--product-box-1---------->
                <div class="product-box">


                    <!--product-img------------>
                    <div class="product-img">
                        <!--add-cart---->
                        <a href="../cart/cart.php" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>

                        <!--add to wish-list-->
                        <a href="../../frontend/wishlist.html" class="add-wishlist">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </a>

                        <!--img------>
                        <img id="tshirt_image" src="../../images/drawstring_blue.jpeg" usemap="#workmap">

                    </div>


                    <!--product-details-------->
                    <div class="product-details">
                        <a href="#" id="tshirt_name" class="p-name">Drawstring Blue</a>
                        <span id="tshirt_price" class="p-price">Rs 250.00</span>
                    </div>





    </section>
    <form>

        <input type="radio" name="product" value="drawstring green" checked>
        Drawstring Green
        <br>

        <input type="radio" name="product" value="drawstring black" checked>
        Drawstring Black
        <br>

        <input type="radio" name="product" value="drawstring blue" checked>
        Drawstring Blue
        <br>

    </form>

    <!--login-->
    <?php include('../../frontend/login/login_form.php'); ?>

    <!--register-->
    <?php include('../../frontend/register/signup_form.php'); ?>

    <!--services------------------------->
    <?php include('../../frontend/services box/servicesbox.php'); ?>

    <!--footer---------------------------->
    <footer>
        <?php include('../../frontend/footer/footer.php'); ?>
    </footer>


</body>