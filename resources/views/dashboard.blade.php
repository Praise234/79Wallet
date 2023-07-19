<!DOCTYPE HTML>
<html lang="en">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title> 79 Wallet  - Pay with Ease</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"></head>





<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<!-- Page Wrapper-->
<div id="page">

    <!-- Footer Bar -->

     @include('footer') 
    <!-- Page Content - Only Page Elements Here-->
    <div class="page-content footer-clear">

        <!-- Page Title-->

      @include('header')
    

        <!-- Main Card Slider-->
        <div class="splide single-slider slider-no-dots slider-no-arrows slider-visible" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                   
                   
                    <div class="splide__slide">
                        <div class="card card-style m-0 bg-7 shadow-card shadow-card-m" style="height:200px">
                            <div class="card-top p-3">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                            </div>
                            <div class="card-center">
                                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                    <h1 class="font-13 my-n1">
                                        <a class="color-theme" data-bs-toggle="collapse" href="#balance2" aria-controls="balance2">Click for Balance</a>
                                    </h1>
                                    <div class="collapse" id="balance2"><h2 class="color-theme font-26">#15,100</h2></div>
                                </div>
                            </div>
                            <strong class="card-top no-click font-12 p-3 color-white font-monospace"> {{$user->first_name}} {{$user->last_name}}
                        </strong>
                            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong>
                            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong>
                            <div class="card-overlay bg-black opacity-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="content py-2">
            <div class="d-flex text-center">
                <div class="me-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-green-dark bi bi-arrow-up-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Transfer</h6>
                </div>
                <div class="m-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-red-dark bi bi-arrow-down-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Request</h6>
                </div>
                <div data-bs-toggle="offcanvas" data-bs-target="#menu-exchange" class="m-auto">
                    <a href="#" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-blue-dark bi bi-arrow-repeat"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Exchange</h6>
                </div>
                <div class="ms-auto">
                    <a href="#"      data-bs-toggle="offcanvas"    data-bs-target="#airtime"  class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-brown-dark bi bi-phone"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Airtime</h6>
                </div>

                <div class="ms-auto">
                    <a href="page-payment-bill.html" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-brown-dark bi bi-filter-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Data</h6>
                </div>
            </div>
        </div>

        <!-- Recent Activity Title-->
        <div class="content my-0 mt-n2 px-1">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Recent Activity</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="{{ route('all-transactions')}}" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div>

        <!-- Recent Activity Cards-->
        <div class="card card-style">
            <div class="content">
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-s"><i class="bi bi-google color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Google Ads</h5>
                        <p class="mb-0 font-11 opacity-50">14th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$150.55</h4>
                        <p class="mb-0 font-11">Bill Payment</p>
                    </div>
                </a>
                <div class="divider my-2 opacity-50"></div>
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-s"><i class="bi bi-caret-up-fill color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Bitcoin</h5>
                        <p class="mb-0 font-11 opacity-50">14th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-blue-dark">+0.315%</h4>
                        <p class="mb-0 font-11">Stock Update</p>
                    </div>
                </a>
                <div class="divider my-2 opacity-50"></div>
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-yellow shadow-bg shadow-bg-s"><i class="bi bi-pie-chart-fill color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Dividends</h5>
                        <p class="mb-0 font-11 opacity-50">13th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-green-dark">$950.00</h4>
                        <p class="mb-0 font-11">Wire Transfer</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Account Activity Title-->
        {{-- <div class="content my-0 mt-n2 px-1">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Account Activity</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="page-activity.html" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div> --}}

        <!--Account Activity Notification-->
        {{-- <div class="card card-style gradient-green shadow-bg shadow-bg-s">
            <div class="content">
                <a href="page-activity.html" class="d-flex">
                    <div class="align-self-center">
                        <h1 class="mb-0 font-40"><i class="bi bi-check-circle color-white pe-3"></i></h1>
                    </div>
                    <div class="align-self-center">
                        <h5 class="color-white font-700 mb-0 mt-0 pt-1">
                            Withdrawal of funds to your <br> Account has been successful.
                        </h5>
                    </div>
                    <div class="align-self-center ms-auto">
                        <i class="bi bi-arrow-right-short color-white d-block pt-1 font-20 opacity-50"></i>
                    </div>
                </a>
            </div>
        </div> --}}

        <!-- Send Money Title-->
        {{-- <div class="content mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Send Money</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="page-payment-transfer.html" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div> --}}

        <!-- Send Money Slider-->
        {{-- <div class="splide quad-slider slider-no-dots slider-no-arrows slider-visible text-center" id="double-slider-2">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0  bg-1 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Johnatan</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0  bg-6 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Alexandra</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0 bg-3 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Juanita</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0 bg-9 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Danielle</h6>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <!-- Main Sidebar Menu -->
    <div id="menu-sidebar" data-menu-active="nav-welcome" data-menu-load="menu-sidebar.html"
        class="offcanvas offcanvas-start offcanvas-detached rounded-m">
    </div>

	<!-- Highlights Menu -->
	<div id="menu-highlights"
		data-menu-load="menu-highlights.html"
		class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
	</div>

	<!-- Notifications Bell -->
	<div id="menu-notifications" data-menu-load="{{route('menu-notifications')}}"
		class="offcanvas offcanvas-top offcanvas-detached rounded-m">
	</div>

    <!-- Card Menu More -->
    <div id="menu-card-more" data-menu-load="menu-card-settings.html"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    </div>

    <!-- Transfer Button Menu -->
    <div id="menu-transfer" data-menu-load="{{route('menu-transfer')}}"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    </div>

    <!-- Transfer Friends Menu -->
    <div id="menu-friends-transfer" data-menu-load="{{route('menu-friends-transfer')}}"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    </div>

    <!-- Request Button Menu -->
    <div id="menu-request" data-menu-load="{{route('menu-request')}}"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    </div>

   <!-- Airtime Button Menu -->
   <div id="airtime" data-menu-load="{{route('airtime')}}"
   class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
</div>


    <!-- Exchange Button Menu -->
    <div id="menu-exchange" data-menu-load="menu-exchange.html"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    </div>

	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
		   <div class="content">
		   <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-m mx-auto my-4">
			  <h1 class="text-center">Install PayApp</h1>
			  <p class="boxed-text-xl">
				  Install PayApp on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
			  </p>
			   <a href="#" class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2" data-bs-dismiss="offcanvas">Maybe Later</a>
		   </div>
	   </div>

	   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
		   <div class="content">
			   <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-m mx-auto my-4">
			   <h1 class="text-center">Install PayApp</h1>
			   <p class="boxed-text-l">
				   Install PayApp to your Home Screen to enjoy a unique and native experience.
			   </p>
			   <a href="#" class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add to Home Screen</a><br>
			   <a href="#" data-bs-dismiss="offcanvas" class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe later</a>
		   </div>
	   </div>

</div>
<!-- End of Page ID-->

<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/custom.js"></script>
</body>