@extends('layouts/main')

@section('title', 'Selling')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('sub-banner')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="mb-3">A smooth home sale starts here</h1>
            <h5 class="text-white">We built USKO to get you a better deal</h5>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="estimate content-area-8">
    <div class="container">
        <div class="main-title">
            <h1>What's my home worth? </h1>
            <p>Establishing the right asking price is critical to the home selling process.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter Street Address" aria-label="Enter Street Address" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-md btn-color" type="button">Get Estimate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact content-area-8">
    <div class="container">
        <div class="main-title">
            <h1>Talk to a local USKO Agent</h1>
            <p>We’re here to make your home sale or purchase go right. There’s no obligation.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('assets/img/meet_agent.jpg')}}">
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="form">
                    <form action="/contact" method="POST">
                        @csrf
                        <input type="hidden" name="subject" value="selling">
                        <div class="row">
                            @if ($errors->any())
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="alert alert-danger mb-3" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    @foreach ($errors->all() as $error) 
                                    <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @if (\Session::has('success'))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="alert alert-success mb-3" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {!! \Session::get('success') !!}
                                </div>
                            </div>
                            @endif

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group phone">
                                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}" placeholder="Phone Number (10 digits number)" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-4">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact content-area-7">
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
@endsection

@section('page-script')

@endsection