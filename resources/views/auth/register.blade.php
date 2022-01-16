@extends('layouts/login')

@section('title', 'Create an Account')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
@endsection

@section('content')
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    <a href="/home" class="logos">
                        <img src="assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <h3 class="mt-3">Create An Cccount</h3>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group form-box">
                            <input type="text" name="name" class="input-text" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
                            <i class="flaticon-mail-2"></i>
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password" class="input-text" placeholder="Password" required autocomplete="new-password">
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password_confirmation" class="input-text" placeholder="Confirm Password" required autocomplete="new-password">
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="checkbox form-group clearfix">
                            <div class="form-check checkbox-theme">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe" required>
                                <label class="form-check-label" for="rememberMe">
                                    I agree to the <a href="#">terms of service</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-4 btn-block">Register</button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                @foreach ($errors->all() as $error) 
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="extra-login form-group clearfix">
                            <span>Or Login With</span>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg">Facebook</a></li>
                            <li><a href="#" class="google-bg">Google</a></li>
                        </ul>
                    </form>
                    <div class="clearfix"></div>
                    <p>Already a member? <a href="/login">Login here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome to <a href="/home">Xero</a></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
