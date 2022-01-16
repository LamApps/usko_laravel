@extends('layouts/main')

@section('title', 'Join USKO Realty')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('sub-banner')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="mb-3">Join USKO Realty</h1>
            <h5 class="text-white">We built USKO to get you a better deal</h5>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="blog-section content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog grid box start -->
                <div class="blog-2 mb-50 blog-big">
                    <div class="blog-photo">
                        <img src="assets/img/blog/blog-3.png" alt="blog-2" class="img-fluid">
                    </div>
                    <div class="blog-one__single-text-box detail">
                        <h3 class="title">Buying a Best House</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting,</p>
                        <P>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.</P>
                        <br>
                        <blockquote class="blockquote">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <div class="footers">
                                Someone famous in
                                <cite>
                                    Source Title
                                </cite>
                            </div>
                        </blockquote>
                        <p>Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa. Fusce non ante sed lorem rutrum feugiat.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting,</p>
                    </div>
                </div>
                <div class="contact-3">
                    <h3 class="heading-3">Preferred Job Skills</h3>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                               <p><i class="fa fa-check"></i> Basic Real Estate Skills</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                               <p><i class="fa fa-check"></i> Time Management</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                               <p><i class="fa fa-check"></i> Basic Computer Skills</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-3">
                    <h3 class="heading-3">Personal Information</h3>
                    <div class="container">
                        <div class="row">
                            <form action="#" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Street Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="State/Province/Region">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Postal/Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Questions or Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="send-btn">
                                            <button type="submit" class="btn btn-4">Send Message</button>
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
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection