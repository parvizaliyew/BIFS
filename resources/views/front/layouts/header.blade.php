<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/theme.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/theme-elements.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/theme-blog.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/theme-shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/demos/demo-construction.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('front') }}/css/skins/skin-construction.css">
    
    <link rel="stylesheet" href="{{ asset('front') }}/css/mycss.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    @stack('css')

    <!-- Head Libs -->
    <script src="{{ asset('front') }}/vendor/modernizr/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('front') }}/js/myjs.js"></script>

</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

    <div class="body">
        <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-light"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 1, 'stickySetTop': '1'}">
            <div class="header-body border-0">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo custom-header-logo">
                                    <img class="logo" alt="Porto" width="123" height="48"
                                        src="{{ asset('front') }}/img/BIFS-logo-Header.png">
                                    <a href="{{ route('index.'.app()->getLocale()) }}">
                                        <img class="logo-sticky" alt="Porto" width="123" height="48"
                                            src="{{ asset('front') }}/img/BIFS-logo-Footer.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-3 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse px-3-5">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link {{ Route::is('index.'.app()->getLocale()) ? 'active' : ' ' }}"
                                                        href="{{ route('index.' . app()->getLocale()) }}">
                                                        {{ __('lang.esas_sehife') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Route::is('about.'.app()->getLocale()) ? 'active' : ' ' }}" href="{{ route('about.'.app()->getLocale()) }}">
                                                        {{ __('lang.haqqimizda') }}
                                                    </a>
                                                </li>
                                                <li >
                                                    <a class="nav-link {{ Route::is('product.'.app()->getLocale()) ? 'active' : ' ' }}"
                                                        href="{{ route('product.' . app()->getLocale()) }}">
                                                        {{ __('lang.mehsullar') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Route::is('project.'.app()->getLocale()) ? 'active' : ' ' }}" href="{{ route('project.'.app()->getLocale()) }}">
                                                        {{ __('lang.layiheler') }}
                                                    </a>
                                                </li>
                                              
                                                <li>
                                                    <a class="nav-link {{ Route::is('contact.'.app()->getLocale()) ? 'active' : ' ' }}"
                                                        href="{{ route('contact.' . app()->getLocale()) }}">
                                                        {{ __('lang.elaqe') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div
                                    class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border d-none d-sm-flex ms-3 order-1 order-lg-2">
                                    <ul
                                        class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-medium ms-0">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/"
                                                target="_blank" title="Facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/"
                                                target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/"
                                                target="_blank" title="Linkedin"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div
                                    class="header-nav-features header-nav-features-no-border header-nav-features-sm-show-border ms-3 ps-4 order-2 order-lg-3">
                                    {{--										<div class="header-nav-feature header-nav-features-search d-inline-flex"> --}}
                                    {{--											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"> --}}
                                    {{--												<i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i> --}}
                                    {{--											</a> --}}
                                    {{--											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerSearchDropdown"> --}}
                                    {{--												<form role="search" action="page-search-results.html" method="get"> --}}
                                    {{--													<div class="simple-search input-group"> --}}
                                    {{--														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search..."> --}}
                                    {{--														<button class="btn" type="submit"> --}}
                                    {{--															<i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i> --}}
                                    {{--														</button> --}}
                                    {{--													</div> --}}
                                    {{--												</form> --}}
                                    {{--											</div> --}}
                                    {{--										</div> --}}
                                    @yield('lang')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
