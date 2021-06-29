<?php
session_start();
?>
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
    <title> Men | T-shirts | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The file containing codes in jQuery-->
    <script src="../../js/jQuery.js"></script>
    <script src="../../js/drawstring.js"></script>

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




    <br>
    <br>
    <!--heading-------->
    <div class="tshirts-heading">
        <strong>T-shirts</strong>
        <p>We Provide You Latest Design Tshirts</p>
    </div>
    <br>
    <br>
    <!--Men's T-shirts-->
    <div class="container">
        <div class="row">
            <?php 
                $category_no = 101; 
                include "../../database.php";
                $sql = "SELECT items_id FROM items WHERE category_id='$category_no'";
                $result = mysqli_query($conn, $sql);
                $array = array();
                
                
                $index = 0;
                while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
                    $array[$index] = $row;
                    $index++;
                }

                $mid = "";
                foreach($array as $items_id){
                    $_SESSION['cat_id'] = $category_no;
                    $_SESSION['item_id'] = implode("",$items_id) ;    
                    include("../../backend/Fetch_item/fetch_item.php");
                    $item_id = $_SESSION['items_id'];
                    $img_dir = $_SESSION['img_dir'];
                    $item_name = $_SESSION['item_name'];
                    $price = $_SESSION['price'];
                ?>
            <div class="col" style="height: 33rem;">

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img_dir ?>" class="card-img-top" alt="Card image cap">
                    <div class="card-body" style="height: 13rem;">
                        <form name="form"
                            action="../../backend/Mentshirt/addtocart.php?id=<?php echo $item_id?>&pric=<?php echo $price?>"
                            method="post">
                            <h5 class="card-title"><?php echo $item_name ?></h5>
                            <p class="card-text">RS <?php echo $price ?></p>
                            <input type="number" style="float:right;" id="qty" name="qty" value="1" min="1" max="100">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
                            <span style="display:none;">Added to cart</span>
                        </form>
                        <br>
                        <div class="review" style="padding-top: 0px;">
                            <?php
                                            $viewreviewid = "eModal".$mid;
                                                ?>
                            <form name="formvr" action="../../backend/review/getreview.php?id=<?php echo $item_id?>"
                                method="post">
                                <button type="submit" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#<?php echo $viewreviewid?>">
                                    View Review
                                </button>
                                <div class="modal fade" id="<?php echo $viewreviewid?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Reviews by users on item!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div name="viewreview" class="modal-body">

                                            </div>

                                            <div class="modal-footer">
                                                <!-- <button  type="submit" class="btn btn-secondary">Refresh</button> -->
                                                <?php
                                                if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
                                                                            $givereviewid = "GiveReviewModal".$mid;
                                                                        ?>
                                                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#<?php echo $givereviewid?>" data-bs-dismiss="modal">Give Review</button>
                                                    

                                                <?php }else{ ?>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal">Give Review</button>
                                                    
                                                    
                                                
                                                <?php } ?>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <div class="modal fade" id="<?php echo $givereviewid?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Give Review!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form name="formr"
                                            action="../../backend/review/addreview.php?id=<?php echo $item_id?>"
                                            method="post">
                                            <div class="modal-body">

                                                <textarea name="review" style="width:465px;" required="required"
                                                    rows="8" placeholder="Your Message Here"
                                                    pattern="[a-zA-Z0-9]*"></textarea>

                                            </div>
                                            <div class="modal-footer">
                                                <span style="display:none;">Review Submitted!</span>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <label><input type="radio" name="radio" value="good"
                                                            autocomplete="off" checked>Good</label>
                                                    <label><input type="radio" name="radio" value="bad"
                                                            autocomplete="off">Bad</label>
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary"
                                                    data-bs-dismiss="modal">Submit</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Require Login!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            You need to be logged in to proceed.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <?php 
                $mid= $mid."a";
                }
                
            ?>

        </div>
    </div>
    <br>
    <br>
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
    <script src="../../include/addtocart.js"></script>
    <script src="../../include/addreview.js"></script>
    <script src="../../include/getreview.js"></script>

</body>

</html>