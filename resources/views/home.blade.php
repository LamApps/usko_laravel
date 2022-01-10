<!DOCTYPE html>
<html lang="en">
<head>
    <title>USKO Realty - Real Estate Agency in Sacramento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    {{-- <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css"> --}}
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    {{-- <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css"> --}}
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    {{-- <link type="text/css" rel="stylesheet" href="assets/css/map.css"> --}}
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700"> --}}

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/red.css">

</head>
<body id="top" class="index-body">
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                    <a href="#" class="mr-0 d-none-992"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
@include('layouts.mainHeader')
<!-- main header end -->

<!-- Sidenav start -->
@include('layouts.sidebar')
<!-- Sidenav end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="assets/img/banner/img-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">
                        <div class="tab-search-section">
                            <h1>FIND YOUR FUTURE HOME</h1>
                            <div id="typed-strings">
                                <p>Find new & featured property located in your local city.</p>
                            </div>
                            <h1 class="typed-text tt2">&nbsp;
                                <span id="typed"></span>
                            </h1>
                            <div class="tab-box">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="false">Sell</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="search-area search-area-6">
                                            <div class="search-area-inner">
                                                <div class="search-contents">
                                                    <form method="GET">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="search-fields sf2 fc2" placeholder="Enter Keyword">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="type">
                                                                        <option>Property Types</option>
                                                                        <option>Residential</option>
                                                                        <option>Commercial</option>
                                                                        <option>Land</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="location">
                                                                        <option>Location</option>
                                                                        <option>United Kingdom</option>
                                                                        <option>American Samoa</option>
                                                                        <option>Belgium</option>
                                                                        <option>Canada</option>
                                                                        <option>Delaware</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="make">
                                                                        <option>Room</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                <div class="form-group fg2">
                                                                    <button class="search-button btn btn-md btn-color">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="search-area search-area-6">
                                            <div class="search-area-inner">
                                                <div class="search-contents">
                                                    <form method="GET">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="search-fields sf2 fc2" placeholder="Enter Keyword">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="type">
                                                                        <option>Property Types</option>
                                                                        <option>Residential</option>
                                                                        <option>Commercial</option>
                                                                        <option>Land</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="location">
                                                                        <option>Location</option>
                                                                        <option>United Kingdom</option>
                                                                        <option>American Samoa</option>
                                                                        <option>Belgium</option>
                                                                        <option>Canada</option>
                                                                        <option>Delaware</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker search-fields" name="make">
                                                                        <option>Room</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                <div class="form-group fg2">
                                                                    <button class="search-button btn btn-md btn-color">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
                                        <div class="search-area search-area-6">
                                            <div class="search-area-inner">
                                                <div class="search-contents">
                                                    <form method="GET">
                                                        <div class="row">
                                                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="search-fields sf2 fc2" placeholder="Enter your address">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                <div class="form-group fg2">
                                                                    <button class="search-button btn btn-md btn-color">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Featured properties start -->
<div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>List your property with USKO Realty and become featured below</p>
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-4.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-4.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Real Luxury Villa</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-2.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-2.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.png" class="hidden"></a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Masons Villas</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Rent</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-3.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-3.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-2.png" class="hidden"></a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Sweet Family Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>820<span>/month</span> </div>
                            <img src="assets/img/property/img-1.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-1.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.png" class="hidden"></a>
                                <a href="assets/img/property/img-2.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Relaxing Apartment</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 day ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Rent</div>
                            <div class="plan-price"><sup>$</sup>480<span>/month</span> </div>
                            <img src="assets/img/property/img-5.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-5.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.png" class="hidden"></a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Beautiful Single Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>640<span>/month</span> </div>
                            <img src="assets/img/property/img-6.png" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-6.png" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-5.png" class="hidden"></a>
                                <a href="assets/img/property/img-4.png" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">Modern Family Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- services start -->
<div class="services content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-2">
                    <div class="inner">
                        <div class="inner-top">
                            <i class="flaticon-user"></i>
                            <h4><a href="services.html">Personalized Service</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="inner-buttom si1">
                            <i class="flaticon-user"></i>
                            <h4><a href="services.html">Personalized Service</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-2">
                    <div class="inner">
                        <div class="inner-top">
                            <i class="flaticon-hotel-building"></i>
                            <h4><a href="services.html">Real Estate Experts</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="inner-buttom si2">
                            <i class="flaticon-hotel-building"></i>
                            <h4><a href="services.html">Real Estate Experts</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-2">
                    <div class="inner">
                        <div class="inner-top">
                            <i class="flaticon-money-bag-with-dollar-symbol"></i>
                            <h4><a href="services.html">Building For Rent $ Sell</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="inner-buttom si3">
                            <i class="flaticon-money-bag-with-dollar-symbol"></i>
                            <h4><a href="services.html">Building For Rent $ Sell</a></h4>
                            <h6>Real estate</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="services.html" class="btn-1"><span>More Details</span></a>
            </div>
        </div>
    </div>
</div>
<!-- services end -->

<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Sale</div>
                        <img src="assets/img/property/img-12.png" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.html">Sweet Family Home</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet and there are more things on this planet...</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Rent</div>
                        <img src="assets/img/property/img-13.png" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.html">Masons Villas</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet and there are more things on this planet...</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Sale</div>
                        <img src="assets/img/property/img-14.png" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.html">Beautiful Single Home</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet and there are more things on this planet...</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-23 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-pad wow fadeInLeft delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="assets/img/popular-places/img-2.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">Rome City</a></h3>
                                            <p>14 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="assets/img/popular-places/img-4.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">California</a></h3>
                                            <p>27 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInUp delay-04s d-none-992">
                    <div class="most-popular-box-1 mpb-2">
                        <div class="thumb-photo">
                            <img src="assets/img/popular-places/img-3.png" alt="img" class="img-fluid">
                            <div class="content"></div>
                            <div class="inner">
                                <div class="info">
                                    <h3><a href="#">Tokyo</a></h3>
                                    <p>84 Properties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="assets/img/popular-places/img-6.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">Paris City</a></h3>
                                            <p>27 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="assets/img/popular-places/img-5.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">London</a></h3>
                                            <p>340 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-5.png" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-6.png" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-7.png" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Karen Paran</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-8.png" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Brandon Miller</a></h5>
                        <p>Office Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial 2 start -->
<div class="testimonial-2 content-area-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
            </div>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                <img class="media-object" src="assets/img/avatar/avatar-2.png" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Creative Director, india
                            </h3>
                            <p>Office Manager</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                <img class="media-object" src="assets/img/avatar/avatar.png" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Pitarshon Roky
                            </h3>
                            <p>Web Designer, Uk</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                <img class="media-object" src="assets/img/avatar/avatar-3.png" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Maikel Alisa
                            </h3>
                            <p>Creative Director</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInLeft delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="blog-photo">
                            <img src="assets/img/blog/blog-6.png" alt="blog-3" class="img-fluid">
                            <div class="user">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar.png" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Rx Vodro</h5>
                                </div>
                            </div>
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text<span class="d-none2-1200"> ever since the 1500s, when </span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="blog-single-sidebar-right.html">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad">
                        <div class="blog-photo">
                            <img src="assets/img/blog/blog-7.png" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-2.png" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Teseira</h5>
                                </div>
                            </div>
                            <div class="overlay-icon">
                                <a href="blog-single-sidebar-right.html"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text<span class="d-none2-1200"> ever since the 1500s, when </span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="blog-single-sidebar-right.html">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog start -->

<!-- Our newslatters start -->
<div class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Get Newsletter</h3>
                <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                <div class="form-info">
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <button type="submit" class="btn btn-md btn-message btn-4">Get it now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our newslatters end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>+0487 85X6 224
                        </li>
                        <li>
                            <i class="fa fa-skype"></i><a href="mailto:info@green.com">info@green.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Grid</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Blog Post</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Property Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item recent-posts">
                    <h4>Recent Properties</h4>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property.png" alt="sub-property">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h5>
                            <p>Feb 27, 2020 | $1045,000</p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property-2.png" alt="sub-property-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h5>
                            <p>Mar 14, 2020 | $944,000</p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property-3.png" alt="sub-property-3">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h5>
                            <p>Apr 14, 2020 | $1420,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <div class="submitNewsletter">
                        <h4>Subscribe</h4>
                        <div class="Subscribe-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since,</p>
                            <form action="#" method="GET">
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                                <button type="submit" name="submitNewsletter" class="btn btn-color">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">© 2018 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        {{-- <iframe class="modalIframe" src="https://www.youtube.com/embed/xywe1MxGxKw" allowfullscreen></iframe> --}}
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-8.png" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-9.png" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content">
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <ul class="bullets bullets2">
                                    <li> Area</li>
                                    <li>Condition</li>
                                    <li>2 Year</li>
                                    <li>Price</li>
                                    <li>2500 Sq Ft:3400</li>
                                    <li>New</li>
                                    <li>2018</li>
                                    <li>$178,000</li>
                                </ul>
                            </section>
                            <div class="ratings-2">
                                <span class="ratings-box">4.5/5</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
{{-- <script src="assets/js/rangeslider.js"></script> --}}
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
{{-- <script src="assets/js/particles.min.js"></script> --}}
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
{{-- <script src="assets/js/leaflet.js"></script> --}}
{{-- <script src="assets/js/leaflet-providers.js"></script> --}}
{{-- <script src="assets/js/leaflet.markercluster.js"></script> --}}
<script src="assets/js/slick.min.js"></script>
{{-- <script src="assets/js/maps.js"></script> --}}
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
{{-- <script src="assets/js/ie-emulation-modes-warning.js"></script> --}}
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
<script>
    $(function(){
        $('.slick-fullwidth').slick({
            centerMode: true,
            centerPadding: '15%',
            slidesToShow: 3,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1441,
                    settings: {centerPadding: '10%', slidesToShow: 3}
                },
                {
                    breakpoint: 1025,
                    settings: {
                        centerPadding: '10px', slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {centerPadding: '10px', slidesToShow: 1}
                }
            ]
        });


        // Slick Sliders
        $('.slick-carousel').each(function () {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function () {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function () {
                slider.slick('slickNext');
            });
        });

    })
</script>
</body>
</html>