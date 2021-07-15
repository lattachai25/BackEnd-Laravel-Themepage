<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/typography.css') }}">
      <!-- Style -->
      <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
      <!-- Responsive -->
      <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />

</head>
<body>

       @include('.component.webpage.nav')
       @yield('content')
       @include('.component.webpage.footer')


             <!-- back-to-top -->
      <div id="back-to-top">
         <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
      </div>
      <!-- back-to-top End -->

</bpdy>

      <!-- jQuery, Popper JS -->
      <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
      <script src="{{ URL::asset('js/popper.min.js') }}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
      <!-- Slick JS -->
      <script src="{{ URL::asset('js/slick.min.js') }}"></script>
      <!-- owl carousel Js -->
      <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
      <!-- select2 Js -->
      <script src="{{ URL::asset('js/select2.min.js') }}"></script>
      <!-- Magnific Popup-->
      <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Slick Animation-->
      <script src="{{ URL::asset('js/slick-animation.min.js') }}"></script>
      <!-- Custom JS-->
      <script src="{{ URL::asset('js/custom.js') }}"></script>







</html>