<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/owl.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <!-- <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li> -->
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Yor</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li>
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                        </li>
                        <li>
                            <a href="seller-login.html" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container" style="display: flex; justify-content: center;">
                <div class="header-wrapper">
                    <!-- <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div> -->
                    <ul class="menu ml-auto">
                        <li>
                            <a href="../index.html">Home</a>
                        </li>
                        <li>
                            <a href="../bidder/product.html">Auction</a>
                        </li>
                        <li>
                            <a href="seller-item-list.html">Sell</a>
                        </li>
                        <li>
                            <a href="seller-dashboard.html">Dashboard</a>
                            <ul class="submenu">
                                <li>
                                    <a href="profile.html">Personal Profile</a>
                                </li>
                                <li>
                                    <a href="my-bid.html">My Items</a>
                                </li>
                                <li>
                                    <a href="winning-bids.html">Sold Items</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notification</a>
                                </li>
                                <!-- <li>
                                    <a href="my-favorites.html">My Favorites</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="sell-register.html">My Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="sell-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="seller-login.html">Login</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../bidder/contact.html">Contact</a>
                        </li>
                    </ul>
                    <!-- <form class="search-form">
                        <input type="text" placeholder="Search for products....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form> -->
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <!-- <a href="index.html" class="logo">
                <img src="assets/images/logo/logo2.png" alt="logo">
            </a> -->
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../assets/images/shop/shop05.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="bg_img hero-bg bottom_center" data-background="../assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="../assets/images/dashboard/user.png" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">Percy Reed</a></h5>
                                <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f993969197b99e94989095d79a9694">[email&#160;protected]</a></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="seller-dashboard.html"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="profile.html" class="active"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="my-bid.html"><i class="flaticon-auction"></i>My Items</a>
                            </li>
                            <li>
                                <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Sold Items</a>
                            </li>
                            <li>
                                <a href="notifications.html"><i class="flaticon-alarm"></i>Notification</a>
                            </li>
                            <!-- <li>
                                <a href="my-favorites.html"><i class="flaticon-star"></i>My Favorites</a>
                            </li> -->
                            <!-- <li>
                                <a href="referral.html"><i class="flaticon-shake-hand"></i>Referrals</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                               
                                    
                               
                                <div class="header">
                                    <h4 class="title">Personal Details</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                              
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Name</div>
                                        <div class="info-value">{{$users->name}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Department</div>
                                        <div class="info-value">Computer Science</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Matric No.</div>
                                        <div class="info-value">{{$users->matric_no}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Date of Birth</div>
                                        <div class="info-value">{{$users->dob}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Address</div>
                                        <div class="info-value">{{$users->address}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Email</div>
                                        <div class="info-value"><a href="http://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d303e392e286f68651c3b313d3530723f3331">[email&#160;protected]</a></div>
                                    </li>
                                    <li>
                                        <div class="info-name">Mobile</div>
                                        <div class="info-value">{{$users->mobile}}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Account Settings</h4>
                                    <!-- <span class="edit"><i class="flaticon-edit"></i> Edit</span> -->
                                </div>
                                <ul class="dash-pro-body">
                                    <!-- <li>
                                        <div class="info-name">Language</div>
                                        <div class="info-value">English (United States)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Time Zone</div>
                                        <div class="info-value">(GMT-06:00) Central America</div>
                                    </li> -->
                                    <li>
                                        <div class="info-name">Status</div>
                                        <div class="info-value"><i class="flaticon-check text-success"></i> Active</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Delivery Address</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Address</div>
                                        <div class="info-value">{{$users->address}}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Bank Details</h4>
                                    <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name" style="width: 145px;">Bank Name</div>
                                        <div class="info-value" style="width: calc(100% - 145px);">{{$users->bank_name}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name" style="width: 145px;">Account Number</div>
                                        <div class="info-value" style="width: calc(100% - 145px);">{{$users->bank_no}}</div>
                                    </li>
                                    <li>
                                        <div class="info-name" style="width: 145px;">Account Name</div>
                                        <div class="info-value" style="width: calc(100% - 145px);">Ademola Toheeb</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="../assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="../assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="../assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="../assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="../assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="../assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="../assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="../assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <!-- <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="assets/images/footer/newslater.png" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Sbidu</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title" style="color: #693ff5;">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0" style="color: #693ff5;">Books</a>
                                </li>
                                <li>
                                    <a href="#0" style="color: #693ff5;">Clothes</a>
                                </li>
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Electronics</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#0">Sports</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">About Multilingual Online Auction System</a>
                                </li>
                                <li>
                                    <a href="#0">Auction</a>
                                </li>
                                <li>
                                    <a href="#0">Sell</a>
                                </li>
                                <li>
                                    <a href="#0">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Your Account</a>
                                </li>
                                <li>
                                    <a href="#0">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#0">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="#0">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#0">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>+2348132933439</a>
                                </li>
                                <!-- <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>+2348132933439</a>
                                </li> -->
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="254d40495565404b424a514d4048400b464a48">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>UNIOSUN</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <!-- <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
                        </div> -->
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="../assets/images/footer/paypal.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="../assets/images/footer/visa.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="../assets/images/footer/discover.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="../assets/images/footer/mastercard.png" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright">
                            <p>&copy; Copyright 2022 | <a href="#0">Multilingual Online Auction System</a> By <a href="#0">Ademola Toheeb Opeyemi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/waypoints.js"></script>
    <script src="../assets/js/nice-select.js"></script>
    <script src="../assets/js/counterup.min.js"></script>
    <script src="../assets/js/owl.min.js"></script>
    <script src="../assets/js/magnific-popup.min.js"></script>
    <script src="../assets/js/yscountdown.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>