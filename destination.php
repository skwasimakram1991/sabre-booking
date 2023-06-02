<?php include 'inc/header.php';?>
<section class="banner-part">
    <img src="images/innerbanner_destination_main.jpg" alt="">
    <div class="decp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Destinations</h2>
                    <ul class="banner_breadcrumb">
                        <li><a href="#?">Home</a></li> 
                        <!-- <li><a href="#?">Destination</a></li> -->
                        <li>Destinations</li>
                    </ul>
                    <!-- <a href="#" class="banner_back"><img src="images/arrow_banner.svg" alt="" /> All The World</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="destination">
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-6">
            <div class="fixedelm">
                <h3>Explore the world with Wonder Go Lander</h3>
                <p>Just like a tailored suit fits you impeccably and flaunts your flair, your bespoke holiday with WONDERGOLANDER is one where you and your travel companions revel in local experiences that matter. You commission, we draw, and together we stitch the perfect holiday itinerary down to the tiniest detail.</p>
                <p>Our holiday adventures are perfect for travelers who know what they want and who aim to get the most out of every vacation.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="normalelm">
                <div class="dest_world">
                    <div href="#" class="img-sec">
                        <img src="images/destination_world_1.jpg" alt="">
                        <div class="desp">
                            <h4>Africa</h4>
                            <h6>51 hotels in 8 Regions</h6>
                            <a href="#?" class="btn">View</a>
                        </div>
                    </div>
                </div>
                <div class="dest_world">
                    <div href="#" class="img-sec">
                        <img src="images/destination_world_2.jpg" alt="">
                        <div class="desp">
                            <h4>Asia-Pacific</h4>
                            <h6>51 hotels in 8 Regions</h6>
                            <a href="#?" class="btn">View</a>
                        </div>
                    </div>
                </div>
                <div class="dest_world">
                    <div href="#" class="img-sec">
                        <img src="images/destination_world_3.jpg" alt="">
                        <div class="desp">
                            <h4>Middle East</h4>
                            <h6>51 hotels in 8 Regions</h6>
                            <a href="#?" class="btn">View</a>
                        </div>
                    </div>
                </div>
                <div class="dest_world">
                    <div href="#" class="img-sec">
                        <img src="images/destination_world_4.jpg" alt="">
                        <div class="desp">
                            <h4>Europe</h4>
                            <h6>51 hotels in 8 Regions</h6>
                            <a href="#?" class="btn">View</a>
                        </div>
                    </div>
                </div>
                <div class="dest_world">
                    <div href="#" class="img-sec">
                        <img src="images/destination_world_5.jpg" alt="">
                        <div class="desp">
                            <h4>Americas</h4>
                            <h6>51 hotels in 8 Regions</h6>
                            <a href="#?" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
<section class="body-cont5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>join the wondergolander community</h2>
                <p>Receive inspiring luxury travel content and be among the first to know about exclusive travel promos.</p>
                <form action="">
                    <input type="text" placeholder="Enter your email here">
                    <input type="text" placeholder="Tell us your preferred name">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</section>

<script>
//     window.addEventListener('scroll', function() {
//   var dest = document.querySelector('.destination');
//   var destOffsetTop = dest.offsetTop;
//   var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

//   if (scrollTop >= destOffsetTop) {
//     dest.classList.add('sticky');
//   } else {
//     dest.classList.remove('sticky');
//   }
// });

window.addEventListener('scroll', function() {
  var dest = document.querySelector('.destination');
  var destOffsetTop = dest.offsetTop;
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop >= destOffsetTop) {
    dest.classList.add('sticky');
    scrollSectionsOneByOne();
  } else {
    dest.classList.remove('sticky');
    resetScrollSections();
  }
});


</script>

<?php include 'inc/footer.php';?>