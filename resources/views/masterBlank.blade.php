<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}"/>

        {{-- <title>@yield('title')</title> --}}


        <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.css') }}">


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>

        @routes("system")

        <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>

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


    </body>
</html>
