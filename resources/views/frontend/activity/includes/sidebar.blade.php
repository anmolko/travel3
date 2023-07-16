

<div class="column">
    @if(count( $data['categories']) > 0)
        <div class="sidebar-widget mb30">
            <h6 class="widget-title">Categories</h6>
            <div class="category-list mt20">
                @foreach($data['categories'] as $category)
                    <a href="{{ route('frontend.activity.category', $category->slug ) }}">{{ $category->title ?? '' }} ({{ $category->packages_count }})</a>
                @endforeach
            </div>
        </div>
    @endif

    @if($page_method !== 'show')
        <div class="agen-personal-info position-relative bgc-white default-box-shadow1 bdrs12 p30 mt30">
            <div class="widget-wrapper mb-0">
                <h6 class="title fz17 mb30">Get More Information</h6>
                <div class="agent-single align-items-center pb25">
                    <div class="single-contant ml20 ml0-xs">
                        <h6 class="title mb-1">Phone</h6>
                        <div class="agent-meta mb10 d-md-flex align-items-center">
                            <a class="text fz15" href="tel:{{$setting_data->phone ?? ''}}"><i class="flaticon-call pe-1"></i>
                                {{$setting_data->phone ?? ''}}</a>
                        </div>
                    </div>
                    <div class="single-contant ml20 ml0-xs">
                        <h6 class="title mb-1">Mobile</h6>
                        <div class="agent-meta mb10 d-md-flex align-items-center">
                            <a class="text fz15" href="tel:{{ $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                                <i class="flaticon-call pe-1"></i>
                                {{ $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                            </a>
                        </div>
                    </div>
                    <div class="single-contant ml20 ml0-xs property-action">
                        <h6 class="title mb-1">Our Socials</h6>
                        <div class="d-flex mb20 mb10-md align-items-center">
                            @if(@$setting_data->facebook)
                                <a class="icon mr10" href="{{@$setting_data->facebook}}"><span class="fa-brands fa-facebook"></span></a>
                            @endif
                            @if(@$setting_data->youtube)
                                <a class="icon mr10" href="{{@$setting_data->youtube}}"><span class="fa-brands fa-youtube"></span></a>
                            @endif
                            @if(@$setting_data->instagram)
                                <a class="icon mr10" href="{{@$setting_data->instagram}}"><span class="fa-brands fa-instagram"></span></a>
                            @endif
                            @if(@$setting_data->linkedin)
                                <a class="icon mr10" href="{{@$setting_data->linkedin}}"><span class="fa-brands fa-linkedin"></span></a>
                            @endif
                            @if(!empty(@$setting_data->ticktock))
                                <a class="icon mr10" href="{{@$setting_data->ticktock}}"><span class="fa-brands fa-tiktok"></span></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <a href="{{ route('frontend.contact-us') }}" class="ud-btn btn-white2">Contact us<i class="fal fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    @else
        <div class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
            <h4 class="form-title mb5">Schedule a tour</h4>
            <p class="text">Choose your preferred day</p>
            <div class="ps-navtab">
                <div class="tab-content" id="pills-tabContent">
                    <form class="form-style1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb20">
                                    <input type="text" class="form-control" placeholder="Time" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb20">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb20">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb10">
                                    <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
                                </div>
                            </div>
{{--                            <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">--}}
{{--                                <label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use--}}
{{--                                    <input type="checkbox">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
                            <div class="col-md-12">
                                <div class="d-grid">
                                    <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

</div>
