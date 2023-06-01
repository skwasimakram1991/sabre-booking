<?php include 'inc/header_black.php'; ?>

<section class="log-in">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Sign Up</h2>
                <p>Let’s get you all st up so you can access your personal account.</p>
                <form action="#">
                    <div class="form-row">
                        <label>First name*</label>
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="form-row">
                        <label>Last name*</label>
                        <input type="text" placeholder="Last name">
                    </div>
                    <div class="form-row">
                        <label>Email*</label>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <label>Phone number*</label>
                        <input type="email" placeholder="Phone number">
                    </div>
                    <div class="form-row">
                        <label>Password*</label>
                        <input type="password" placeholder="Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                        <div class="form-row">
                        <label>Confirm Password*</label>
                        <input type="password" placeholder="re Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                        <div class="form-row check-sec">
                            <div class="checkbox-wrap">
                                <label for="#">
                                    <input type="checkbox">
                                    <p>I agree to all the <a href="#">Terms</a> and Privacy <a href="#">Policies</a></p>
                                </label>
                            </div>
                        </div>
                    <input type="submit" value="Create Account">
                    <p>Already have an account?<a href="#">Log In</a></p>
                    <h6>Or log In with</h6>
                    <ul class="social-links">
                        <li><a href="#"><img src="images/sfb.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sg.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sa.svg" alt=""></a></li>
                    </ul>

                </form>
            </div>
            <div class="col-md-7">
                <img src="images/s2.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>