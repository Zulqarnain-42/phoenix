<header class="header header-boxed-width header-background-trans header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
    <div class="top-bar">
        <div class="container container-boxed-width">
            <div class="container">
                <div class="header-topbarbox-1">
                    <ul class="top-bar-contact">
                        <li class="top-bar-contact__item">
                            <i class="icon icon-call-in"></i> (+01) 123 456 7899
                        </li>
                        <li class="top-bar-contact__item">
                            <i class="icon icon-envelope-open"></i> Contact [at] Phoenix Events.com
                        </li>
                        <li class="top-bar-contact__item">
                            <i class="icon icon-clock"></i> Mon – Fri  9.00 am – 6.00 pm
                        </li>
                    </ul>
                </div>
                <div class="header-topbarbox-2">
                    <ul class="social-net list-inline">
                        <li class="social-net__item">
                            <a href="twitter.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="facebook.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="plus.google.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="linkedin.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-boxed-width">
        <nav id="nav" class="navbar">
            <div class="container">
                <div class="header-navibox-1">
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button">
                        <i class="toggle-menu-button-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </i>
                    </button>
                    <a href="/" class="navbar-brand scroll">
                        <img src="{{URL::asset('assets/logo/logo.png')}}" alt="logo" class="normal-logo" style="width: 100px;"/>
                        <img src="{{URL::asset('assets/logo/logo.png')}}" alt="logo" class="scroll-logo hidden-xs" style="width: 100px;"/>
                    </a>
                </div>
                <div class="header-navibox-3">
                    <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                        <li>
                            <button class="js-toggle-screen toggle-menu-button">
                                <i class="toggle-menu-button-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </i>
                            </button>
                        </li>
                        <li>
                            <a href="#" class="btn_header_search">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-navibox-2">
                    <ul class="yamm main-menu nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">News<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                            <li><a href="blog-main.html" >Blog main</a></li>
                            <li><a href="blog-post.html" >Blog post</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                            <li><a href="404.html" >Page 404</a></li>
                            <li><a href="headers.html" >Headers</a></li>
                            <li><a href="typography.html" >Typography</a></li>
                                <li><a href="{{route('privacy')}}" >Privacy policy</a></li>
                                <li><a href="{{route('terms')}}" >Terms of use</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
