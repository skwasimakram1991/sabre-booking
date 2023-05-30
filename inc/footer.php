<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="ft-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">Today’s Deals</a></li>
                    <li><a href="#">Inspire Me</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                 <ul class="ft-menu">
                    <li>IATA Number: 96636816</li>
                    <li>STB Travel Agency License Number: 03434</li>
                </ul>
                <ul class="icons">
                    <li><a href="#"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p>328 North Bridge Road, #02-20 Raffles Hotel Arcade, Singapore 188719</p>
                <ul class="icons">
                   <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <ul class="trem">
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <h6>© 2023 by Wonder Golander (S) Pte Ltd</h6>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#navigation nav').slimNav_sk78();

    var owl = $('.trending-cara');
    owl.owlCarousel({
        autoPlay: 4000, //Set AutoPlay to 3 seconds
        items: 1,
        false: true,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 1500,
        margin:50,
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

<script>
$(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
         autoUpdateInput: true,
     
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('MMMM D, YYYY') + ' to ' + end
            .format('MMMM D, YYYY'));
    }); 
    
});
</script>

</body>

</html>