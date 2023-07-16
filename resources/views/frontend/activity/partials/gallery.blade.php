<div class="row">
    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
        <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-gallery owl-carousel owl-theme">
            @foreach($data['row']->packageGalleries as $gallery)
            <div class="item">
                <div class="sp-img-content">
                    <a class="popup-img preview-img-2 sp-img mb10" href="{{ asset(galleryImagePath('package').$gallery->resized_name) }}" style="width: 410px;height: 340px;border-radius: 12px;">
                        <img class="w-100" src="{{ asset(galleryImagePath('package').$gallery->resized_name) }}" alt="" style="object-fit: cover;">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

