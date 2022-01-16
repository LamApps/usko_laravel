@extends('layouts/main')

@section('title', 'Contact Us')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
@endsection

@section('page-style')
@endsection

@section('sub-banner')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="mb-3">Contact Us</h1>
            <h5 class="text-white">We built USKO to get you a better deal</h5>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="contact-1 content-area-20">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row contact-inner">
                    <div class="col-lg-6 col-pad align-self-center">
                        <div class="form">
                            <form action="#" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="text" name="ehone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="send-btn">
                                            <button type="submit" class="btn btn-4">Send a message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-pad">
                        <div class="section maps">
                            <div class="map">
                                <div id="contactMap" class="contact-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('vendor-script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
@endsection

@section('page-script')
@endsection