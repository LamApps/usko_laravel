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


        <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.css') }}">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

        <link href="{{ asset('mdb/css/addons-pro/steppers.min.css') }}?{{time()}}" rel="stylesheet">
        <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ asset('mdb/css/style.css') }}" rel="stylesheet">

        @yield('page-style')
        
    </head>
    <body>

        <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/addons-pro/steppers.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/tracking-number-validation.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        @yield('content')


        <script>
            const showLoading = function (msg = 'Loading') {
              Swal.fire({
                  title: msg,
                  allowEscapeKey: false,
                  allowOutsideClick: false,
                  didOpen: () => {
                      Swal.showLoading();
                  }
              })
          };

          const hideLoading = function () {
              Swal.close();
              Swal.fire({
                  title: 'Finished!',
                  icon: 'success',
                  timer: 1000,
                  showConfirmButton: false
              });
          };

          const errorLoading = function (msg) {
              Swal.close();
              Swal.fire({
                  title: msg,
                  icon: 'error',
                  //showCloseButton: true,
                  // timer: 10000,
                  showConfirmButton: false
              });
          };
        </script>

        @yield('page-script')

    </body>
</html>
