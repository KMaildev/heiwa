@extends('layouts.app')
@section('content')
    <div class="main-content-area">
        <!-- Section: About Us -->
        <section class="z-index-1">
            <div class="container pt--0 pt-lg-120 pb-70 mt-lg--0" data-tm-margin-top="-115px">
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="icon-box bg-theme-colored2 text-center p-40 mb-md-50">
                            <a class="icon icon-lg icon-top bg-theme-colored1 icon-rounded icon-border-effect effect-rounded"
                                href="#">
                                <i class="fas fa-book text-white"></i>
                            </a>
                            <h4 class="icon-box-title mt-50 text-white">
                                @if (session('key') == 'jp')
                                    ビジョン
                                @else
                                    Our Vision
                                @endif
                            </h4>
                            <p class="text-white">
                                @if (session('key') == 'jp')
                                    生徒の悩みを無くす
                                    生徒の成長を磨く
                                    生徒の未来を創る.
                                @else
                                    Eliminate student worries nurture student growth create the future of students.
                                @endif
                                <br><br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="icon-box bg-theme-colored1 text-center p-40 mb-md-50">
                            <a class="icon icon-lg icon-top bg-theme-colored4 icon-rounded icon-border-effect effect-rounded"
                                href="#">
                                <i class="fas fa-book text-white"></i>
                            </a>
                            <h4 class="icon-box-title mt-50 text-white">
                                @if (session('key') == 'jp')
                                    我々の使命
                                @else
                                    Our Mission
                                @endif
                            </h4>
                            <p class="text-white">
                                @if (session('key') == 'jp')
                                    優れた企業と優れた従業員を結び付け、クライアントと提携することで両方の機会を開拓する
                                @else
                                    To connect great companies with great employees and opening up opportunities for both by
                                    partnering up with our clients
                                @endif
                                <br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="icon-box bg-theme-colored3 text-center p-40 mb-md-50">
                            <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded"
                                href="#">
                                <i class="fas fa-book text-white"></i>
                            </a>
                            <h4 class="icon-box-title mt-50 text-white">
                                @if (session('key') == 'jp')
                                    私たちの価値
                                @else
                                    Our Value
                                @endif
                            </h4>
                            <p class="text-white">
                                @if (session('key') == 'jp')
                                    私たちは提供できるものだけを約束し、すべての約束を果たします。私たちのビジネスは、正直さと誠実さを基盤に構築されています。
                                @else
                                    We promise only what we can deliver, and we deliver on every promise. Our business is
                                    built on a foundation of honesty and integrity.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt--0 pb--0 pb-lg-120">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="about-box-contents">
                                <div class="destails">
                                    <h5 class="text-theme-colored3">Welcome To</h5>
                                    <h3 class="text-theme-colored2">
                                        HEIWA JAPANESE LANGUAGE
                                        TRAINING CENTRE
                                    </h3>
                                    @if (session('key') == 'jp')
                                        <p data-tm-font-weight="600" style="text-align: justify">
                                            HEIWA日本語教育センターはU WAI LIN MAUNG より2019年に設立されました。 2021 年 11 月 15
                                            日に設立されました。センターを確立する目的は、現在、日本で東南アジアを中心に、多くの外国人技能実習生が色々な職場で活躍しています。しかし、技能実習生に関する問題点を様々な職種の企業様から
                                            良くお聞きしました。職場で日本語が分からない、日本のマナーを守っていない等企業様の悩みがございました。そして、独自の教育プログラムを設けており、出国前の5ヶ月間で週5日・1日7時間・総学習時間700時間の日本語教育を実施します。弊社は技能実習生に、どのような職種にも対応できる一般的な日本のマナーと語学をトレーニングしていきます。そこには、メンタルのサポートも必須だと思っております。
                                        </p>
                                    @else
                                        <p data-tm-font-weight="600" style="text-align: justify">
                                            HEIWA Japanese Language Education Center was established in 2019 by U WAI LIN
                                            MAUNG.
                                            Established on November 15, 2021. The purpose of establishing the center is that
                                            many foreign technical intern trainees are currently active in various
                                            workplaces in
                                            Japan, mainly in Southeast Asia. However, the problems related to technical
                                            intern
                                            trainees from companies in various occupations Good to hear. There were concerns
                                            from companies such as not understanding Japanese at work and not following
                                            Japanese
                                            etiquette.
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <a class="btn btn-xs btn-theme-colored2 btn-outline-light mb-30" href="{{ route('about') }}">
                                @if (session('key') == 'jp')
                                    続きを読む
                                @else
                                    Read More
                                @endif
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-4 d-none d-xl-block">
                            <div class="text-center mb-30">
                                <div class="thumb">
                                    <img src="{{ asset('data/about1.png') }}" alt=""
                                        style="width: 100%; height: 600px;; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="p-30 bg-theme-colored2 mb-30">
                                <form id="contact_form" name="contact_form" class=""
                                    action="{{ route('contact.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="text-white">
                                                Request
                                                <span class="text-theme-colored4">
                                                    Information
                                                </span>
                                            </h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <input name="name" class="form-control" type="text"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="email" class="form-control required email" type="email"
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="phone" class="form-control" type="text"
                                                    placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <input name="subject" class="form-control" type="text"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <textarea name="message" rows="3" class="form-control textarea required" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="mb-3 mb-10 d-grid">
                                                <button type="submit"
                                                    class="btn btn-xs btn-theme-colored4 btn-outline-light"
                                                    data-loading-text="Please wait..."> Send Message </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="z-index-1">
            <div class="container pt--0 pb--0 pb-lg-120">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-box-contents">
                                <div class="destails">
                                    @if (session('key') == 'jp')
                                        <p data-tm-font-weight="600" style="text-align: justify">
                                            美しい日本語に興味がある方、日本が大好きで豊かな文化について知りたい方！
                                            へいわはじめまして！
                                        </p>
                                    @else
                                        <p data-tm-font-weight="600" style="text-align: justify">
                                            If you have an interest in the beautiful Japanese language, or if you just love
                                            Japan and want to know about it’s rich culture!
                                            <br>
                                            Heiwa welcome you!
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.1s">
                                    <div class="tm-sc-service service-item-current-style2">
                                        <div class="service-thumb">
                                            <img class="img-fullwidth" src="{{ asset('assets/data/a1.png') }}"
                                                alt="1.jpg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.1s">
                                    <div class="tm-sc-service service-item-current-style2">
                                        <div class="service-thumb">
                                            <img class="img-fullwidth" src="{{ asset('assets/data/a5.png') }}"
                                                alt="1.jpg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.1s">
                                    <div class="tm-sc-service service-item-current-style2">
                                        <div class="service-thumb">
                                            <img class="img-fullwidth" src="{{ asset('assets/data/a7.png') }}"
                                                alt="1.jpg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.1s">
                                    <div class="tm-sc-service service-item-current-style2">
                                        <div class="service-thumb">
                                            <img class="img-fullwidth" src="{{ asset('assets/data/a8.png') }}"
                                                alt="1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 d-none d-xl-block">
                                    <div class="text-center mb-30">
                                        <div class="thumb">
                                            <img src="{{ asset('data/c1.jpg') }}" alt=""
                                                style="width: 100%; height: 430px; background-size: center; object-fit: cover;">
                                            <h6>
                                                HEIWA MYANMAR COMPANY REGISTER
                                                （ミャンマー政府承認登記簿謄本）
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 d-none d-xl-block">
                                    <div class="text-center mb-30">
                                        <div class="thumb">
                                            <img src="{{ asset('data/c2.png') }}" alt=""
                                                style="width: 100%; height: 430px; background-size: center; object-fit: cover;">
                                            <h6>
                                                CENTRE LICENSE
                                                （ミャンマー政府承認日本語教育センターライセンス）
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: divider -->
        <section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored2-7"
            data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
            <div class="container pt-50 pb-50">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="funfact-item text-center mb-md-30">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-12">
                                        <h5 class="title">
                                            ဂျပန်နိုင်ငံလုပ်ငန်းခွင်တွင်းသို့ရောက်ရှိနေသောမြန်မာလူငယ်များ
                                        </h5>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <a href="{{ route('activities.index') }}"
                                            class="btn btn-xs btn-flat btn-theme-colored1 btn-outline-light">
                                            @if (session('key') == 'jp')
                                                イベントとアクティビティ
                                            @else
                                                Events & Activities
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- Section: Course -->
        <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
            <div class="container pb-50">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h2 class="title">Our <span class="text-theme-colored3">Courses</span></h2>
                                    <p>
                                        Heiwa Language School is the best place to achieve the highest level of quality for
                                        humans by not just only studying , you will get good social skill, team work skill ,
                                        power of cultural understanding and experiences.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">

                        @foreach ($courses as $course)
                            <div class="col-md-6 col-lg-6">
                                <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight"
                                    data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="col-xl-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{ $course->photo }}" alt=""
                                                style="width: 100%; height: 300px; background-size: center; object-fit: cover; ">
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="course-details clearfix pt-15 pb-20">
                                            <h4 class="mt-0 mb-0">
                                                {{ $course->course_title ?? '' }}
                                            </h4>
                                            <h6 class="mb-0">
                                                <span class="text-theme-colored1">
                                                    Class Time:
                                                </span>
                                                {{ $course->course_time ?? '' }}
                                            </h6>
                                            <p class="mb-15">
                                                {{ $course->starting_date ?? '' }}
                                            </p>
                                            <div class="course-details2-bottom">
                                                <ul>
                                                    <li class="list-inline-item">Capacity
                                                        <br>{{ $course->capacity ?? '' }}
                                                    </li>
                                                    <li class="list-inline-item">Duration
                                                        <br>{{ $course->duration ?? '' }}
                                                    </li>
                                                    <li class="list-inline-item">Days<br> {{ $course->days ?? '' }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Gallery -->
        <section data-tm-bg-img="">
            <div class="container pb-50">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h2 class="title">Our
                                        <span class="text-theme-colored3">
                                            Activities & Gallery
                                        </span>
                                    </h2>
                                    <p>
                                        WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-conent">
                    <div class="row">
                        @foreach ($activities as $activity)
                            <div class="col-md-12">
                                <h6>
                                    {{ $activity->title_eng ?? '' }}
                                </h6>
                            </div>
                            @php
                                $images = explode(',', $activity->images);
                            @endphp
                            @foreach ($images as $image)
                                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="gallery-block">
                                        <div class="gallery-thumb">
                                            <img alt="gallery" src="{{ $image }}" class="img-fullwidth">
                                        </div>
                                        <div class="overlay-shade green"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="gallery-icon">
                                                    <a href="{{ $image }}" data-lightbox-gallery="gallery"><i
                                                            class="pe-7s-science"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
            <div class="container pb-50">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h2 class="title">Our <span class="text-theme-colored3">Team</span></h2>
                                    @if (session('key') == 'jp')
                                        <p>
                                            日本語センターのチームメンバーは協力して、学生をサポートし、魅力的な学習環境を作り、学生が言語学習の目標を達成できるように支援しています。
                                        </p>
                                    @else
                                        <p>
                                            Our team members at a Japanese Language Center work together to create a
                                            supportive and engaging learning environment for students, and to help them
                                            achieve their language learning goals.
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($teams as $team)
                            <div class="col-sm-6 col-xl-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="team-member">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" src="{{ $team->photo ?? '' }}" alt=""
                                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="team-details text-center bg-theme-colored2">
                                        <div class="member-biography">
                                            <h3 class="mt-0 text-white mb-0">
                                                {{ $team->name ?? '' }}
                                            </h3>
                                            <p class="mb-0 text-white">
                                                {{ $team->position ?? '' }}
                                            </p>
                                        </div>
                                        <ul class="styled-icons icon-dark icon-md icon-theme-colored4 icon-circled pt-3">
                                            <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
