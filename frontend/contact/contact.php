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
    <title> Contact | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The file containing codes in jQuery-->
    <script src="../../js/jQuery.js"></script>

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

    <script src="../../js/livesearch.js"></script>
    <!--search-bar----------------------------------->
    <?php include('../../frontend/searchbar/searchbar.php'); ?>


    <!--jQuery-->
    <!--Script-->
    <script type="text/javascript" src="../../script/script.js"></script>

    <!---login-and-sign-up--------------------------------->
    <!--login-->
    <?php include('../../frontend/login/login_form.php'); ?>

    <!--register-->
    <?php include('../../frontend/register/signup_form.php'); ?>

    <!--Creating contact form-->
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-50">
                    <div class="contact-form">
                        <h2><strong>Get In Touch </strong></h2>
                        
                        <form action="../../backend/contact/contact_backend.php" class="contact-form row" name="contact-form" method="post">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="form-group col-md-12">
                                <input type="text" id="name" name="name" class="form-control" required="required"
                                    placeholder="Name" pattern="([a-zA-Z][a-zA-Z0-9-_.]{1,20})"
                                    title="Name should be in CAPITAL and contains only alphabets">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" id="email" name="email" class="form-control" required="required"
                                    placeholder="Email" pattern="[a-z0-9._%$+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="The 
				                required pattern should be [a-z0-9._%$+-]+@[a-z0-9.-]+\.[a-z]{2,}">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" id="subject" name="subject" class="form-control" required="required"
                                    placeholder="Subject" pattern="[a-zA-Z0-9]*">
                            </div>

                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                    placeholder="Your Message Here" pattern="[a-zA-Z0-9]*"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                                <span style="display:none;">Submitted!</span>
                            </div>

                        </form>
                    </div>
                </div>

                <!--Creating company address-->
                <div class="col-50">
                    <div class="contact-info">
                        <h2><strong>Contact Info</strong></h2>
                        <address>
                            <p>MauriShop Inc.</p>
                            <p>935 W. Webster Ave New Streets</p>
                            <p>Port Louis</p>
                            <p>Mobile: +230 59058212</p>
                            <p>Fax: 1-714-252-0026</p>
                            <p>Email: info@e-shopper.com</p>
                        </address>

                        <!--Social media link-->
                        <div class="social-networks">
                            <h2><strong>Social Networking</strong></h2>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" title="facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/"><i class="fab fa-twitter" title="twitter"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"
                                            title="linkedin"></i></a>
                                </li>

                                <li>
                                    <a href="https://accounts.google.com/login?service=mail&lp=1"><i
                                            class="fab fa-google-plus" title="google plus"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"
                                            title="youtube"></i></a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"
                                            title="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-page-->

    <!--services------------------------->
    <?php include('../../frontend/services box/servicesbox.php'); ?>

    <!--footer---------------------------->
    <footer>
        <?php include('../../frontend/footer/footer.php'); ?>
    </footer>
    <script src="../../include/contact.js"></script>
</body>