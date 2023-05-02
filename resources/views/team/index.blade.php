@extends('layouts.app')
@section('content')
    <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
        <div class="container pb-50">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title">Our <span class="text-theme-colored3">Teachers</span></h2>
                                <p>
                                    Start Your Japanese Adventure with Heiwa Japanese Language Centre
                                </p>
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
                                    <img  class="img-fullwidth" src="{{ $team->photo ?? '' }}" alt="" style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
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
@endsection
