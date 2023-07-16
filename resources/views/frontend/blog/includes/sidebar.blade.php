<div class="blog-sidebar">
    <div class="sidebar-widget mb30">
        {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'search_blog_form']) !!}
            <div class="search_area">
                <input type="text" class="form-control" name="for" placeholder="Type your keywords...">
                <label><span class="flaticon-search"></span></label>
            </div>
        {!! Form::close() !!}
    </div>
    @if(count( $data['categories']) > 0)
        <div class="sidebar-widget mb30">
            <h6 class="widget-title">Categories</h6>
            <div class="category-list mt20">
                @foreach($data['categories'] as $category)
                    <a href="{{ route($base_route.'category',$category->slug) }}">{{$category->title}} ({{$category->blogs_count}})</a>
                @endforeach
            </div>
        </div>
    @endif

    @if(count( $data['latest']) > 0)
        <div class="sidebar-widget mb30">
        <h6 class="widget-title">Latest Posts</h6>
            @foreach($data['latest'] as $latest)
                <div class="list-news-style d-flex align-items-center mt20 mb20">
                    <div class="news-img flex-shrink-0">
                        <img class="thumbnail-image lazy" data-src="{{ asset(imagePath($latest->image)) }}" alt="">
                    </div>
                    <div class="news-content flex-shrink-1 ms-3">
                        <p class="new-text mb0 fz14">
                            <a class="body-light-color" href="{{ route($module.'blog.show',$latest->slug) }}">
                                {{ $latest->title }}
                            </a>
                        </p>
                        <a class="body-light-color" href="{{ route($module.'blog.show',$latest->slug) }}">
                            {{date('d M Y', strtotime($latest->created_at))}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
