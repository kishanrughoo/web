       <!--Sign-up---------->
       <div class="sign-up-form">
           <!--cancel-btn---------------->
           <a href="javascript:void(0);" class="form-cancel">
               <i class="fas fa-times"></i>
           </a>

           <strong>Sign Up</strong>

           <!--inputs-->
           <form action="../../backend/register/register.php" method="post">
               <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>

               <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>

               <!--Entering Full name-->
               <?php if (isset($_GET['fullname'])) { ?>
               <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $_GET['fullname']; ?>"
                   pattern="([a-zA-Z][a-zA-Z0-9-_.]{1,20})"
                   title="Name should be in CAPITAL and contains only alphabets" required><br>
               <?php }else{ ?>
               <input type="text" name="fullname" placeholder="Full Name" pattern="([a-zA-Z][a-zA-Z0-9-_.]{1,20})"
                   title="Name should be in CAPITAL and contains only alphabets" required><br>
               <?php }?>

               <!--Entering email-->
               <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" placeholder="Example@gmail.com" value="<?php echo $_GET['email']; ?>"
                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}"
                   title="The required pattern should be [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required><br>
               <?php }else{ ?>
               <input type="email" name="email" placeholder="Example@gmail.com"
                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}"
                   title="The required pattern should be [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required><br>
               <?php }?>

               <!--Entering password-->
               <input type="password" name="password" placeholder="Password"
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                   required><br>

               <input type="submit" value="Sign Up" />
           </form>

           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
               <a href="javascript:void(0);" class="already-account">
                   Already Have Account?</a>
           </div>
       </div>
    </div>