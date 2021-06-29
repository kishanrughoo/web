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
    <title> Checkout | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/checkout.css">

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

    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="../../backend/checkout/checkout_backend.php" method="post">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="username" value="<?php echo $_SESSION['user_name'] ?>">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="Vacoas">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Hadia Mohit">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">

                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2021">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>

                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Save this info for next time
                    </label>
                    <label>
                    </label>
                    <label>
                        <span style="display:none;">Order Placed</span>
                    </label>

                    <input type="submit" value="Pay" class="btn">
                </form>
            </div>
        </div>

        <div class="col-25">
            <div class="container">
                <h4>Cart
                    <span class="price" style="color:black">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                </h4>
                <?php
                    include "../../database.php";
                    $_SESSION['total'] = 0;
                    $sql = "SELECT cart.total, items.item_name FROM cart INNER JOIN items ON cart.items_id=items.items_id";
                    $result = mysqli_query($conn, $sql);
                    while($row1 = mysqli_fetch_assoc($result)){
                        $item_nm = $row1['item_name'];
                        $total_p = $row1['total'];
                        $_SESSION['total'] += $total_p;
                    ?>
                        <p><a><?php echo $item_nm ?></a> <span class="price">RS.<?php echo $total_p ?></span></p>
                <?php } ?>
                <hr>
                <p>Total <span class="price" style="color:black"><b>RS.<?php echo $_SESSION['total'] ?></b></span></p>
            </div>
        </div>
    </div>
</body>
<script src="../../include/checkout.js"></script>
</html>