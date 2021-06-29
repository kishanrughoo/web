<?php session_start() ?>
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
    <title> User | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--The file containing codes in jQuery-->
    <script src="../../js/jQuery.js"></script>

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

    <script src="../../js/livesearch.js"></script>

    <!--search-bar----------------------------------->
    <?php include('../../frontend/searchbar/searchbar.php'); ?>


    <!--jQuery-->
    <!--Script-->
    <script type="text/javascript" src="../../script/script.js"></script>

    <div class="user">
        <ul class="user-heading">
            <li><a href="../../frontend/message.html">Messages</a></li>
            <li><a href="../../frontend/upgprofile/upgprof.php">Update Profile</a></li>
        </ul>
    </div>


    <!--services------------------------->
    <?php include('../../frontend/services box/servicesbox.php'); ?>

    <!--footer---------------------------->
    <footer>
            <?php include('../../frontend/footer/footer.php'); ?>
    </footer>


</body>