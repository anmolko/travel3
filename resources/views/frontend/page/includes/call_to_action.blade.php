<section class="cta-banner4 mt60 d-flex align-items-center" style="background-image: url({{ asset('assets/frontend/images/background/bread-bg8.jpeg') }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto wow fadeInUp" data-wow-delay="300ms">
                <div class="cta-style4 position-relative text-center">
                    <h6 class="sub-title fw400 text-white">{{ $element->first()->subtitle ?? '' }}</h6>
                    <h1 class="cta-title mb30 text-white">{{ $element->first()->title ?? '' }}</h1>
                    @if($element->first()->button_link)
                        <div class="d-block d-sm-flex justify-content-center">
                            <a href="http://localhost:8000/activity" class="ud-btn btn-white">Our Activity <i class="fal fa-arrow-right-long"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
