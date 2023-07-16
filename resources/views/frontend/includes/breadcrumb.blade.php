<section class="breadcumb-section2 p-0" style="background-image: linear-gradient(180deg, rgba(24, 26, 32, 0) 0%, #181A20 100%), url({{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) : asset('assets/frontend/images/background/'.$breadcrumb_image) }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-style1">
                    <h2 class="title text-white">{{ $page_title }}</h2>
                    <div class="breadcumb-list">
                        <a href="/" class="text-white">Home</a>
                        @if($page_method !=='index')
                            <a href="{{route($base_route.'index')}}" class="text-white second">{{ $panel }}</a>
                            <a href="#" class="text-white last">{{ $page_title }}</a>
                        @else
                            <a href="#" class="text-white">{{ $panel }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
