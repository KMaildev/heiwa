@extends('layouts.app')
@section('content')
    <!-- Section: Have Any Question -->
    <section class="divider">
        <div class="container pt-60 pb-60">
            <div class="section-title mb-60">
                <div class="row">
                    <div class="col-md-12">
                        <div class="esc-heading small-border text-center">
                            <h3>Have any Questions?</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div
                            class="icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                            <div class="icon-box-wrapper">
                                <div class="icon-wrapper mb-30">
                                    <a class="icon icon-type-font-icon icon-dark icon-circled">
                                        <i class="flaticon-contact-044-call-1"></i>
                                    </a>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-box-title mt-0">Phone</h5>
                                    <div class="content">
                                        <a href="tel:+959 445652455">
                                            +959 445652455,
                                        </a>
                                        <br>
                                        <a href="tel:+8190-3231-6684">
                                            +8190-3231-6684 ( JAPAN SENDING DEPARTMENT)
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div
                            class="icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                            <div class="icon-box-wrapper">
                                <div class="icon-wrapper mb-30">
                                    <a class="icon icon-type-font-icon icon-dark icon-circled">
                                        <i class="flaticon-contact-043-email-1"></i>
                                    </a>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-box-title mt-0">
                                        Company Contact(連絡先)
                                    </h5>
                                    <div class="content">
                                        <a href="mailto:heiwa.myanmar2020@gmail.com">
                                            heiwa.myanmar2020@gmail.com
                                        </a>
                                        <br>
                                        <a href="mailto:info@heiwamm.com">
                                            info@heiwamm.com
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div
                            class="icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                            <div class="icon-box-wrapper">
                                <div class="icon-wrapper mb-30">
                                    <a class="icon icon-type-font-icon icon-dark icon-circled">
                                        <i class="flaticon-contact-025-world"></i>
                                    </a>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-box-title mt-0">
                                        Company Address (会社住所 )
                                    </h5>
                                    <div class="content">6
                                        NO.230/10 ( 2F,3F ), PINLON ROAD, NORTH DAGON TOWNSHIP, YANGON.
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider bg-white-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mt-0 mb-0">Interested in discussing?</h2>
                    <p class="font-size-20">Active & Ready to use Contact Form!</p>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{ route('contact.store') }}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Message</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-3">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                data-loading-text="Please wait...">Send your message</button>
                            <button type="reset"
                                class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.0329545096843!2d96.19620467422499!3d16.874264283928078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935e5eeb921f%3A0xca82f0b98379d490!2sHEIWA%20Japanese%20Language%20%26%20Trading%20Center!5e0!3m2!1sen!2smm!4v1683039057648!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100" height="600"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
