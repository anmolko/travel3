<div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
    <div class="col-lg-9">
        <div class="main-title2">
            <h2 class="title">Related Activity</h2>
            <p class="paragraph">Find best related packages to choose from</p>
        </div>
    </div>
</div>
<div class="row wow fadeInUp" data-wow-delay="900ms">
    <div class="col-lg-12">
        <div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel">
            @foreach($data['related_activity'] as $package)
                <div class="item">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <img class="w-100" src="{{ asset(imagePath($package->image)) }}" alt="">
                            @if($package->package_ribbon_id)
                                <div class="list-tag fz12 {{$package->packageRibbon->key ?? ''}}"><span class="flaticon-electricity me-2"></span>{{$package->packageRibbon->title ?? ''}}</div>
                            @endif
                            <div class="list-price">
                                <a href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}">
                                    {{ $package->packageCategory->title }} {{ $package->price ?  ' / ' . $package->price:''}}
                                </a>
                            </div>
                        </div>
                        <div class="list-content">
                            <p class="list-text">
                                <i class="fal fa-earth mr-1"></i>
                                {{ $package->country->title }}
                            </p>
                            <h6 class="list-title">
                                <a href="{{ route('frontend.activity.show',$package->slug) }}">
                                    {{ $package->title ?? '' }}
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
