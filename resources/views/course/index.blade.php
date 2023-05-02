@extends('layouts.app')
@section('content')
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
                                        <img class="img-fullwidth" src="{{$course->photo }}" alt="" style="width: 100%; height: 300px; background-size: center; object-fit: cover; ">
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
                                                <li class="list-inline-item">Capacity <br>{{ $course->capacity ?? '' }} </li>
                                                <li class="list-inline-item">Duration <br>{{ $course->duration ?? '' }} </li>
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
@endsection
