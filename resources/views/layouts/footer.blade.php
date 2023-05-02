<footer id="footer" class="footer divider layer-overlay overlay-dark-8" data-tm-bg-img="images/bg/bg8.jpg">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-40">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <div class="thumb">
                            <img alt="Logo" src="{{ asset('data/logo.jpg') }}" style="width: 70%">
                        </div>
                        <ul class="mb-30">
                            <li class="contact-phone">
                                <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                                <div class="text">
                                    <a href="tel:+959 445652455,">
                                        +959 445652455
                                    </a>
                                    <a href="tel:+959 445652455,">
                                        +8190-3231-6684 ( JAPAN SENDING DEPARTMENT)
                                    </a>
                                </div>
                            </li>
                            <li class="contact-email">
                                <div class="icon">
                                    <i class="flaticon-contact-043-email-1"></i>
                                </div>
                                <div class="text">
                                    <a href="mailto:heiwa.myanmar2020@gmail.com">
                                        heiwa.myanmar2020@gmail.com
                                    </a>
                                    <a href="mailto:info@heiwamm.com">
                                        info@heiwamm.com
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    @if (session('key') == 'jp')
                                        ホーム
                                    @else
                                        Home
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('course.index') }}">
                                    @if (session('key') == 'jp')
                                        コースとタイムスケジュール
                                    @else
                                        Courses & Time Schedules
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('activities.index') }}">
                                    @if (session('key') == 'jp')
                                        イベントとアクティビティ
                                    @else
                                        Events & Activities
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    @if (session('key') == 'jp')
                                        お問い合わせ
                                    @else
                                        Contact Us
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">About Us</h4>
                        <ul>
                            <li>
                                <a href="{{ route('about') }}">Our Company</a>
                            </li>
                            <li>
                                <a href="{{ route('team.index') }}">Our Teams</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget">
                        <h4 class="widget-title">
                            Facebook
                        </h4>
                        <div class="opening-hours border-dark">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-6">
                        <div class="footer-paragraph">
                            © 2023 Heiwa Co.,Ltd. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-right">
                            KMail
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
