<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Multilingual Online Auction System</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/css/owl.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
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
                            <a href="sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container" style="display: flex; justify-content: center">
                <div class="header-wrapper">
                    <!-- <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div> -->
                    @include('component.header')
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
                        <a href="#0"><img src="../../assets/images/shop/shop01.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop02.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop03.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop04.jpg" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="../../assets/images/shop/shop05.jpg" alt="shop"></a>
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
        <div class="bg_img hero-bg bottom_center" data-background="../../assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img  src="{{ asset('cover/'.$products->cover_image) }}" alt="product"
                             style="width:30;height:30">
                        </div>
                    </div>
                    {{-- <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product2.png" alt="product">
                        </div>
                    </div> --}}
                    {{-- <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product3.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product4.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product5.png" alt="product">
                        </div>
                    </div>
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="../../assets/images/product/product6.png" alt="product">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                    @foreach ($images as $image)
                    <div class="slide-bottom-item">
                        <div class="slide-inner">
                            <img  src="{{ asset('totalimage/'.$image->image) }}" alt="11car">

                        </div>
                    </div>
                    @endforeach
                    
                   
                  
                </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>



            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    @if(Session::has('success'))
                <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{$products->name}}</h2>
                            <ul>
                                <li>Listing ID: 14076242</li>
                                <li>Item #: 7300-3356862</li>
                            </ul>
                        </div>
                        <ul class="price-table mb-30">
                            <li class="header">
                                <h5 class="current"> Price</h5>
                                <h3 class="price"> &#x20A6;{{$products->price}}</h3>
                        </li>
                            <li>
                                <span class="details"> Current Highest Bidding Price</span>
                                <h5 class="info">
                                @if ($products->ended_bid==0)

                                {{$MAX_PRICE}}
                                    
                                @else
                                {{$MAX_PRICE}}
                                @endif
                            </li>
                            <!-- <li>
                                <span class="details">Bid Increment (US)</span>
                                <h5 class="info">$50.00</h5>
                            </li> -->
                        </ul>
                        
                        <!-- <div class="buy-now-area">
                            <a href="#0" class="custom-button">Buy Now: $4,200</a>
                            <a href="#0" class="rating custom-button active border"><i class="fas fa-star"></i> Add to Wishlist</a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-3">
                            <h6 class="title">This Auction Ends in:</h6>
                            <div style="color:'red">
                               {{-- {{\Carbon\Carbon::now();}} --}}
                            <h4 style="color:red"> {{$remaining_days}} Days Left</h4>
                            </div>
                            <div class="side-counter-area">
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="../../assets/images/product/icon1.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">
                                            @if (is_null($count_bidder))
                                  0
                                  @else 
                                 {{$count_bidder}}
                                @endif</span></h3>
                                        <p>Active Bidding</p>
                                    </div>
                                </div>
                                <!-- <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="assets/images/product/icon2.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">203</span></h3>
                                        <p>Watching</p>
                                    </div>
                                </div> -->
                                <!-- <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="assets/images/product/icon3.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">82</span></h3>
                                        <p>Total Bids</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
                <ul class="product-tab-menu nav nav-tabs">
                    <li>
                        <a href="#details" class="active" data-toggle="tab">
                            <div class="thumb">
                                <img src="../../assets/images/product/tab1.png" alt="product">
                            </div>
                            <div class="content">Description</div>
                        </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab">
                            <div class="thumb">
                                <img src="../../assets/images/product/tab3.png" alt="product">
                            </div>
                            <div class="content">Bidders ({{count($bidders)}})</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">{{$products->name}}</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Condition</th>
                                            <td>{{$products->condition}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Mileage</th>
                                            <td>15,000 miles</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>09-2017</td>
                                        </tr>
                                        <tr>
                                            <th>Engine</th>
                                            <td>I-4 1,5 l</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th>Transmission</th>
                                            <td>Automatic</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>Blue</td>
                                        </tr>
                                        <tr>
                                            <th>Doors</th>
                                            <td>5</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Description</h5>
                                <ul>
                                   <li>{{$products->description}}</li>
                                </ul>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">This unit is located at:</h5>
                                <ul>
                                    <li>Kenben Industries Ltd.</li>
                                    <li>1908 Shore Parkway</li>
                                    <li>Brooklyn, NY 11214</li>
                                </ul>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Acceptance of condition - buyer inspection/preview</h5>
                                <p>Vehicles and equipment often display significant wear and tear. Assets are sold AS IS with no warranty, express or implied, and we highly recommend previewing them before bidding. The preview period is the only opportunity
                                    to inspect an asset to verify condition and suitability. No refunds, adjustments or returns will be entertained. </p>
                                <p>Vehicle preview inspections of the vehicle can be done at the below location on Monday and Tuesday from 10am - 2pm. See Preview Rules Here.</p>
                                <ul>
                                    <li>Kenben Industries Ltd.</li>
                                    <li>1908 Shore Parkway</li>
                                    <li>Brooklyn, NY 11214</li>
                                </ul>
                                <p>BUYER is responsible for all storage fees at time of pick-up. See above under IMPORTANT PICK-UP TIMES for specific requirements for this asset, but generally assets must be picked up within 2 business days of payment otherwise
                                    additional storage fees will be applied.</p>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Legal Notice</h5>
                                <p>Vehicles may not be driven off the lot except with a dealer plate affixed. By law, vehicles are not permitted to be parked on or to drive on the streets of New York without registration and plates registered to the vehicle.
                                    If the buyer cannot obtain the required registration and plates prior to pick up, they should have the vehicle towed at their own expense. The buyer should have the vehicle towed at their own expense.</p>
                                <p>Condition: Untested - Sold As-Is</p>
                                <p>Employees of Sbidu, its subcontractors and affiliated companies, employees of the NYC Government and those bidding on behalf of PropertyRoom.com, its subcontractors and affiliated companies and employees of the NYC Government
                                    are not permitted to bid on or purchase NYC Fleet/DCAS assets. </p>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Condition</h5>
                                <p>This ASSET is being listed on behalf of a law enforcement agency or other partner ("SELLER") by PropertyRoom.com on a Sold AS IS, WHERE IS, WITH ALL FAULTS basis, with no representation or warranty from PropertyRoom.com
                                    or SELLER. In many cases, the car, boat, truck, motorcycle, aircraft, mowers/tractors, etc. ("ASSET") sold on PropertyRoom.com comes from seizure or forfeiture, and the SELLER typically does not possess use-based knowledge
                                    of the ASSET. Further, PropertyRoom.com does not physically inspect the ASSET and cannot attest to actual working conditions. PropertyRoom.com and SELLER gather information about the ASSET from authoritative sources;
                                    still, errors may appear from time to time in the listing. PropertyRoom.com cautions any website user, shopper, bidder, etc. ("BUYER") to attempt to confirm, with us, information material to a bidding/purchasing decision.</p>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Bidding</h5>
                                <p>At this time Sbidu only accepts bidders from the United States, Canada and Mexico on Vehicles and Heavy Industrial Equipment. The Bid Now button will appear on auctions where you are qualified to place a bid.</p>
                            </div>
                            <div class="item">
                                <h5 class="subtitle">Buyer Responsibility</h5>
                                <p>The BUYER will receive an email notification from PropertyRoom.com following the close of an auction. After fraud verification and payment settlement, we will email the BUYER instructions for retrieving the ASSET from the
                                    Will-Call Location listed above.</p>
                                <p>All applicable shipping, logistics, transportation, customs, fees, taxes, export/import activities and all associated costs are the sole responsibility of the BUYER. No shipping, customs, export or import assistance is
                                    available from Sbidu.</p>
                                <p>When applicable for a given ASSET, BUYER bears responsibility for determining motor vehicle registration requirements in the applicable jurisdiction as well as costs, including any fees, registration fees, taxes, etc.,
                                    owed as a result of BUYER registering an ASSET; for example, BUYER bears sole responsibility for all title/registration/smog and other such fees.</p>
                                <p>BUYER is responsible for all storage fees at time of pick-up. See above under IMPORTANT PICK-UP TIMES for specific requirements for this asset, but generally assets must be picked up within 2 business days of payment otherwise
                                    additional storage fees will be applied.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Active Bidders</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Bidder</th>
                                            <th>Deparment</th>
                                            <th>{{null}}</th>
                                            <th>price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bidders as $item)
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        {{-- <img src="../../assets/images/history/01.png" alt="history"> --}}
                                                    </div>
                                                    <div class="content">
                                                    {{$item->name}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">{{$item->department}}</td>
                                            <td data-history="time">{{null}}</td>
                                            <td data-history="unit price"> {{$item->price}}</td>
                                        </tr>
                                            
                                        @endforeach
                                        
                                       
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="../../assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="../assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="../../assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="../../assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="../../assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="../../assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="../../assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="../../assets/images/footer/c4.png" alt="footer">
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
                        <form class="subscribe-form
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
                                    <a href="{{route("all")}}">Auction</a>
                                </li>
                                <li>
                                    <a href="{{route("upload")}}">Sell</a>
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
                                <a href="#0"><img src="../../assets/images/footer/visa.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="../../assets/images/footer/discover.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="../../assets/images/footer/mastercard.png" alt="footer"></a>
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
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/modernizr-3.6.0.min.js"></script>
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/isotope.pkgd.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/waypoints.js"></script>
    <script src="../../assets/js/nice-select.js"></script>
    <script src="../../assets/js/counterup.min.js"></script>
    <script src="../../assets/js/owl.min.js"></script>
    <script src="../../assets/js/magnific-popup.min.js"></script>
    <script src="../../assets/js/yscountdown.min.js"></script>
    <script src="../../assets/js/jquery-ui.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>