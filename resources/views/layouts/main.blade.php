<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description')">
        {{-- <meta property="og:title" content="จำหน่ายสินค้าไทย อาหารไทย ไปทั่วโลก"/>
        <meta property="og:description" content="✅ ราคารวมภาษีทุกชนิด , 🚚 ค่าขนส่งถูกมาก" />
        <meta property="og:url" content="https://www.delifresh.co.th" />
        <meta property="og:image" content="https://www.delifresh.co.th/img/2020.jpg"/>
        <meta property="fb:app_id" content="652109485216043"/> --}}

        <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}"/>

        <title>@yield('title')</title>

        <!-- Font Awesome, Googleapis -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
        <!-- Custom Styles -->
        <link href="{{ asset('mdb/css/style.css') }}" rel="stylesheet">

        @yield('page-style')
        
    </head>
    <body>

        @include('layouts/nav')

        <main class="mt-5 pt-5 mb-5 pb-3">
        @yield('content')
        </main>

        @include('layouts/footer')

        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
        <script type="text/javascript">
            // Animations initialization
            // new WOW().init();
            $('a.nav-link.dropdown-toggle').on('click', function (event) {
                // $(".show").not($(this)).removeClass('show');
                $('a.nav-link.dropdown-toggle').each(function(index, item){
                    if(!$(item).is(event.target)) {
                        $(item).parent().removeClass('show');
                        $(item).next().removeClass('show');
                    }
                })
                $(this).parent().toggleClass('show');
                $(this).next().toggleClass('show');
            });
            $('body').on('click', function (e) {
                if (!$('a.nav-link.dropdown-toggle').is(e.target) 
                    && $('a.nav-link.dropdown-toggle').has(e.target).length === 0 
                    && $('.show').has(e.target).length === 0
                ) {
                    $('a.nav-link.dropdown-toggle').parent().removeClass('show');
                    $('a.nav-link.dropdown-toggle').next().removeClass('show');
                }
            });
            const showLoading = function () {
                $('#spinner-div').remove();
                var elem = '<div id="spinner-div" class="d-flex justify-content-center align-items-center" style="position:fixed; left:0; top:0; width: 100%; height: 100%; background:white; z-index:100; opacity:0.8"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
            $(document.body).append(elem);
            };

            const hideLoading = function () {
                $('#spinner-div').remove();
            };

            const errorLoading = function (msg) {
                var title = msg || 'An error occured!';
                Swal.close();
                Swal.fire({
                    title: title,
                    icon: 'error',
                    //showCloseButton: true,
                    // timer: 10000,
                });
            };
        </script>
        @yield('page-script')

    </body>
</html>
