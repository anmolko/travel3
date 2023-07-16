@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpeg'])

    <section class="our-blog bgc-f8">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-8">
                    <div class="row" data-wow-delay="300ms">
                        @foreach( $data['rows']  as $row)
                            <div class="col-6 col-lg-6">
                                <div class="blog-style1">
                                    <div class="blog-img">
                                        <img class="w-100 lazy" data-src="{{ asset(imagePath($row->image))}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <div class="date">
                                            <span class="month">{{date('M Y', strtotime($row->created_at))}}</span>
                                            <span class="day">{{date('d', strtotime($row->created_at))}}</span>
                                        </div>
                                        <a class="tag" href="{{ route('frontend.blog.category', $row->blogCategory->slug) }}">{{ $row->blogCategory->title ?? '' }}</a>
                                        <h6 class="title mt-1">
                                            <a href="{{ route('frontend.blog.show', $row->slug) }}">
                                                {{ $row->title ?? '' }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="mbp_pagination text-center">
                            {{ $data['rows']->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
