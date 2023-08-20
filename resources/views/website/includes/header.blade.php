   <!--====== PRELOADER PART START ======-->
    
   <div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">
   
    <div class="header-top d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('website/images/all-icon/call.png') }}" alt="icon"><span>(124) 123 675 598</span></li>
                            <li><img src="{{ asset('website/images/all-icon/email.png') }}" alt="icon"><span>info@yourmail.com</span></li>
                            <li><img src="{{ asset('website/images/all-icon/map.png') }}" alt="icon"><span>127/5 Mark street, New york</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-social text-lg-right text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->
    
    <div class="navigation navigation-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('website.home')}}">
                            <img src="{{ asset('website/images/logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{ route('website.home-demo2')}}">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.home-demo2')}}">Home 01</a></li>
                                        <li><a class="active" href="{{ route('website.home')}}">Home 02</a></li>
                                        <li><a href="{{ route('website.home-demo4')}}">Home 03</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.about') }}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.courses') }}">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.courses') }}">Courses</a></li>
                                        <li><a href="{{ route('website.courses-singel')}}">Course Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.events') }}">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.events') }}">Events</a></li>
                                        <li><a href="{{ route('website.events-singel')}}">Event Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.teachers') }}">Our teachers</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.teachers') }}">teachers</a></li>
                                        <li><a href="{{ route('website.teachers-singel')}}">teacher Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.blog') }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('website.blog-singel') }}">Blog Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.shop') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.shop') }}">Shop</a></li>
                                        <li><a href="{{ route('website.shop-singel')}}">Shop Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('website.contact') }}">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('website.contact-demo2')}}">Contact Us 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                    <div class="right-icon text-right">
                        <ul>
                            <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>
<!--====== SEARCH BOX PART ENDS ======-->