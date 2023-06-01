<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/png" href="images/logo.svg">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="css/slimNav_sk78.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.default.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

</head>

<body>

    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4 main-logo">
                    <a href="index.php"><img src="images/logo.svg" alt=""></a>
                </div>
                <div class="col-lg-7 col-7 menu-sec text-end">
                    <div id="navigation">
                        <nav>
                            <ul>
                                <li class="current-menu-items"><a href="#?" data-bs-toggle="modal" data-bs-target="#myModal">Search</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Collections</a></li>
                                <li><a href="#">Today’s Deals</a></li>
                                <li><a href="#">Inspire Me</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-lg-3">
                    <ul class="user-sec">
                        <li>
                            <form action="">
                                <select name="" id="">
                                    <option value="">En</option>
                                    <option value="">Hi</option>
                                    <option value="">Ben</option>
                                </select>
                            </form>
                        </li>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Join Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- The Modal -->
    <div class="modal fade src-pop" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Hotel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <label for="">Location*</label>
                                <input type="text" placeholder="Balvi" class="location">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="">Date*</label>  
                                <input type="text" name="pick-date" value="" placeholder="Check In" class="calendar">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="">Date*</label>  
                                <input type="text" name="pick-date" value="" placeholder="Check out" class="calendar">
                            </div>
                            <div class="col-12">
                                <label for="">Room(s)</label>
                                <select name="" id="">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                    <option value="">3 Room</option>
                                    <option value="">4 Room</option>
                                    <option value="">5 Room</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="">guest(s)*</label>
                                <select name="" id="">
                                    <option value="">1 Person</option>
                                    <option value="">2 Person</option>
                                    <option value="">3 Person</option>
                                    <option value="">4 Person</option>
                                    <option value="">5 Person</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="submit" value="Book Now" class="btn">
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>