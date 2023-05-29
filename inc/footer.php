<footer>
    <div class="container">
        <div class="sec1">
            <div class="row">
                <div class="col-lg-2 offset-lg-1 col-md">
                    <h2>Useful Links</h2>
                    <ul class="menu">
                        <li><a href="#">Become an Affiliate</a></li>
                        <li><a href="#">Are you a fashion blogger?</a></li>
                        <li><a href="#">Partner with Vogacloset</a></li>
                        <li><a href="#">Refer a friend</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Size Guides</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md">
                    <h2>Customer Service</h2>
                    <ul class="menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy and Security</a></li>
                        <li><a href="#">Payment and Promotions</a></li>
                        <li><a href="#">Returns and Refunds</a></li>
                        <li><a href="#">Cookie Declaration</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                    </ul>
                </div>
                <div class="col-lg-4  offset-lg-1 col-md-5">
                    <h2>Subscribe</h2>
                    <form action="">
                        <input type="text" placeholder="Email@example.cpm">
                        <input type="submit" value="JOIN">
                    </form>
                    <p>Subscribe to our newsletter to stay up-to-date on exclusive offers and latest trends</p>
                </div>
            </div>
        </div>
    </div>
    <h6>© 2022 The Genuine Article. The Genuine Article is a Registered Trademark. All Rights Reserved.</h6>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#navigation nav').slimNav_sk78();
    var owl = $('.slider');
    owl.owlCarousel({
        autoPlay: 4000, //Set AutoPlay to 3 seconds
        items: 1,
        false: true,
        dots: true,
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayTimeout: 4000,
    }); 
  
  
    $('.accordion').find('.accordion-toggle').click(function() {
		$(this).next().slideToggle('600');
		$(".accordion-content").not($(this).next()).slideUp('600');
	});
	$('.accordion-toggle').on('click', function() {
		$(this).toggleClass('active').siblings().removeClass('active');
	});
}); 
</script>

</body>
</html>