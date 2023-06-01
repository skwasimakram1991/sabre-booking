<?php include 'inc/header.php';?>
<section class="banner-part">
    <img src="images/innerbanner_todays_deals.jpg" alt="">
    <div class="decp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Today’s Deals</h2>
                    <ul class="banner_breadcrumb">
                        <li><a href="#?">Home</a></li> 
                        <li><a href="#?">Today’s Deals</a></li>
                        <li>Booking Details</li>
                    </ul>
                    <!-- <a href="#" class="banner_back"><img src="images/arrow_banner.svg" alt="" /> All The World</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="collection booking_details">
    <div class="container">
        <h2>Booking Confirmed</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Tincidunt tempor felis dignissim nunc cum felis. Orci lectus iaculis mauris semper eget netus elementum purus in. Aliquam purus hendrerit sed congue sit in nunc consectetur purus.</p>
        <div class="row">
            <div class="col-md-8">
                <div class="detbx">
                    <div class="description_row">
                        <h3 class="mx490">Superior room - 1 double bed or 2 twin beds</h3>
                        <h3 class="color_blue mx214">$240/night</h3>
                    </div>
                    <div class="logo_address">
                        <div class="details_logo">
                            <img src="images/cvk-img.png" alt="">
                        </div>
                        <div class="details_desc">
                            <h3>CVK Park Bosphorus Hotel Istanbul</h3>
                            <h6><i class="fa-solid fa-location-dot"></i> Gümüssuyu Mah. Inönü Cad. No:8, Istanbul 34437</h6>
                        </div>
                    </div>
                    <div class="description_row">
                        <h3 class="mx214">Thursday, Dec 8</h3>
                        <img src="images/booking_det_1.svg" alt="">
                        <h3 class="mx214">Friday, Dec 9</h3>
                    </div>
                </div>
                <div class="detbx">
                    <h3>Your details</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name*</label>
                            <div class="formcontainer">
                            <input type="text" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name*</label>
                            <div class="formcontainer">
                            <input type="text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>date of birth*</label>
                            <div class="formcontainer">
                            <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>gender*</label>
                            <div class="formcontainer">
                            <select required name="" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email address*</label>
                            <div class="formcontainer">
                            <input type="email" placeholder="Email address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number*</label>
                            <div class="formcontainer">
                            <input type="text" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="detbx">
                    <h3>Payment details</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label>name on card*</label>
                            <div class="formcontainer">
                            <input type="text" placeholder="john wick" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>card number*</label>
                            <div class="formcontainer">
                            <input type="text" placeholder="0000 0000 0000" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>exp. date*</label>
                            <div class="formcontainer">
                            <input type="text" name="" id="" placeholder="12/28">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>cVC*</label>
                            <div class="formcontainer">
                            <input type="text" name="" id="" placeholder="123">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn">
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col-md-4">
                <div class="detbx p-adjust">
                    <div class="detailsrow">
                        <div class="detailsimg">
                            <img src="images/detailsimg.png" alt="">
                        </div>
                        <div class="detailstxt">
                            <h6>CVK Park Bosphorus...</h6>
                            <h4>Superior room - 1 double bed or 2 twin beds</h4>
                            <h5><span class="ratingtxt">4.2</span>Very Good 54 reviews</h5>
                        </div>
                    </div>
                    <hr>
                    <p>Your booking is protected by Wonder Go Lander</p>
                    <hr>
                    <p>Price Details</p>
                    <p>Base Fare <span>$240</span></p>
                    <p>Discount  <span>$0</span></p>
                    <p>Taxes <span>$20</span></p>
                    <p>Service Fee <span>$5</span></p>
                    <hr>
                    <p>Total <span>$265</span></p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'inc/footer.php';?>