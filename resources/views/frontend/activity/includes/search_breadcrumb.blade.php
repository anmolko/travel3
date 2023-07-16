<section class="property-banner-style1 p-0"
         style="background-image: linear-gradient(180deg, rgba(24, 26, 32, 0) 0%, #181A20 100%), url({{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) : asset('assets/frontend/images/background/'.$breadcrumb_image) }});"
>
    <div class="inner-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <div class="inner-banner-style1 text-center">
                        <div class="advance-search-tab mt45 mx-auto">
                            <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">
                                        Tour
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include($module.'includes.tour_tab')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="breadcumb-section bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-style1">
                    <h2 class="title">{{ count($data['rows']) }} Tours found</h2>
                    <div class="breadcumb-list">
                        @if($page_method !== 'index')
                            <a href="{{route($base_route.'index')}}" class="second">{{ $panel }}</a>
                            <a href="#" class="last">{{ $page_title }}</a>
                        @else
                            <a href="#">{{ $panel }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
