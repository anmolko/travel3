<section class="breadcumb-section2 p-0" style="background-image: linear-gradient(180deg, rgba(24, 26, 32, 0) 0%, #181A20 100%),
    url({{ $data['row']->cover ? asset(imagePath($data['row']->cover)) : asset('assets/frontend/images/background/bread-bg2.jpeg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-style1">
                    <h2 class="title text-white">{{ $page_title }}</h2>
                    <div class="breadcumb-list">
                        <a href="/" class="text-white">Home</a>
                        <a href="{{route($base_route.'index')}}" class="text-white second">{{ $panel }}</a>
                        <a class="text-white last">{{ $data['row']->title ?? $page_title ?? '' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
