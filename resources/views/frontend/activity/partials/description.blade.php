<div class="col-lg-8">
    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
        <h4 class="title fz17 mb30">Overview</h4>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-maps"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Country</h6>
                        <p class="text mb-0 fz15">{{ $data['row']->country->title ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-event"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Duration</h6>
                        <p class="text mb-0 fz15">{{ $data['row']->duration }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-home-1"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Category</h6>
                        <p class="text mb-0 fz15">{{ $data['row']->packageCategory->title ?? '' }}</p>
                    </div>
                </div>
            </div>
            @if($data['row']->packageRibbon)
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-element mb25-xs d-flex align-items-center">
                        <span class="icon flaticon-discovery"></span>
                        <div class="ml15">
                            <h6 class="mb-0">Ribbon</h6>
                            <p class="text mb-0 fz15">{{ $data['row']->packageRibbon->title ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
        <h4 class="title fz17 mb30">Description</h4>
        <div class="text mb10 custom-description">
            {!! $data['row']->description !!}
        </div>
    </div>
    @if($data['row']->video)
        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
            <h4 class="title fz17 mb30">Video</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="property_video bdrs12 w-100" style="background-image: {{ getYoutubeThumbnail($data['row']->video) }}">
                        <a class="video_popup_btn mx-auto popup-img popup-youtube"
                           href="{{ $data['row']->video  }}">
                            <span class="flaticon-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($data['row']->itinerary)
        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
            <h4 class="title fz17 mb30">Itinerary</h4>
            <div class="text mb10 custom-description">
                {!! $data['row']->itinerary !!}
            </div>
        </div>
    @endif

    @if($data['row']->map)
        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
            <h4 class="title fz17 mb30 mt30">Map</h4>
            <div class="row">
                <div class="col-lg-12">
                    <iframe class="position-relative bdrs12 mt30 h250" loading="lazy"
                            src="{{ $data['row']->map }}" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    @endif
</div>
