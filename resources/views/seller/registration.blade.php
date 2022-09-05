<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Multilingual Online Auction System</title>

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
                @include('component.trans')
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    @include('component.header')
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
            <a href="index.html" class="logo">
                <img src="../assets/images/logo/logo2.png" alt="logo">
            </a>
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
    <div class="hero-section">
        <div class="bg_img hero-bg bottom_center" data-background="../assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">{{ __('messages.RegSeller') }}</h2>
                        <p>{{ __('messages.happy') }}</p>
                    </div>
                    <!-- <ul class="login-with">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                        </li>
                    </ul> -->
                    <!-- <div class="or">
                        <span>Or</span>
                    </div> -->
                    <form method="POST" action="{{ route('register') }}" class="login-form">
                        @csrf

                        <div class="form-group ">
                            <label for="login-email"><i class="fas fa-file-signature"></i></label>
                            <input type="text" id="fullname" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" >
{{-- 
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>



                        <div class="form-group mb-30">
                            <label for="login-email"><i class="fas fa-file-signature"></i></label>
                            <input type="text" id="" placeholder="Your Department" id="department" type="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}"  autocomplete="department">
                       
{{--                        
                            @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>






                        <div class="form-group mb-30">
                            <label for="login-email"><i class="fas fa-file-signature"></i></label>
                            <input type="text" id="" placeholder="Your Matric Number" id="matric_no" type="matric_no" class="form-control @error('matric_no') is-invalid @enderror" name="matric_no" value="{{ old('matric_no') }}" >
{{--                         
                            @error('matric_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        
                        </div>



                        <div class="form-group mb-30">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" style="padding-top: 7px; margin-bottom: 0; margin-left: -15px;">Gender:</label>
                                </div>
                                <div class="col-md-9" style="display: flex;">
                                    <span><input type="radio" name="gender" value="male" checked style="height: 15px; margin-right: 20px;"> Male</span>
                                    <span><input type="radio" name="gender" value="female" style="height: 15px;"> Female</span>
                                </div>
                            </div>
                        </div>










                        <div class="form-group mb-30">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" style="padding-top: 7px; margin-bottom: 0; margin-left: -15px;">Date Of Birth</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" class="form-control-file border @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}"  autocomplete="dob">
                                </div>
                            </div>

                            {{-- @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>








                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="text" id="email" placeholder="{{ __('messages.EmailAddress') }}" 
                            type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                            {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                        </div>



                        <div class="form-group mb-30">
                            <label for="login-email"><i class="fas fa-address-card"></i></label>
                            <input type="text" id="address" placeholder="Address" 
                            class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" 

                            >
{{-- 
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>


                        <div class="form-group mb-30">
                            <label for=""><i class="fas fa-phone"></i></label>
                            <input type="text" id="" placeholder="Phone Number" 
                            type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  autocomplete="mobile">
                      

                            {{-- @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                      
                        </div>



                        <div class="form-group mb-30">
                            <label for="login-email"><i class="fas fa-map-marker-alt"></i></label>
                            <input type="text" id="address" placeholder="{{ __('messages.DeliveryAddress') }}"
                            type="delivery_address" class="form-control @error('delivery_address') is-invalid @enderror" name="delivery_address" value="{{ old('delivery_address') }}"  autocomplete="delivery_address">
                            @error('delivery_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>





                        <div class="form-group mb-30">
                            <label for=""><i class="fas fa-university"></i></label>
                            <input type="text" id="" placeholder="{{ __('messages.BankName') }}" 
                            type="bank_name" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" value="{{ old('bank_name') }}"  autocomplete="bank_name">
                       
                            @error('bank_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>



                        <div class="form-group mb-30">
                            <label for=""><i class="fas fa-university"></i></label>
                            <input type="text" id="" placeholder="{{ __('messages.AccountNumber') }}" 
                            type="bank_no" class="form-control @error('bank_no') is-invalid @enderror" name="bank_no" value="{{ old('bank_no') }}"  autocomplete="bank_no">
                       
                            @error('bank_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       
                        </div>



                        <div class="form-group mb-30">
                            <label for=""><i class="fas fa-university"></i></label>
                            <input type="text" id="" placeholder="Account Name" 
                            type="bank_acc" class="form-control @error('bank_acc') is-invalid @enderror" name="bank_acc" value="{{ old('bank_acc') }}"  autocomplete="bank_acc">


                            {{-- @error('bank_acc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        </div>





                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="{{ __('messages.password') }}" 
                           class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>


                            {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                        </div>


                     



                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="{{ __('messages.ConfirmPassword') }}" 
                           class="form-control @error('password') is-invalid @enderror" name="password_confirmation"   autocomplete="new-password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>


                            {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                        </div>

                  
                     

                      



                     







                    

                      






                        


                      
                      







                     








                     


                        <!-- Matric Number -->

                       




                        




                      

                  


                     

                        
                        
                        



                        
                        {{-- BankName --}}

                        
            

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">{{ __('messages.ALREADYHAVEANACCOUNT') }}</h3>
                        {{-- "loginDashboard" --}}
                        <p>{{ __('messages.loginDashboard') }}</p>
                        <a href="/login" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->


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

<script type="text/javascript">

  

    var url = "{{ route('changeLang') }}";

  

    $(".changeLang").change(function(){

        window.location.href = url + "?lang="+ $(this).val();

    });

  

</script>



</html>