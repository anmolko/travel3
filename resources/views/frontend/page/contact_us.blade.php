@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'bread-bg8.jpeg'])


    <section class="pt-60 pb90 our-ui-elements">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white">
                        <h4 class="form-title mb25">Send us a message.</h4>
                        {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'form-style1 submit_form']) !!}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Your Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Your Phone</label>
                                        <input class="form-control" type="text" name="phone" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Subject</label>
                                        <input class="form-control" type="text" name="subject" placeholder="Enter subject">
                                        <input class="form-control" type="hidden" name="type" value="contact form inquiry">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb10">
                                        <label class="heading-color ff-heading fw600 mb10">Message</label>
                                        <textarea class="message-control form-control" rows="4" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt20">
                                    <div class="d-grid">
                                        <button type="submit" class="ud-btn btn-thm">Send Message <i class="fal fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 mt70 ml60 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
                    <div class="mb30">
                        <h2 class="title text-capitalize">Have any questions? You can also <br class="d-none d-md-block"> contact us directly.</h2>
                    </div>
                    <div class="why-chose-list style2">
                        <div class="list-one d-flex align-items-start mb30">
                            <span class="list-icon flex-shrink-0 flaticon-home-3"></span>
                            <div class="list-content flex-grow-1 mt5 ml20">
                                <h6 class="mb-1">  {{$data['setting_data']->address ?? ''}}</h6>
                                <p class="text mb-0 fz15">Our address</p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start mb30">
                            <span class="list-icon flex-shrink-0 flaticon-email"></span>
                            <div class="list-content flex-grow-1 mt5 ml20">
                                <h6 class="mb-1"><a href="mailto:{{@$data['setting_data']->email ?? ''}}">
                                        {{$data['setting_data']->email ?? ''}}
                                    </a> </h6>
                                <p class="text mb-0 fz15">Send us an email.</p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start mb30">
                            <span class="list-icon flex-shrink-0 flaticon-smartphone"></span>
                            <div class="list-content flex-grow-1 mt5 ml20">
                                <h6 class="mb-1">
                                    <a href="tel:{{$data['setting_data']->phone ?? $data['setting_data']->mobile ?? $data['setting_data']->whatsapp ?? $data['setting_data']->viber ?? ''}}">
                                        {{$data['setting_data']->phone ?? $data['setting_data']->mobile ?? $data['setting_data']->whatsapp ?? $data['setting_data']->viber ?? ''}}
                                    </a>
                                </h6>
                                <p class="text mb-0 fz15">Give us a call</p>
                            </div>
                        </div>
                        <div class="list-one  mb30">
                            @if(!empty(@$data['setting_data']->facebook) || !empty(@$data['setting_data']->youtube) || !empty(@$data['setting_data']->instagram) || !empty(@$data['setting_data']->linkedin) || !empty(@$data['setting_data']->ticktock))
                                <h4 class="form-title mb25">Follow us on: </h4>
                                <div class="social-style2 d-flex align-items-start">
                                @if(@$data['setting_data']->facebook)
                                    <a href="{{@$data['setting_data']->facebook}}" class="me-3">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                @endif
                                @if(@$data['setting_data']->youtube)
                                    <a href="{{@$data['setting_data']->youtube}}" class="me-3">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                @endif
                                @if(@$data['setting_data']->instagram)
                                    <a href="{{@$data['setting_data']->instagram}}" class="me-3">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                @endif
                                @if(@$data['setting_data']->linkedin)
                                    <a href="{{@$data['setting_data']->linkedin}}" class="me-3">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                @endif
                                @if(!empty(@$data['setting_data']->ticktock))
                                    <a href="{{@$data['setting_data']->ticktock}}" class="me-3">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($data['setting_data'] && $data['setting_data']->google_map)
        <section class="p-0">
            <iframe class="home8-map contact-page" src="{{ $data['setting_data']->google_map }}" style="border:0;width: 100%;height: 400px;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    @endif
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
