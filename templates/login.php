<?php require('includes/header.php');?>

<!-- Main section starts here -->
<div class="main-content">
    <section id="login_signup-main">
        <div class="login-main">
            <div class="login-box-heading">
                <h5>Login to ProjectUnity</h5>
            </div>
            <div class="login-box-body">
                <form method="POST", action="login.php">
                    <input type="email" name="loginEmail" placeholder="Email" required>
                    <br>
                    <input type="password" name="loginPassword" placeholder="Password">
                    <div class="remember-login-btn">
                        <div class="remember-me">
                            <input name="rememberMeBtn" type="checkbox">
                            <label for="rememberMeBtn">Remember Me</label>
                        </div>
                        <button name="loginButton" class="login-submit-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

    <!-- Main section ends here -->

    <?php require('includes/right_sidebar.php');?>
    <?php require('includes/footer.php');?>