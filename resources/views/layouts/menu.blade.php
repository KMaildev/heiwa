<header id="header" class="header header-layout-type-header-3rows header-nav-left">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone">
                            <i class="fa fa-phone font-icon sm-display-block"></i>
                            Tel: +959 445652455
                        </li>

                        <li class="contact-email">
                            < i class="fa fa-envelope font-icon sm-display-block"></i>
                                info@heiwamm.com
                        </li>

                        <li class="contact-address">
                            <i class="fa fa-map font-icon sm-display-block"></i>
                            North Dagon
                            Tsp, Yangon
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="element pt-0 pt-lg-10 pb-0">
                        <a href="" class="btn btn-theme-colored2 btn-sm ajaxload-popup">
                            Make an Appointment
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-auto align-self-center header-mid-left text-center text-xl-start">
                    <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                        <img class="logo-default logo-1x" src="{{ asset('assets/images/logo-wide.png') }}"
                            alt="Logo">
                        <img class="logo-default logo-2x retina" src="{{ asset('assets/images/logo-wide%402x.png') }}"
                            alt="Logo">
                    </a>
                </div>

                <div class="col-xl-auto align-self-center ms-xl-auto header-mid-right text-center text-xl-end">
                    <div class="header-mid-column3-container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="tel:(123)456-78-90">
                                            <i class="flaticon-contact-044-call-1 font-icon  sm-display-block"></i>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <h5 class="title">Call us at</h5>
                                        <div class="subtitle">
                                            <a href="tel:(123)456-78-90">(+959) 445652455</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="mailto:info@example.com">
                                            <i class="flaticon-contact-043-email-1 font-icon  sm-display-block"></i>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <h5 class="title">Email us</h5>
                                        <div class="subtitle">
                                            <a href="mailto:info@example.com">info@heiwamm.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="#">
                                            <i class="flaticon-contact-025-world font-icon  sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title">Envato HQ</h5>
                                        <div class="subtitle">North Dagon Tsp, Yangon.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="fade"
                                data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">

                                    <li class="active menu-item">
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">About</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="page-preloader.html">Our Company</a>
                                            </li>
                                            <li>
                                                <a href="page-preloader.html">Vision, Mission, Valuey</a>
                                            </li>
                                            <li>
                                                <a href="page-preloader.html">Company Overview</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('team.index') }}">Our Teams</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('course.index') }}">
                                            Courses & Time Schedules
                                        </a>
                                    </li>


                                    <li class="menu-item">
                                        <a href="#">
                                            Teaching Method
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('activities.index') }}">
                                            Events & Activities
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div
                            class="col-sm-auto ms-auto align-self-center element text-center text-md-start d-none d-xl-block border-left-3px">
                            <ul class="styled-icons icon-gray icon-theme-colored1 icon-md icon-circled clearfix pl-30">
                                <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row d-block d-xl-none">
                    <div class="col-12">
                        <nav id="top-primary-nav-clone"
                            class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                            data-effect="slide" data-animation="none" data-align="right">
                            <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
