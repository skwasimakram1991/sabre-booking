<?php include 'inc/header_black.php'; ?>

<section class="log-in">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Login</h2>
                <p>Login to access your Golobe account</p>
                <form action="#">
                        <div class="form-row">
                        <label>Email*</label>
                        <input type="email" placeholder="Email">
                        </div>
                            <div class="form-row">
                            <label>Password*</label>
                            <input type="password" placeholder="Password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                            </div>
                        <div class="form-row check-sec">
                            <div class="checkbox-wrap">
                                <label for="#">
                                    <input type="checkbox">
                                    <p>Remember me</p>
                                </label>
                            </div>
                            <a href="forgot-password.php">Forgot Password</a>
                        </div>
                        <input type="submit" value="Log In">
                        <p>Don’t have an account? <a href="sign-up.php">Sign up</a></p>
                        <h6>Or log In with</h6>
                        <ul class="social-links">
                            <li><a href="#"><img src="images/sfb.svg" alt=""></a></li>
                            <li><a href="#"><img src="images/sg.svg" alt=""></a></li>
                            <li><a href="#"><img src="images/sa.svg" alt=""></a></li>
                        </ul>
                        
                </form>
            </div>
            <div class="col-md-7">
                <img src="images/s1.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>