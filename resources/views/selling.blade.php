@extends('layouts/main')

@section('title', 'Selling')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/jquery.selectBox.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">
@endsection

@section('page-style')
@endsection

@section('sub-banner')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="mb-3">What's My Home Worth?</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter Street Address" aria-label="Enter Street Address" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-md btn-color" type="button">GET ESTIMATE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="faq content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Frequently Asked Questions </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="faq" class="faq-accordion">
                    <div class="card m-b-0">
                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                What do you mean by an End Product?
                            </a>
                        </div>
                        <div id="collapse1" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                Where do I find my Purchase or License code?
                            </a>
                        </div>
                        <div id="collapse2" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                Do I need to buy a licence for each site?
                            </a>
                        </div>
                        <div id="collapse3" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                Is my license transferable?
                            </a>
                        </div>
                        <div id="collapse4" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse5">
                                Can I incorporate advertising in my end product with a regular licence?
                            </a>
                        </div>
                        <div id="collapse5" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header border-0">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse6">
                                Do I need a separate license each time I use an item in a series?
                            </a>
                        </div>
                        <div id="collapse6" class="card-block collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra. Vestibulum vel mauris et odio lobortis laoreet eget
                                eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('vendor-script')
<script src="{{ asset('assets/js/jquery.selectBox.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@endsection

@section('page-script')

@endsection