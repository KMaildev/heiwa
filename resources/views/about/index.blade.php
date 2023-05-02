@extends('layouts.app')
@section('content')
    <section class="z-index-1 py-5">
        <div class="container pt--0 pb--0 pb-lg-120">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-xl-8">
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
                                        企業様及び技能実習生間の以上の問題点を解決する為、技能実習生の成長、企業様の事業成長を目指し、HEIWA
                                        MYANMAR国際人材育成センターを開始致しました。弊社は技能実習生だけではなく、留学生及びエンジニア等へ入国前の日本語教育も教えております。
                                    </p>
                                @else
                                    <p data-tm-font-weight="600" style="text-align: justify">
                                        HEIWA Japanese Language Education Center was established in 2019 by U WAI LIN MAUNG.
                                        Established on November 15, 2021. The purpose of establishing the center is that
                                        many foreign technical intern trainees are currently active in various workplaces in
                                        Japan, mainly in Southeast Asia. However, the problems related to technical intern
                                        trainees from companies in various occupations Good to hear. There were concerns
                                        from companies such as not understanding Japanese at work and not following Japanese
                                        etiquette.
                                        In addition, we have established our own educational program, and we will provide
                                        Japanese language education for 5 days a week, 7 hours a day, and a total of 700
                                        hours of study time for 5 months before departure. We will train technical intern
                                        trainees in general Japanese manners and language that can be applied to any
                                        occupation. I think that mental support is also essential there. In order to solve
                                        the above problems between companies and technical intern trainees, we have started
                                        the HEIWA MYANMAR International Human Resource Development Center, aiming for the
                                        growth of technical intern trainees and the business growth of companies. We teach
                                        not only technical intern trainees, but also foreign students and engineers, etc.
                                        Japanese language education before entering Japan.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4">
                        <img src="{{ asset('data/about.png') }}" alt=""
                            style="width: 100%; height: 510px; background-size: center; object-fit: cover; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    </div>
                </div>
            </div>

            <br><br><br>
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
    </section>
@endsection
