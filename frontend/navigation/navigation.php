<div class="navigation">
    <!--logo with a slogan written as figcaption-->
    <!--If the image is not loaded, "company logo will appear"-->
    <figure>
        <img href="../../frontend/homepage/homepage.php" title="logo" src="../../images/top-icon.png" alt="Company Logo"
            style="width:250px">
        <figcaption>Smarter Shopping, better living!</figcaption>
    </figure>


    <!--menu-icon------------->
    <div class="toggle"></div>
    <!--menu containg of home,men,women,kids,deals,new----------------->
    <ul class="menu">
        <!--The home is active therefore appears as another colour-->
        <li><a href="../../frontend/homepage/homepage.php" class="active" style="background-color: peachpuff">HOME</a>
        </li>

        <!--Men is a dropdown list containg tshirts,shirts,shorts,hoodie,jacket,jeans-->

        <li class="dropdown">
            <a href="#">MEN</a>
            <ul role="menu" class="sub-menu">
                <li><a href="../../frontend/tshirt/MenT_shirts.php">T-shirts</a></li>
                <li><a href="../../frontend/tshirt/MenT_shirts.php">Shirts</a></li>
                <!-- <span class="num-cart-product">1</span> -->
                <!-- <li><a href="shirts.html">Shirts</a></li> -->
                <li><a href="../../frontend/tshirt/MenT_shirts.php">Hoodie</a></li>
                <!-- <li><a href="hoodie.html">Hoodie</a></li>-->
                <li><a href="../../frontend/tshirt/MenT_shirts.php">Jacket</a></li>
                <!-- <li><a href="jackets.html">Jacket</a></li> -->
                <li><a href="../../frontend/tshirt/MenT_shirts.php">Jeans</a></li>
                <!-- <li><a href="jeans.html">Jeans</a></li> -->
                <li><a href="../../frontend/tshirt/MenT_shirts.php">Shorts</a></li>
                <!--   <li><a href="shorts.html">Shorts</a></li>-->
            </ul>
        </li>

        <!--Men is a dropdown list containg tshirts,shirts,shorts,hoodie,jacket,jeans-->
        <li class="dropdown">
            <a href="#">WOMEN</a>
            <ul role="menu" class="sub-menu">
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">T-shirts</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Dress</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Hoodie</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Jacket</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Jeans</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Shorts</a></li>
                <li><a href="../../frontend/girlsTshirt/WomenTshirts.php">Skirts</a></li>
            </ul>
        </li>

        <li><a href="#">KIDS</a>
            <!--lable---->
            <!--In kids section,we have sale-->
            <span class="sale-lable">Sale</span>
        </li>

        <li><a href="#">NEW</a></li>

        <li><a href="#">DEALS</a></li>
    </ul>

    <!--right-menu----------->
    <div class="right-menu">
        <!--If inserting an expression into a web page results in an unwanted effect,
            then use JavaScript void to remove it. Adding “javaScript:void(0)”, returns the undefined primitive value-->
        <!--On the right side of the menu,we have the search,contact-us,wishlist,cart,account-->
        <a href="javascript:void(0);" class="search">
            <i class="fas fa-search"></i>Search
        </a>

        <!--Contact us contains a contact form,and the company's address-->
        <a href="../../frontend/contact/contact.php" class="contact-us">
            <i class="far fa-user"></i>Contact
        </a>

        <!--Wishlist contains all the products that a user like and wish to buy-->
        <a href="javascript:void(0);">
            <i class="fa fa-star" aria-hidden="true"></i>WishList
        </a>

        <!--cart contains all the products that a user will buy,it's just one step before payment-->
        <a href="../../frontend/cart/cart.php"><i class="fas fa-shopping-cart"></i>
            
        </a>


        <!-- <?php echo "<a  href=\"javascript:void(0);\" class=\"user\">
                 <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>"; 
                 echo $_SESSION['my_name'];
                 echo "</a>"; ?> -->


        <!--Account contains log in or sing in form-->
        <?php
            if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
                echo "Hello,";
                echo "<a  href=\"javascript:void(0);\" class=\"user\">"; 
                echo "<a href=\"../../frontend/normaluser/userprof.php\">";
                echo $_SESSION['user_name'];
                echo "</a>";
                echo "</a>";
                echo "<a href=\"../../backend/logout/logout.php\">Logout</a>";
            
            }else{
                echo "<a href=\"javascript:void(0);\" class=\"user\">
                <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>Account";
                echo "</a>";
            }
        ?>

    </div>
</div>