<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phoenix World Events</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <meta content="telephone=no" name="format-detection"/>
        <meta name="HandheldFriendly" content="true"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/master.css')}}"/>
        <!-- SWITCHER-->
        <link href="{{ URL::asset('assets/plugins/switcher/css/switcher.css')}}" rel="stylesheet" id="switcher-css"/>
        <link href="{{ URL::asset('assets/plugins/switcher/css/color1.css')}}" rel="alternate stylesheet" title="color1"/>
        <link href="{{ URL::asset('assets/plugins/switcher/css/color2.css')}}" rel="alternate stylesheet" title="color2"/>
        <link href="{{ URL::asset('assets/plugins/switcher/css/color3.css')}}" rel="alternate stylesheet" title="color3"/>
        <link href="{{ URL::asset('assets/plugins/switcher/css/color4.css')}}" rel="alternate stylesheet" title="color4"/>
        <link href="{{ URL::asset('assets/plugins/switcher/css/color5.css')}}" rel="alternate stylesheet" title="color5"/>
    </head>
    <body>
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
        <div data-header="sticky" data-header-top="200" data-canvas="container" class="l-theme animated-css">
            {{-- <div class="switcher-wrapper">
                <div class="demo_changer">
                    <div class="demo-icon text-primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
                    <div class="form_holder">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1" style="background-color:#fe3e01;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color2" style="background-color:#FFAC3A;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color3" style="background-color:#28af0f;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color4" style="background-color:#e425e9;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color5" style="background-color:#0c02bd;" class="styleswitch"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="header-search open-search">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <div class="navbar-search">
                                <form class="search-global">
                                    <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                                    <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                                    <div class="search-global__note">Begin typing your search above and press return to search.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
            </div>

            <div data-off-canvas="mobile-slidebar left overlay">
                <ul class="nav navbar-nav">
                    <li><a href="/" >Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="/">Works</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="blog-main.html">News</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="wrap-fixed-menu" id="fixedMenu">
                <nav class="fullscreen-center-menu">
                    <div class="menu-main-menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="/" >Home</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="/">Works</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="blog-main.html">News</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
            </div>

            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')

        </div>

        <script src="{{ URL::asset('assets/libs/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-migrate-1.2.1.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/custom.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/switcher/js/dmss.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bxslider/vendor/jquery.easing.1.3.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bxslider/vendor/jquery.fitvids.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bxslider/jquery.bxslider.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/headers/slidebar.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/headers/header.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jqBootstrapValidation.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/contact_me.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/stellar/jquery.stellar.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/isotope/imagesLoaded.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/rendro-easy-pie-chart/waypoints.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/scrollreveal/scrollreveal.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/slider-pro/jquery.sliderPro.min.js')}}"></script>
    </body>
</html>
