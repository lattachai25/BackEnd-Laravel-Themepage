<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
   <!--datatable CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap4.min.css') }}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/typography.css') }}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">


</head>
<body>
  <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


       @include('.component.admin.nav')
       @include('.component.admin.nav_left')
       @yield('content')

</div>


   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
   <script src="{{ URL::asset('js/popper.min.js') }}"></script>
   <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ URL::asset('js/jquery.appear.js') }}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ URL::asset('js/countdown.min.js') }}"></script>
   <!-- Select2 JavaScript -->
   <script src="{{ URL::asset('js/select2.min.js') }}"></script>
   <!-- Counterup JavaScript -->
   <script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
   <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ URL::asset('js/wow.min.js') }}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ URL::asset('js/slick.min.js') }}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ URL::asset('js/smooth-scrollbar.js') }}"></script>
   <!-- apex Custom JavaScript -->
   <script src="{{ URL::asset('js/apexcharts.js') }}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ URL::asset('js/chart-custom.js') }}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ URL::asset('js/custom.js') }}"></script>

</html>