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
    <title> About-us | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The links for lightslider of type js from github website-->
    <script src="../../js/lightslider.js"></script>

    <!--JQuery files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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

    <script type="text/javascript" src="../../script/script.js"></script>

    <div class="about-us">
        <div class="box">
            <a href="javascript:void(0);" class="cross">
                <i class="fas fa-times"></i>
            </a>

            <div style="background-image : url('../../images/top-icon.png');width:450px;height:300px;">
                <h2 style="text-align : center;color: Coral;">Welcome to MauriShop Website</h2>
                <h3 style="text-align:center;color:Red;font-size:20px">
                    We are an online company .....</br>
                    We are based in...</br>
                </h3>
            </div>
        </div>
    </div>

    <!--The file containing codes in javascript-->
    <script src="../../js/jQuery.js"></script>

</body>