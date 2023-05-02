@extends('layouts.app')
@section('content')
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
@endsection
