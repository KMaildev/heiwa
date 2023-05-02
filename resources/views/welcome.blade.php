@extends('layouts.app')
@section('content')
    

<div class="main-content-area">

   

    <!-- Section: About Us -->
    <section class="z-index-1">
      <div class="container pt--0 pt-lg-120 pb-70 mt-lg--0" data-tm-margin-top="-115px">
        <div class="row">
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="icon-box bg-theme-colored2 text-center p-40 mb-md-50">
              <a class="icon icon-lg icon-top bg-theme-colored1 icon-rounded icon-border-effect effect-rounded" href="#">
                <i class="fas fa-book text-white"></i>
              </a>
              <h4 class="icon-box-title mt-50 text-white">Full Day Programs</h4>
              <p class="text-white">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet  dicta alias.</p>
              <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 btn-outline-light">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="icon-box bg-theme-colored1 text-center p-40 mb-md-50">
              <a class="icon icon-lg icon-top bg-theme-colored4 icon-rounded icon-border-effect effect-rounded" href="#">
                <i class="fas fa-book text-white"></i>
              </a>
              <h4 class="icon-box-title mt-50 text-white">Fulfill With Love</h4>
              <p class="text-white">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet  dicta alias.</p>
              <a href="#" class="btn btn-xs btn-flat btn-theme-colored4 btn-outline-light">Read More</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="icon-box bg-theme-colored3 text-center p-40 mb-md-50">
              <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded" href="#">
                <i class="fas fa-book text-white"></i>
              </a>
              <h4 class="icon-box-title mt-50 text-white">Expart Teachers</h4>
              <p class="text-white">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet  dicta alias.</p>
              <a href="#" class="btn btn-xs btn-flat btn-theme-colored2 btn-outline-light">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt--0 pb--0 pb-lg-120">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="about-box-contents">
                <div class="destails">
                  <h5 class="text-theme-colored3">Welcome To</h5>
                  <h3 class="text-theme-colored2">KidsPro Kindergarten</h3>
                  <p data-tm-font-weight="600">
                    HEIWA Japanese Language Education Center was established in 2019 by U WAI LIN MAUNG. Established on November 15, 2021. The purpose of establishing the center is that many foreign technical intern trainees are currently active in various workplaces in Japan, mainly in Southeast Asia. 
                    However, the problems related to technical intern trainees from companies in various occupationsGood to hear. 
                    

                  </p>
                </div>
                {{-- <ul class="list-unstyled mb-10">
                  <li><i class="far fa-hand-point-right text-theme-colored1"></i> botam sem bperiam waque ipna quae ab bllo</li>
                  <li><i class="far fa-hand-point-right text-theme-colored2"></i> loluptatem adcusantium soloremque</li>
                  <li><i class="far fa-hand-point-right text-theme-colored3"></i> afficia neserunt mollit anim idest kaborum</li>
                  <li><i class="far fa-hand-point-right text-theme-colored4"></i> loluptatem adcusantium soloremque</li>
                  <li><i class="far fa-hand-point-right text-theme-colored2"></i> lotam cem dperiam ebque ipsa quae ab cllo</li>
                </ul> --}}
                {{-- <img class="mb-10" src="{{asset('assets/images/signature.png')}}" alt="signature.png"><br> --}}
              </div>
              <a class="btn btn-xs btn-theme-colored2 btn-outline-light mb-30" href="#">Read More</a>
            </div>
            <div class="col-lg-6 col-xl-4 d-none d-xl-block">
              <div class="text-center mb-30">
                <div class="thumb">
                  <img src="{{asset('assets/data/about.webp')}}" alt="" style="width:350px;height:350px;">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="p-30 bg-theme-colored2 mb-30">
                <form id="contact_form" name="contact_form" class="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="text-white">Request <span class="text-theme-colored4">Information</span></h4>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <input name="form_name" class="form-control" type="text" placeholder="Your Name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <input name="form_email" class="form-control required email" type="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <input name="form_phone" class="form-control" type="text" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <select name="form_subject" class="form-control required">
                          <option>Chose Sugject</option>
                          <option value="SoftwareEngineering">Software Engineering</option>
                          <option value="ComputerScienceEngineering">Computer Science Engineering</option>
                          <option value="AccountingTechnology">Accounting Technology</option>
                          <option value="BachelorOfScience">Bachelor Of Science</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <input name="date" class="form-control date-picker" type="text" placeholder="Date Of Birth">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <textarea name="form_message" rows="3" class="form-control textarea required" placeholder="Write a Message"></textarea>
                      </div>
                      <div class="mb-3 mb-10 d-grid">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-xs btn-theme-colored4 btn-outline-light" data-loading-text="Please wait..."> Send Message </button>
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

    <section class="">
      <div class="container pt--100 pt-lg-140" data-tm-padding-bottom="50px">
        <div class="section-content mt-lg--0" data-tm-margin-top="-70px">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="tm-sc-service service-item-current-style2">
                <div class="service-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/a1.png')}}" alt="1.jpg">
                </div>
                <div class="service-content bg-theme-colored3">
                  <h4 class="title text-white">Experience Yourself</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="tm-sc-service service-item-current-style2">
                <div class="service-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/a5.png')}}" alt="1.jpg">
                </div>
                <div class="service-content bg-theme-colored2">
                  <h4 class="title text-white">Experience Yourself</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="tm-sc-service service-item-current-style2">
                <div class="service-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/a7.png')}}" alt="1.jpg">
                </div>
                <div class="service-content bg-theme-colored1">
                  <h4 class="title text-white">Experience Yourself</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="tm-sc-service service-item-current-style2">
                <div class="service-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/a8.png')}}" alt="1.jpg">
                </div>
                <div class="service-content bg-theme-colored4">
                  <h4 class="title text-white">Experience Yourself</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="row mt-40">
            <div class="col-lg-6 col-xl-8">
              <div class="about-box-contents">
                <div class="destails">
                  <h3 class="text-theme-colored2">Welcome To Kindergarten</h3>
                  <h4 class="text-theme-colored3 line-bottom">World Best Education In Our Kindergarten</h4>
                  <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus.Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored3 animate-icon-on-hover animate-icon-rotate-y mb-30">
                    <div class="icon-box-wrapper">
                      <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-circled"> <i class="pe-7s-scissors"></i> </a></div>
                      <div class="icon-text">
                        <h5 class="icon-box-title mb-0">Active Learning</h5>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored2 animate-icon-on-hover animate-icon-rotate-y mb-30">
                    <div class="icon-box-wrapper">
                      <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-circled"> <i class="pe-7s-pen"></i> </a></div>
                      <div class="icon-text">
                        <h5 class="icon-box-title mb-0">Funny and Happy</h5>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored4 animate-icon-on-hover animate-icon-rotate-y mb-30">
                    <div class="icon-box-wrapper">
                      <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-circled"> <i class="pe-7s-phone"></i> </a></div>
                      <div class="icon-text">
                        <h5 class="icon-box-title mb-0">Fulfill With Love</h5>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left text-center text-lg-start iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                    <div class="icon-box-wrapper">
                      <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-circled"> <i class="pe-7s-light"></i> </a></div>
                      <div class="icon-text">
                        <h5 class="icon-box-title mb-0">Expert Teachers</h5>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-4">
              <div class="text-center">
                <div class="thumb">
                  <img class="img-fullwidth" src="images/about/a1.png" alt="a1.png">
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="tm-floating-objects">
        <span class="z-index-1 bg-img-cover" data-tm-bg-img="{{asset('assets/images/bg/f2.png')}}" data-tm-width="100%" data-tm-height="143" data-tm-top="auto" data-tm-bottom="0" data-tm-left="0" data-tm-right="0" data-tm-opacity="-100px"></span>
      </div>
    </section>

    <!-- Section: divider -->
    <section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored2-7" data-tm-bg-img="{{asset('assets/images/bg/p2.jpg')}}">
      <div class="container pt-50 pb-50">
        <div class="row">
          <div class="col-sm-12 col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="funfact-item text-center mb-md-30">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-12">
                <h5 class="title">ဂျပန်နိုင်ငံလုပ်ငန်းခွင်တွင်းသို့ရောက်ရှိနေသောမြန်မာလူငယ်များ</h5>
                  </div>
                  <div class="col-lg-4 col-12">
              <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 btn-outline-light">စာရင်းပေးသွင်းရန်</a>
                </div>
              </div>
              </div>
            </div>
          </div>
          
         
          
        </div>
      </div>
    </section>

    <!-- Section: Course -->
    <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{asset('assets/images/bg/p2.jpg')}}">
      <div class="container pb-50">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title">Our <span class="text-theme-colored3">Courses</span></h2>
                  <p>There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="col-xl-5">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('assets/data/c6.png')}}" alt="">
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="course-details clearfix pt-15 pb-20">
                    <h4 class="mt-0 mb-0"><a class="text-theme-colored1" href="#">Automobile Maintenance Foundation Class
                    </a></h4>
                    <h6 class="mb-0"><span class="text-theme-colored1">Class Time:</span> 9:00 AM - 12:00 PM</h6>
                    <p class="mb-15">Must have basic experience of automotive maintenance.</p>
                    <div class="course-details2-bottom">
                      <ul>
                       <li class="list-inline-item">Gender <br>M/F</li>
                       <li class="list-inline-item">Duration <br>3 Months</li>
                       <li class="list-inline-item">Age <br>30yrs</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="col-xl-5">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('assets/data/c2.webp')}}" alt="">
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="course-details clearfix pt-15 pb-20">
                    <h4 class="mt-0 mb-0"><a class="text-theme-colored2" href="#">N5 Regular Class</a></h4>
                    <h6 class="mb-0"><span class="text-theme-colored1">Class Time:</span> 1:30PM - 4:30PM</h6>
                    <p class="mb-15">Starting Date in 14.March 2023 and acccept 25 students in each class and duration is 3.5 Months.</p>
                    

                    <div class="course-details2-bottom">
                      <ul>
                       <li class="list-inline-item">Capacity <br>25 </li>
                       <li class="list-inline-item">Duration <br>3.5Ms</li>
                       <li class="list-inline-item">Days<br> T/W/T/F</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="col-xl-5">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('assets/data/c3.png')}}" alt="">
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="course-details clearfix pt-15 pb-20">
                    <h4 class="mt-0 mb-0"><a class="text-theme-colored3" href="#">N4 Regular Class</a></h4>
                    <h6 class="mb-0"><span class="text-theme-colored1">Class Time:</span> 9:00AM - 12:00PM</h6>
                    <p class="mb-15">Starting Date in 14.March 2023 and acccept 25 students in each class and duration is 3.5 Months.</p>
                    <div class="course-details2-bottom">
                      <ul>
                       <li class="list-inline-item">Capacity <br>25</li>
                       <li class="list-inline-item">Duration <br>3.5Ms</li>
                       <li class="list-inline-item">Days <br>T/W/T/F</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="col-xl-5">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('assets/data/c4.webp')}}" alt="">
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="course-details clearfix pt-15 pb-20">
                    <h4 class="mt-0 mb-0"><a class="text-theme-colored3" href="#">N3 Regular Class</a></h4>
                    <h6 class="mb-0"><span class="text-theme-colored1">Class Time:</span> 9.00am - 11:00PM</h6>
                    <p class="mb-15">Starting Date in 14.March 2023 and acccept 25 students in each class and duration is 4.5 Months.</p>

                    <div class="course-details2-bottom">
                      <ul>
                        <li class="list-inline-item">Capacity <br>25</li>
                        <li class="list-inline-item">Duration <br>4 Ms</li>
                        <li class="list-inline-item">Days <br>T/W/T/F</li>
                       </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <h2 class="title">Our <span class="text-theme-colored3">Gallery</span></h2>
                  <p>There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-conent">
          <div class="row">
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="gallery" src="{{asset('assets/data/g6.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('assets/data/g6.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="gallery" src="{{asset('assets/data/g7.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('assets/data/g7.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="gallery" src="{{asset('assets/data/g9.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade blue"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('assets/data/g9.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="gallery" src="{{asset('assets/data/g11.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade sky"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('assets/data/g11.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="gallery" src="{{asset('assets/data/g8.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade sky"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('assets/data/g8.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{asset('assets/images/bg/p2.jpg')}}">
      <div class="container pb-50">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title">Our <span class="text-theme-colored3">Teachers</span></h2>
                  <p>There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-xl-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t1.jpg')}}" alt="team1.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored2">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
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
            <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t2.jpg')}}" alt="team2.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored3 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t3.jpg')}}" alt="team3.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored3">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored1 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t4.jpg')}}" alt="team4.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t5.jpg')}}" alt="team4.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t7.jpg')}}" alt="team4.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t8.jpg')}}" alt="team4.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="team-thumb">
                  <img class="img-fullwidth" src="{{asset('assets/data/t9.jpg')}}" alt="team4.jpg')}}">
                </div>
                <div class="team-details text-center bg-theme-colored1">
                  <div class="member-biography">
                    <h3 class="mt-0 text-white mb-0">Steve Smith</h3>
                    <p class="mb-0 text-white">English Teacher</p>
                  </div>
                  <ul class="styled-icons icon-dark icon-md icon-theme-colored2 icon-circled pt-3">
                    <li><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble text-white"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing Table -->
    <section class="pricing-table" data-tm-bg-color="#f7f7f7">
      <div class="container pb-90">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title">Pricing <span class="text-theme-colored3">Table</span></h2>
                  <p>There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                <div class="pricing-table-inner-wrapper">
                  <div class="pricing-table-head bg-theme-colored3 p-20">
                    <div class="pricing-table-pricing">
                      <span class="pricing-table-price text-white" data-tm-font-size="30px"><sup>$</sup>680</span>
                      <span class="pricing-table-postfix float-end text-white mt-20 mt-lg-20">Per/Year</span>
                    </div>
                  </div>
                  <div class="pricing-table-thumb">
                    <img class="img-fullwidth" src="{{asset('assets/images/pricing/1.jpg')}}" alt="Image">
                  </div>
                  <div class="pricing-table-inner">
                    <div class="pricing-table-head pl-30 pt-30">
                      <div class="pricing-table-title-area pt-0 pb-0">
                        <h4 class="pricing-table-title">Basic</h4>
                      </div>
                    </div>
                    <div class="pricing-table-content pl-30 pt-0 mt--0">
                      <ul>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Provide Written Statements</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Assist in Case Development</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Testify at a Deposition and/or Trial</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Prepare Demonstrative Evidence</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Obtain Other Expert Witnesses</li>
                      </ul>
                    </div>
                    <div class="pricing-table-footer d-grid">
                      <a href="#" target="_self" class="btn btn-theme-colored4 btn-flat"> Signup </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                <div class="pricing-table-inner-wrapper">
                  <div class="pricing-table-head bg-theme-colored1 p-20">
                    <div class="pricing-table-pricing">
                      <span class="pricing-table-price text-white" data-tm-font-size="30px"><sup>$</sup>680</span>
                      <span class="pricing-table-postfix float-end text-white mt-20 mt-lg-20">Per/Year</span>
                    </div>
                  </div>
                  <div class="pricing-table-thumb">
                    <img class="img-fullwidth" src="{{asset('assets/images/pricing/2.jpg')}}" alt="Image">
                  </div>
                  <div class="pricing-table-inner">
                    <div class="pricing-table-head pl-30 pt-30">
                      <div class="pricing-table-title-area pt-0 pb-0">
                        <h4 class="pricing-table-title">Standerd</h4>
                      </div>
                    </div>
                    <div class="pricing-table-content pl-30 pt-0 mt--0">
                      <ul>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Provide Written Statements</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Assist in Case Development</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Testify at a Deposition and/or Trial</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Prepare Demonstrative Evidence</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Obtain Other Expert Witnesses</li>
                      </ul>
                    </div>
                    <div class="pricing-table-footer d-grid">
                      <a href="#" target="_self" class="btn btn-theme-colored2 btn-flat"> Signup </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                <div class="pricing-table-inner-wrapper">
                  <div class="pricing-table-head bg-theme-colored2 p-20">
                    <div class="pricing-table-pricing">
                      <span class="pricing-table-price text-white" data-tm-font-size="30px"><sup>$</sup>680</span>
                      <span class="pricing-table-postfix float-end text-white mt-20 mt-lg-20">Per/Year</span>
                    </div>
                  </div>
                  <div class="pricing-table-thumb">
                    <img class="img-fullwidth" src="{{asset('assets/images/pricing/3.jpg')}}" alt="Image">
                  </div>
                  <div class="pricing-table-inner">
                    <div class="pricing-table-head pl-30 pt-30">
                      <div class="pricing-table-title-area pt-0 pb-0">
                        <h4 class="pricing-table-title">Premium</h4>
                      </div>
                    </div>
                    <div class="pricing-table-content pl-30 pt-0 mt--0">
                      <ul>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Provide Written Statements</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Assist in Case Development</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Testify at a Deposition and/or Trial</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Prepare Demonstrative Evidence</li>
                        <li><i class="far fa-heart mr-10 text-theme-colored2"></i>Obtain Other Expert Witnesses</li>
                      </ul>
                    </div>
                    <div class="pricing-table-footer d-grid">
                      <a href="#" target="_self" class="btn btn-theme-colored1 btn-flat"> Signup </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="testimonials layer-overlay overlay-theme-colored4-7" data-tm-bg-img="{{asset('assets/images/bg/b1.jpg')}}">
      <div class="container">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title text-white">Happy Parent's Say</h2>
                  <p data-tm-text-color="#fff">There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme tm-owl-carousel-2col testimonial style2" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="10" data-stagepadding="0">
                <div class="tm-carousel-item">
                  <div class="testimonial-wrapper">
                    <div class="content bg-theme-colored1 p-30 pb-40">
                      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                      <i class="fa fa-quote-right mt-10 text-white"></i>
                      <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                      <h6 class="title text-white mt-0 mb-15">Designer</h6>
                      <div class="thumb mt-20"><img class="rounded-circle" alt="" src="{{asset('assets/images/testimonials/1.jpg')}}"></div>
                    </div>
                  </div>
                </div>
                <div class="tm-carousel-item">
                  <div class="testimonial-wrapper">                  
                    <div class="content bg-theme-colored3 p-30 pb-40">
                      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                      <i class="fa fa-quote-right mt-10 text-white"></i>
                      <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                      <h6 class="title text-white mt-0 mb-15">Designer</h6>
                      <div class="thumb mt-20"><img class="rounded-circle" alt="" src="{{asset('assets/images/testimonials/3.jpg')}}"></div>
                    </div>
                  </div>
                </div>
                <div class="tm-carousel-item">
                  <div class="testimonial-wrapper">                  
                    <div class="content bg-theme-color-lemon p-30 pb-40">
                      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                      <i class="fa fa-quote-right mt-10 text-white"></i>
                      <h4 class="author text-white mt-20 mb-0">Catherine Grace</h4>
                      <h6 class="title text-white mt-0 mb-15">Designer</h6>
                      <div class="thumb mt-20"><img class="rounded-circle" alt="" src="{{asset('assets/images/testimonials/2.jpg')}}"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section class="our-blog bg-img-cover bg-img-center" data-tm-bg-img="{{asset('assets/images/bg/p2.jpg')}}">
      <div class="container pb-90">
        <div class="section-title">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                  <h2 class="title">Letest <span class="text-theme-colored3">News</span></h2>
                  <p>There are many variations of passages. But the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <div class="blog-style1-current-theme">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb thumb">
                      <img class="img-responsive img-fullwidth" src="{{asset('assets/images/blog/1.jpg')}}" alt=""> 
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="header-wrapper d-flex">
                      <div class="entry-date bg-theme-colored1 text-center mr-15">
                        <span class="day bg-theme-colored1">28</span>
                        <span class="month bg-theme-colored1">Feb</span>
                      </div>
                      <h4 class="entry-title"><a class="text-theme-colored4" href="#">This is a standard post with thumbnail</a></h4>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.
                  </div>
                  <div class="bg-theme-colored1 text-center p-10">
                    <span class="text-white mr-15"><i class="fas fa-share-alt text-white" data-tm-margin-right="8px"></i>24 Share</span>
                    <span class="text-white mr-15"><i class="far fa-comment-dots text-white" data-tm-margin-right="8px"></i> 214 Comments</span>
                    <span class="text-white"><i class="far fa-heart text-white" data-tm-margin-right="8px"></i> 895 Likes</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="blog-style1-current-theme">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb thumb">
                      <img class="img-responsive img-fullwidth" src="{{asset('assets/images/blog/2.jpg')}}" alt=""> 
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="header-wrapper d-flex">
                      <div class="entry-date bg-theme-colored2 text-center mr-15">
                        <span class="day bg-theme-colored2">28</span>
                        <span class="month bg-theme-colored2">Feb</span>
                      </div>
                      <h4 class="entry-title"><a class="text-theme-colored3" href="#">This is a standard post with thumbnail</a></h4>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.
                  </div>
                  <div class="bg-theme-colored2 text-center p-10">
                    <span class="text-white mr-15"><i class="fas fa-share-alt text-white" data-tm-margin-right="8px"></i>24 Share</span>
                    <span class="text-white mr-15"><i class="far fa-comment-dots text-white" data-tm-margin-right="8px"></i> 214 Comments</span>
                    <span class="text-white"><i class="far fa-heart text-white" data-tm-margin-right="8px"></i> 895 Likes</span>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="blog-style1-current-theme">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb thumb">
                      <img class="img-responsive img-fullwidth" src="{{asset('assets/images/blog/3.jpg')}}" alt=""> 
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="header-wrapper d-flex">
                      <div class="entry-date bg-theme-colored4 text-center mr-15">
                        <span class="day bg-theme-colored4">28</span>
                        <span class="month bg-theme-colored4">Feb</span>
                      </div>
                      <h4 class="entry-title"><a class="text-theme-colored1" href="#">This is a standard post with thumbnail</a></h4>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.
                  </div>
                  <div class="bg-theme-colored4 text-center p-10">
                    <span class="text-white mr-15"><i class="fas fa-share-alt text-white" data-tm-margin-right="8px"></i>24 Share</span>
                    <span class="text-white mr-15"><i class="far fa-comment-dots text-white" data-tm-margin-right="8px"></i> 214 Comments</span>
                    <span class="text-white"><i class="far fa-heart text-white" data-tm-margin-right="8px"></i> 895 Likes</span>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Partners -->
    <section class="border-top bg-theme-colored2">
      <div class="container pb-20 pt-20">
        <div class="row">
          <div class="col-lg-12">
            <div class="tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center clients-animation-grayscale">
              <div class="owl-carousel owl-theme tm-owl-carousel-6col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0" data-laptop="4">
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w1.png' alt='Image' /> </a></div>
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w2.png' alt='Image' /> </a></div>
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w3.png' alt='Image' /> </a></div>
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w4.png' alt='Image' /> </a></div>
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w5.png' alt='Image' /> </a></div>
                <div class="item"> <a target="_blank" href="#"> <img src='images/clients/w6.png' alt='Image' /> </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
@endsection