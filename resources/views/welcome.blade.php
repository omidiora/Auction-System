<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>multiingual Online auction system</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <style>
        .auction-item-2 .auction-content .bid-area .bid-amount::before {
            background: inherit;
        }
    </style>
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
                            <a href="bidder/sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <!-- <div class="logo" style="width: 130px;">
                        <a href="index.html">
                            <img src="assets/images/logo/logo1.png" alt="logo" style="height: 120px;">
                        </a>
                    </div> -->
                    <ul class="menu ml-auto">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="bidder/product.html">Auction</a>
                        </li>
                        <li>
                            <a href="seller/seller-item-list.html">Sell</a>
                        </li>
                        <li>
                            <a href="bidder/dashboard.html">Dashboard</a>
                            <ul class="submenu">
                                <li>
                                    <a href="bidder/profile.html">Personal Profile</a>
                                </li>
                                <li>
                                    <a href="bidder/my-bid.html">My Bids</a>
                                </li>
                                <li>
                                    <a href="bidder/winning-bids.html">Winning Bids</a>
                                </li>
                                <li>
                                    <a href="bidder/notifications.html">Notification</a>
                                </li>
                                <!-- <li>
                                    <a href="my-favorites.html">My Favorites</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="bidder/sign-up.html">My Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="bidder/sign-up.html">Register</a>
                                </li>
                                <li>
                                    <a href="bidder/sign-in.html">Login</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="bidder/contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for product....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
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
                        <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
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


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate">Multilingual Online Auction System</h5>
                        <h1 class="title"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                        <p>
                            Online Auction is where everyone goes to shop, sell, and give, while discovering variety and affordability.
                        </p>
                        <a href="bidder/product.html" class="custom-button yellow btn-large">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="assets/images/banner/banner-2.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <!-- <div class="left">
                        <h6 class="title pl-0 w-100">Browse the highlights</h6>
                    </div> -->
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/09.png" alt="auction">
                            <span class="info">Books</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/02.png" alt="auction">
                            <span class="info">Jewelries</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/03.png" alt="auction">
                            <span class="info">Watches</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/06.png" alt="auction">
                            <span class="info">Accesories</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/08.jpg" alt="auction">
                            <span class="info">Clothes</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/05.png" alt="auction">
                            <span class="info">Bags</span>
                        </a>
                        <a href="bidder/view-all.html" class="browse-item">
                            <img src="assets/images/auction/04.png" alt="auction">
                            <span class="info">Shoes</span>
                        </a>
                        <!-- <a href="#0" class="browse-item">
                            <i class="fas fa-book-reader" style="display: block; color: pink; font-size: 500%;"></i>
                            <span class="info" style="display: inline-block; margin-top: 70px;">Clothes</span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->

        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/09.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Books</h2>
                            <p>Affordable Books are available</p>
                        </div>
                    </div>
                    <a href="bidder/view-all.html" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="bidder/product-details.html"><img src="assets/images/auction/book/09.png" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="bidder/product-details.html">The Tempest, 2018</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount" style="width: 100%;">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#4000.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter26"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="bidder/product-details.html"><img src="assets/images/auction/book/09.png" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="bidder/product-details.html">The Tempest, 2018</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount" style="width: 100%;">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#4000.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter27"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="bidder/product-details.html"><img src="assets/images/auction/book/09.png" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="bidder/product-details.html">The Tempest, 2018</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount" style="width: 100%;">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#4000.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter28"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    </div>


    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Jewelries</h2>
                        <p>Online jewelry auctions where you can bid for your favorites jewelry</p>
                    </div>
                </div>
                <a href="bidder/view-all.html" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Gold Ring With Clear Stones</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#876.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter23"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Gold Ring With Clear Stones</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#876.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter24"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Gold Ring With Clear Stones</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#876.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter25"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top pt-max-xl-0">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="assets/images/call-in/call-bg.png">
                <div class="section-header">
                    <h3 class="title">Register for Free & Start Bidding Now!</h3>
                    <!-- <p>From cars to diamonds to iPhones, we have it all.</p> -->
                </div>
                <a href="bidder/sign-up.html" class="custom-button white">Register</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->


    <!--============= Watches Auction Section Starts Here =============-->
    <section class="watches-auction-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Watches</h2>
                        <p>Shop for men & women designer brand watches</p>
                    </div>
                </div>
                <a href="bidder/view-all.html" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/watches/auction-1.jpg" alt="watches"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Vintage Rolex</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#10,000.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter20"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/watches/auction-1.jpg" alt="watches"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Vintage Rolex</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#10,000.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter21"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="bidder/product-details.html"><img src="assets/images/auction/watches/auction-1.jpg" alt="watches"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="bidder/product-details.html">Vintage Rolex</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount" style="width: 100%;">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Price</div>
                                        <div class="amount">#10,000.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter22"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="bidder/product-details.html" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Watches Auction Section Ends Here =============-->

    <!--============= Art Auction Section Starts Here =============-->
    <section class="art-and-electronics-auction-section padding-top">
        <div class="container">
            <div class="row justify-content-center mb--50">
                <div class="col-xl-6 col-lg-8 mb-50">
                    <div class="section-header-2">
                        <div class="left">
                            <div class="thumb">
                                <img src="assets/images/header-icons/camera-1.png" alt="header-icons">
                            </div>
                            <h2 class="title">Shoes</h2>
                        </div>
                        <div class="slider-nav">
                            <a href="#0" class="electro-prev"><i class="flaticon-left-arrow"></i></a>
                            <a href="#0" class="electro-next active"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="auction-slider-1 owl-carousel owl-theme  mb-30-none">
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter1"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter2"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter3"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter4"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter5"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter6"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter7"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter8"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 mb-50">
                    <div class="section-header-2">
                        <div class="left">
                            <div class="thumb">
                                <img src="assets/images/header-icons/art-1.png" alt="header-icons">
                            </div>
                            <h2 class="title">Bags</h2>
                        </div>
                        <div class="slider-nav">
                            <a href="#0" class="art-prev"><i class="flaticon-left-arrow"></i></a>
                            <a href="#0" class="art-next active"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="auction-slider-2 owl-carousel owl-theme mb-30-none">
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter9"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter10"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter11"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter12"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter13"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter14"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter15"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="bidder/product-details.html"><img src="assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="bidder/product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Price</div>
                                            <div class="amount">#10,000.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter16"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Art Auction Section Ends Here =============-->


    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <!-- <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client01.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client02.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="assets/images/client/client03.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--============= Client Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
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
                                    <a href="#0">Shoes</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelries</a>
                                </li>
                                <li>
                                    <a href="#0">Bags</a>
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
                                <a href="#0"><img src="assets/images/footer/paypal.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/visa.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/discover.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/mastercard.png" alt="footer"></a>
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>