<?php include 'inc/header_black.php'; ?>

<section class="log-in">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="#" class="back"><img src="images/s-left-ar.svg" alt=""> Back To Log In</a>
                <h2>Set A Password</h2>
                <p>Your previous password has been reseted. Please set a new password for your account.</p>
                <form action="#">
                    <div class="form-row">
                        <label>create Password*</label>
                        <input type="password" placeholder="Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                    <div class="form-row">
                        <label>re-enter Password*</label>
                        <input type="password" placeholder="re Password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                    <input type="submit" value="Set Password">
                    <h6>Or log In with</h6>
                    <ul class="social-links">
                        <li><a href="#"><img src="images/sfb.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sg.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sa.svg" alt=""></a></li>
                    </ul>

                </form>
            </div>
            <div class="col-md-7">
                <img src="images/s5.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>