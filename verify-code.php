<?php include 'inc/header_black.php'; ?>

<section class="log-in">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="#" class="back"><img src="images/s-left-ar.svg" alt=""> Back To Log In</a>
                <h2>Verify Code</h2>
                <p>An authentication code has been sent to your email.</p>
                <form action="#">
                    <div class="form-row">
                        <label>Enter code*</label>
                        <input type="number" placeholder="7789BM6X">
                    </div>
                    <p class="txt-lft">Didn’t receive a code? <a href="#">Resend</a></p>
                    <input type="submit" value="Verify">
                    <h6>Or log In with</h6>
                    <ul class="social-links">
                        <li><a href="#"><img src="images/sfb.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sg.svg" alt=""></a></li>
                        <li><a href="#"><img src="images/sa.svg" alt=""></a></li>
                    </ul>

                </form>
            </div>
            <div class="col-md-7">
                <img src="images/s4.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>