<!-- Our Footer -->
<section class="footer-style1 pt60 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-widget mb-4 mb-lg-5">
                    <a class="footer-logo" href="/">
                        <img class="mb40" src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" alt="" style="width: 45%;">
                    </a>
                    <div class="app-widget">
                        <div class="row mb-1 mb-lg-3">
                            <p class="info-title">{{ $setting_data->description ?? '' }}</p>
                        </div>
                    </div>
                    <div class="social-widget">
                        @if(!empty(@$setting_data->facebook) || !empty(@$setting_data->youtube) || !empty(@$setting_data->instagram) || !empty(@$setting_data->linkedin) || !empty(@$setting_data->ticktock))
                            <h6 class="text-white mb20">Follow us on social media</h6>
                            <div class="social-style1">
                            @if(@$setting_data->facebook)
                                <a href="{{@$setting_data->facebook}}" class="me-3">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            @endif
                            @if(@$setting_data->youtube)
                                <a href="{{@$setting_data->youtube}}" class="me-3">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            @endif
                            @if(@$setting_data->instagram)
                                <a href="{{@$setting_data->instagram}}" class="me-3">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            @endif
                            @if(@$setting_data->linkedin)
                                <a href="{{@$setting_data->linkedin}}" class="me-3">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            @endif
                            @if(!empty(@$setting_data->ticktock))
                                <a href="{{@$setting_data->ticktock}}" class="me-3">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="footer-widget mb-4 mb-lg-5">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            @if($footer_nav_data1!==null)
                                <div class="link-style1 mb-3">
                                <h6 class="text-white mb25">
                                    {{ $footer_nav_title1 ?? ''}}
                                </h6>
                                <div class="link-list">
                                    @foreach(@$footer_nav_data1 as $nav)
                                        @if(empty(@$nav->children[0]))
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                    {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-auto">
                            @if($footer_nav_data2!==null)
                                <div class="link-style1 mb-3">
                                <h6 class="text-white mb25">{{ $footer_nav_title2 ?? ''}}</h6>
                                <ul class="ps-0">
                                    @foreach(@$footer_nav_data2 as $nav)
                                        @if(empty(@$nav->children[0]))
                                            <li><a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                    {{ @$nav->name ?? @$nav->title ?? ''}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="col-auto">
                            <h6 class="text-white mb25">Our Information</h6>
                            <div class="contact-info mt-2">
                                <p class="info-title">Call us</p>
                                <h6 class="info-phone">
                                    <a href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                                        {{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                                    </a>
                                </h6>
                            </div>
                            <div class="contact-info mt-2">
                                <p class="info-title">Need Support?</p>
                                <h6 class="info-mail"><a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a></h6>
                            </div>
                            <div class="contact-info mt-2">
                                <p class="info-title">Our address</p>
                                <h6 class="info-mail"><a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->address ?? ''}}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container white-bdrt1 py-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-center text-lg-start">
                    <p class="copyright-text text-gray ff-heading">© 2023 <span class="text-white">{{$setting_data->title ?? 'Twins Travels'}}</span> - by
                        <a href="https://www.canosoft.com.np/" class="text-white" target="_blank">Canosoft Techonology</a>  - All rights reserved</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center text-lg-end">
                    <p class="footer-menu ff-heading text-gray">
                        @foreach($footerTopNav as $pageNav)
                            <a class="text-gray" href="{{$pageNav}}"> {{ ucfirst(str_replace('-',' ',$pageNav)) }} {{ $loop->last ? '':'·' }} </a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
</div>
<!-- Wrapper End -->
<script src="{{ asset('assets/frontend/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('assets/frontend/js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('assets/frontend/js/parallax.js') }}"></script>
<script src="{{ asset('assets/frontend/js/pricing-slider.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/common/lazyload.js') }}"></script>
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
