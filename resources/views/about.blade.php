@extends('layouts/main')

@section('title', 'About Us')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/jquery.selectBox.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
@endsection

@section('page-style')
@endsection

@section('sub-banner')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="mb-3">About Us</h1>
            <h5 class="text-white">We built USKO to get you a better deal</h5>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- About us start -->
<div class="about-us content-area-7 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-carousel">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/property/img-1.png" alt="property" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/property/img-2.png" alt="property" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/property/img-3.png" alt="property" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-info">
                    <h3>About Our Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere. Fusce sodales lacus ut pellentes sollicitudin. Duis iaculis, arcu ut hendrerit pharetra, elit augue pulvinar magna,<span class="d-none-1200"> a consectetur eros quam magna,</span></p>
                    <P class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere.</P>
                    <!-- Counters start -->
                    <div class="counters cts">
                        <div class="counter-box">
                            <h1 class="counter">850</h1>
                            <h5>Deals Success</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">786</h1>
                            <h5>Finincing</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">950</h1>
                            <h5>Insurance Done</h5>
                        </div>
                    </div>
                    <!-- Counters end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- services 3 start -->
<div class="services-3 content-area-20">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-hotel-building"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Apartments Clean</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Houses</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-call-center-agent"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Support 24/7</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-office-block"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Commercial</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="services.html" class="btn-5">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- services 3 end -->

<!-- Counters start -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Listings For Rent</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-job"></i>
                    <h1 class="counter">94</h1>
                    <h5>Brokers</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-5.png" alt="agent-grid-2" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-6.png" alt="agent-grid-2" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-7.png" alt="agent-grid-2" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Karen Paran</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-8.png" alt="agent-grid-2" class="img-fluid">
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
<!-- agent end -->

<!-- Testimonial start -->
<div class="testimonial-5 content-area-20 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Slick slider area start -->
                <div class="slick-slider-area">
                    <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar.png" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Michelle Nelson</a>
                                        </h5>
                                        <p>Consultant</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar-2.png" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Anne Brady</a>
                                        </h5>
                                        <p>Web Designer, Uk</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar-3.png" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Carolyn Stone</a>
                                        </h5>
                                        <p>Designer</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- partner start -->
<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="multi-carousel" data-items="1,3,5,6" data-slide="1" id="multiCarousel"  data-interval="1000">
                    <div class="multi-carousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-1.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-2.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-3.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-4.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-5.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-1.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-2.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-3.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-4.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-5.png" alt="brand">
                            </div>
                        </div>
                    </div>
                    <a class="multi-carousel-indicator leftLst" aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="multi-carousel-indicator rightLst" aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partner end -->
@endsection

@section('vendor-script')
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
@endsection

@section('page-script')
<script>
    function isCounterElementVisible($elementToBeChecked)
    {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }
    $(window).on('scroll', function () {
        $( ".counter" ).each(function() {
            var isOnView = isCounterElementVisible($(this));
            if(isOnView && !$(this).hasClass('Starting')){
                $(this).addClass('Starting');
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });
    // Slick Sliders
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
</script>
@endsection