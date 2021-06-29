<!DOCTYPE html>
<?php
session_start();
?>
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
    <title> Home | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/fotorama.css">


    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The file containing codes in jQuery-->
    <script src="../../js/jquery-3.4.1.js"></script>


    <!--The links for lightslider of type js from github website-->
    <script src="../../js/lightslider.js"></script>


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
    <!--filtering for searchbar-->
    <script src="../../js/livesearch.js"></script>
    
    <!--search-bar----------------------------------->
    <?php include('../searchbar/searchbar.php');?>


    <!--jQuery-->
    <!--Script-->
    <script type="text/javascript" src="../../script/script.js"></script>

    

    
    
        <!--Full slider-->
        <!-----------full-slider(id = adaptive taken for website github------------------------------->
        <ul class="cs-hidden fotorama" style="z-index:-999;" data-width="97%" data-ratio="16/9" data-maxheight="400"
            data-autoplay="true" data-arrows="true" style="margin-left: -50px;">

            <!--box-1--------------------------->
            <li class="carousel">
                <!---box------------------->
                <div class="fullsliderbox" style="width: 100%; height: 65vh; display: flex; justify-content: left; align-items: center; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('../../images/carousel1.jpg');">

                    <div class="f-slider-text-container">
                        <div class="f-slider-text">
                            <span>Limited Offer</span>
                            <strong>30% Off<br /> With <font>Promo Code</font></strong>
                            <a href="#" class="f-slider-btn">Shop Now</a>
                        </div>
                    </div>

                </div>
            </li>



            <!--box-2--------------------------->
            <li class="carousel">
                <!---box------------------->
                <div class="fullsliderbox" style="width: 100%; height: 65vh; display: flex; justify-content: left; align-items: center; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('../../images/carousel2.jpg');">

                    <div class="f-slider-text-container">
                        <div class="f-slider-text">
                            <span>Limited Offer</span>
                            <strong>30% Off<br />
                                <font>New Arrival</font>
                            </strong>
                            <a href="#" class="f-slider-btn">Shop Now</a>
                        </div>
                    </div>

                </div>
            </li>

            <!-- <div class="fotorama">
            <img src="images/slider1.png"/>
            <img src="images/jeans.jpg"/>
            <img src="images/slider3.jpg"/>
            </div> -->


            <!--box-3--------------------------->
            <li class="carousel">
                <!---box------------------->
                <div class="fullsliderbox" style="width: 100%; height: 65vh; display: flex; justify-content: left; align-items: center; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('../../images/carousel3.jpg');">

                    <div class="f-slider-text-container">
                        <div class="f-slider-text">
                            <span>Limited Offer</span>
                            <strong>30% Off<br/>
                                <font>New Year Sales</font>
                            </strong>
                            <a href="#" class="f-slider-btn">Shop Now</a>
                        </div>
                    </div>

                </div>
            </li>

        </ul>
        <br>
        <h2 style=" text-align: center;" >Latest Designs For <em>This <span style="color:red;font-weight:bold">Su</span><span style="color:blue;font-weight:bold">mm</span><span style="color:yellow;font-weight:bold">er</span>  <span style="color:green;font-weight:bold">!!!</span> </em></h2>              
    <div style="background-image: url('../../images/background1.jpg');">
        <br>
        <br>
        <br>
        <div  class="container">
                <div  class="row">
                    <?php 
                        include "../../database.php";
                        $sql = "SELECT * FROM items ORDER BY items_id DESC";
                        $result = mysqli_query($conn, $sql);
                        $array = array();
                        
                        
                        $index = 0;
                        while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
                            $array[$index] = $row['items_id'];
                            $index++;
                        }
                        
                        for ($x = 0; $x <= 5; $x++) {                       
                            $items_id = $array[$x];
                            $_SESSION['item_id'] = $items_id;    
                            include("../../backend/Fetch_item/fetch_item_for_cart.php");
                            $item_id = $_SESSION['items_id'];
                            $img_dir = $_SESSION['img_dir'];
                            $item_name = $_SESSION['item_name'];
                            $price = $_SESSION['price'];
                            
                            echo "<div class=\"col\" style=\"height: 30rem;\">
                                    <form name=\"form\" action=\"../../backend/homepage/addtocart.php?id=$item_id&pric=$price\" method=\"post\">
                                        <div class=\"card\" style=\"width: 18rem;\">
                                            <img src=\"$img_dir\" class=\"card-img-top\" alt=\"Card image cap\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">$item_name</h5>
                                                <p class=\"card-text\">RS $price</p>
                                                <input type=\"number\" style=\"float:right;\" id=\"qty\" name=\"qty\" value=\"1\" min=\"1\" max=\"100\">
                                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-shopping-cart\"></i></button>
                                                <span style=\"display:none;\">Added to cart</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>";
                        }
                        
                    ?>

                </div>
            </div>
            <!-- <script src="../../js/add_universal_form.js"></script> -->
        </div>
        <br>
        <br>
        <br>
        <!--login-->
        <?php include('../../frontend/login/login_form.php'); ?>

        <!--register-->
        <?php include('../../frontend/register/signup_form.php'); ?>

        <!--services------------------------->
        <?php include('../../frontend/services box/servicesbox.php'); ?>
    </div>
    <!--footer---------------------------->
    <footer>
            <?php include('../../frontend/footer/footer.php'); ?>
    </footer>

    <script src="../../js/fotorama.js"></script>
    <script src="../../include/addtocart.js"></script>
</body>
</html>