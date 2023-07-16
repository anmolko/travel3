<div class="cta-banner mx-auto maxw1600 pt10 bdrs12 position-relative mx20-lg px20-sm">
    <div class="container">
        <div class="row align-items-start align-items-xl-center">
            <div class="col-md-10 col-lg-7 col-xl-5">
                <div class="position-relative mb0-sm wow fadeInRight" data-wow-delay="300ms">
                    <img class="pt40 pl50" src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                    <div class="img-box-10 position-relative d-none d-xl-block">
                        <img class="img-1 spin-right" src="{{ asset('assets/frontend/images/about/element-3.png') }}" alt="">
                        <img class="img-2 bounce-x" src="{{ asset('assets/frontend/images/about/element-5.png') }}" alt="">
                        <img class="img-3 bounce-y" src="{{ asset('assets/frontend/images/about/element-6.png') }}" alt="">
                        <img class="img-4 bounce-y" src="{{ asset('assets/frontend/images/about/element-7.png') }}" alt="">
                        <img class="img-5 spin-right" src="{{ asset('assets/frontend/images/about/element-8.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-6 pt60 offset-xl-1">
                <div class="about-box-1 pe-4 mt10 mt0-lg mb30-lg wow fadeInLeft main-title2" data-wow-delay="300ms" style="margin-bottom: 0px;">
                    <h2 class="title mb20">{{ $element->first()->title ?? '' }}</h2>
                    <div class="text mb25 mb10-md fz16 text-justify">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    @if($element->first()->button_link)
                        <a href="{{$element->first()->button_link}}" class="ud-btn btn-dark">{{ $element->first()->button ?? 'Explore more' }}<i class="fal fa-arrow-right-long"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
