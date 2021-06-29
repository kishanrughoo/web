<!---login-and-sign-up--------------------------------->
<div class="form">

<!--login---------->
<div class="login-form">
    <!--cancel-btn---------------->
    <!--Cancelling the form, erasing everything-->
    <a href="javascript:void(0);" class="form-cancel">
        <i class="fas fa-times"></i>
    </a>

    <strong>Log In</strong>

    <!--inputs-->
    <form action="../../backend/login/login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <input type="email" name="email" id="email" placeholder="Example@gmail.com"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}"
            title="The required pattern should be [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required />
        <input type="password" name="password" id="password" placeholder="Password"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
            required />
        <input type="submit" value="Log In" />
        <span>
            <input type="checkbox" class="checkbox">
            Keep me signed in
        </span>
    </form>

    <!--forget-and-sign-up-btn-->
    <div class="form-btns">
        <a href="#" class="forget">Forget Your Password?</a>
        <a href="javascript:void(0);" class="sign-up-btn">Create Account</a>
    </div>
</div>