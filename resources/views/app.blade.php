<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Include any common CSS or JavaScript files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
 
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"></head>
</head>
<body  class="theme-light">

    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
    <div id="page">
        <div class="page-content footer-clear">
   
    @section('header')

<header>
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center me-auto">
                <p class="color-highlight header-date"></p>
                <h1>Welcome {{ $user->first_name}}</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#"
                data-bs-toggle="offcanvas"
                data-bs-target="#menu-notifications"
                class="icon gradient-blue color-white shadow-bg shadow-bg-xs rounded-m">
                    <i class="bi bi-bell-fill font-17"></i>
                    <em class="badge bg-red-dark color-white scale-box">3</em>
                </a>
                <a href="#"
                data-bs-toggle="dropdown"
                class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                    <img src="images/pictures/default.jpg" width="45" class="rounded-m" alt="img">
                </a>
                <!-- Page Title Dropdown Menu-->
                <div class="dropdown-menu">
                    <div class="card card-style shadow-m mt-1 me-1">
                        <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                            <a href="{{route('cards')}}" class="list-group-item">
                                <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                                <strong class="font-13">Wallet</strong>
                            </a>
                            <a href="page-activity.html" class="list-group-item">
                                <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                                <strong class="font-13">Activity</strong>
                            </a>
                            <a href="{{ route('profile')}}" class="list-group-item">
                                <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                                <strong class="font-13">Account</strong>
                            </a>
                            <a href="{{ route('logout') }}" class="list-group-item">
                                <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                <strong class="font-13">Log Out</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>
    @show







    <div class="container">
      @yield('content')
    </div>








    @section('footer')
    <footer>
     
 <div id="footer-bar" class="footer-bar-1 footer-bar-detached">
    <a href="{{ route('cards')}}"><i class="bi bi-wallet2"></i><span>Cards</span></a>
    <a href="{{ route('all-transactions')}}"><i class="bi bi-graph-up"></i><span>Activity</span></a>
    <a href="{{ route('dashboard')}}" class="circle-nav-2"><i class="bi bi-house-fill"></i><span>Home</span></a>
    <a href="{{ route('all-transactions')}}"><i class="bi bi-receipt"></i><span>Payments</span></a>
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"><i class="bi bi-three-dots"></i><span>More</span></a>
</div>

    </footer>
@show

    </div>
    <script src="scripts/bootstrap.min.js"></script>
<script src="scripts/custom.js"></script>
</body>
</html>
