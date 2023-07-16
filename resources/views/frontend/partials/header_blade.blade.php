<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? 'Twins Travel')}}"/>
    <meta name="keywords" content=" {{@$setting_data->meta_tags ?? 'Travel, Tours, Trips, Nepal Tour, Hiking, Trekking, International Tours, Twins Travels'}}">
    <link rel="canonical" href="https://twinstravels.com.np" />

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->title ?? 'Twins Travel')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->title ?? 'Twins Travel')}} </title>
    @endif
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <meta property="og:title" content="{{ucwords(@$setting_data->meta_title ?? 'Twins Travel')}}" />
    <meta property="og:type" content="Tour and Travel" />
    <meta property="og:url" content="https://twinstravels.com.np" />
    <meta property="og:site_name" content="Twins Travel" />
    <meta property="og:description" content="{{ucwords(@$setting_data->meta_description ?? 'Twins Travel')}}" />

    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ud-custom-spacing.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- Title -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>

    @yield('css')
    @stack('styles')
</head>
<body>
<div class="wrapper ovh">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav nav-homepage-style stricky main-menu">
        <!-- Ace Responsive Menu -->
        <nav class="posr">
            <div class="container posr menu_bdrt1">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="logos mr20">
                                <a class="header-logo logo1" href="/">
                                    <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" alt="" style="height:60px">
                                </a>
                                <a class="header-logo logo2" href="/">
                                    <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" alt="" style="height:60px">
                                </a>
                            </div>
                            <!-- Responsive Menu Structure-->
                            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                                <li class="visible_list"> <a class="list-item" href="/">
                                        <span class="title">Home</span></a>
                                </li>
                                @if(!empty($top_nav_data))
                                    @foreach($top_nav_data as $nav)
                                        @if(!empty($nav->children[0]))
                                            <li class="visible_list">
                                                <a class="list-item" href="/"><span class="title">{{ @$nav->name ?? @$nav->title }}</span></a>
                                                <ul>
                                                    @foreach($nav->children[0] as $childNav)
                                                        <li>
                                                            <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                                <span class="title"> {{ @$childNav->name ?? @$childNav->title ??''}} </span></a>
                                                            @if(!empty($childNav->children[0]))
                                                                <ul>
                                                                    @foreach($childNav->children[0] as $key => $lastchild)
                                                                        <li>
                                                                            <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                                {{ @$lastchild->name ?? @$lastchild->title ?? ''}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                        @else
                                            <li class="visible_list"> <a class="list-item" href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                    <span class="title">{{ @$nav->name ?? @$nav->title ??''}}</span></a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <a class="ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4" href="{{route('frontend.contact-us')}}">Reach Out<i class="fal fa-arrow-right-long"></i></a>
                            <a class="sidemenu-btn filter-btn-right" href="#">
                                <img src="{{asset('assets/frontend/images/dark-nav-icon.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Menu In Hiddn SideBar -->
    <div class="rightside-hidden-bar">
        <div class="hsidebar-header">
            <div class="sidebar-close-icon"><span class="fa fa-times"></span></div>
            <h4 class="title">{{ @$setting_data->title ?? '' }}</h4>
        </div>
        <div class="hsidebar-content">
            <div class="hiddenbar_navbar_content">
                <div class="hiddenbar_navbar_menu">
                    <p class="paragraph" style="padding: 0 30px;">
                        {{ @$setting_data->description ?? '' }}
                    </p>
                </div>
                <div class="hiddenbar_footer position-relative bdrt1">
                    <div class="row pt45 pb30 pl30">
                        <div class="col-auto">
                            <div class="contact-info">
                                <p class="info-title dark-color">Contact Us</p>
                                <h6 class="info-phone dark-color">
                                    <a href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                                        {{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                                    </a></h6>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="contact-info">
                                <p class="info-title dark-color">Nee Live Support?</p>
                                <h6 class="info-mail dark-color">
                                    <a href="mailto:{{@$setting_data->email ?? ''}}">
                                        {{@$setting_data->email ?? ''}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row pt30 pb30 bdrt1">
                        <div class="col-auto">
                            <div class="social-style-sidebar d-flex align-items-center pl30">
                                <h6 class="me-4 mb-0">Follow us</h6>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Menu In Hiddn SideBar -->
    <!-- Advance Feature Modal Start -->
    <div class="advance-feature-modal">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header pl30 pr30">
                        <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Price Range</h6>
                                    <!-- Range Slider Mobile Version -->
                                    <div class="range-slider-style modal-version">
                                        <div class="range-wrapper">
                                            <div class="mb30 mt35" id="slider"></div>
                                            <div class="d-flex align-items-center">
                                                <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                                <span id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Type</h6>
                                    <div class="form-style2 input-group">
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option>Property</option>
                                            <option data-tokens="Apartments">Apartments</option>
                                            <option data-tokens="Bungalow">Bungalow</option>
                                            <option data-tokens="Houses">Houses</option>
                                            <option data-tokens="Loft">Loft</option>
                                            <option data-tokens="Office">Office</option>
                                            <option data-tokens="Townhome">Townhome</option>
                                            <option data-tokens="Villa">Villa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Property ID</h6>
                                    <div class="form-style2">
                                        <input type="text" class="form-control" placeholder="RT04949213">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Bedrooms</h6>
                                    <div class="d-flex">
                                        <div class="selection">
                                            <input id="xany" name="xbeds" type="radio" checked>
                                            <label for="xany">any</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xoneplus" name="xbeds" type="radio">
                                            <label for="xoneplus">1+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xtwoplus" name="xbeds" type="radio">
                                            <label for="xtwoplus">2+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xthreeplus" name="xbeds" type="radio">
                                            <label for="xthreeplus">3+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xfourplus" name="xbeds" type="radio">
                                            <label for="xfourplus">4+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xfiveplus" name="xbeds" type="radio">
                                            <label for="xfiveplus">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Bathrooms</h6>
                                    <div class="d-flex">
                                        <div class="selection">
                                            <input id="yany" name="ybath" type="radio" checked>
                                            <label for="yany">any</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yoneplus" name="ybath" type="radio">
                                            <label for="yoneplus">1+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="ytwoplus" name="ybath" type="radio">
                                            <label for="ytwoplus">2+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="ythreeplus" name="ybath" type="radio">
                                            <label for="ythreeplus">3+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yfourplus" name="ybath" type="radio">
                                            <label for="yfourplus">4+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yfiveplus" name="ybath" type="radio">
                                            <label for="yfiveplus">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Location</h6>
                                    <div class="form-style2 input-group">
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option>All Cities</option>
                                            <option data-tokens="California">California</option>
                                            <option data-tokens="Chicago">Chicago</option>
                                            <option data-tokens="LosAngeles">Los Angeles</option>
                                            <option data-tokens="Manhattan">Manhattan</option>
                                            <option data-tokens="NewJersey">New Jersey</option>
                                            <option data-tokens="NewYork">New York</option>
                                            <option data-tokens="SanDiego">San Diego</option>
                                            <option data-tokens="SanFrancisco">San Francisco</option>
                                            <option data-tokens="Texas">Texas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Square Feet</h6>
                                    <div class="space-area">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-style1">
                                                <input type="text" class="form-control" placeholder="Min.">
                                            </div>
                                            <span class="dark-color">-</span>
                                            <div class="form-style1">
                                                <input type="text" class="form-control" placeholder="Max">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-wrapper mb0">
                                    <h6 class="list-title mb10">Amenities</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="widget-wrapper mb20">
                                    <div class="checkbox-style1">
                                        <label class="custom_checkbox">Attic
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Basketball court
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Air Conditioning
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Lawn
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="widget-wrapper mb20">
                                    <div class="checkbox-style1">
                                        <label class="custom_checkbox">TV Cable
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Dryer
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Outdoor Shower
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Washer
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="widget-wrapper mb20">
                                    <div class="checkbox-style1">
                                        <label class="custom_checkbox">Lake view
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Wine cellar
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Front yard
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Refrigerator
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
                        <div class="btn-area">
                            <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advance Feature Modal End -->

    <div class="hiddenbar-body-ovelay"></div>

    <!-- Mobile Nav  -->
    <div id="page" class="mobilie_header_nav stylehome1">
        <div class="mobile-menu">
            <div class="header innerpage-style">
                <div class="menu_and_widgets">
                    <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                        <a class="menubar" href="#menu"><img src="{{asset('assets/frontend/images/mobile-dark-nav-icon.svg')}}" alt=""></a>
                        <a class="mobile_logo" href="/">
                            <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" alt="" style="width: 30%;padding-bottom: 15px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.mobile-menu -->
        <nav id="menu" class="">
            <ul>
                <li><a href="/">Home</a></li>
                @if(!empty($top_nav_data))
                    @foreach($top_nav_data as $nav)
                        @if(!empty($nav->children[0]))
                            <li>
                                <a href="#"><span>{{ @$nav->name ?? @$nav->title }}</span></a>
                                <ul>
                                    @foreach($nav->children[0] as $childNav)
                                        <li>
                                            <a href="{{get_menu_url($childNav->type, $childNav)}}" target="{{@$childNav->target ? '_blank':''}}">
                                                <span> {{ @$childNav->name ?? @$childNav->title ??''}} </span>
                                            </a>
                                            @if(!empty($childNav->children[0]))
                                                <ul>
                                                    @foreach($childNav->children[0] as $key => $lastchild)
                                                        <li>
                                                            <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                {{ @$lastchild->name ?? @$lastchild->title ?? ''}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                        @else
                            <li> <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                    <span>{{ @$nav->name ?? @$nav->title ??''}}</span></a>
                            </li>
                        @endif
                    @endforeach
                @endif

                <li class="px-3 mobile-menu-btn">
                    <a href="{{route('frontend.contact-us')}}" class="ud-btn btn-thm text-white">Reach Out <i class="fal fa-arrow-right-long"></i></a>
                </li>
                <!-- Only for Mobile View -->
            </ul>
        </nav>
    </div>
