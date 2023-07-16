@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpeg'])

    <section class="our-agents bgc-white">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                @foreach( $data['rows']  as $row)
                    <div class="col-md-6 col-lg-4">
                        <div class="agency-style1 p30 bdrs12 bdr1 mb30">
                            <div class="agency-img">
                                <img class="w-100" src="{{ asset(imagePath($row->image))}}" alt="">
                            </div>
                            <div class="agency-details pt20">
                                <h6 class="agency-title mb-1">{{ $row->title }}</h6>
                                <div class="fz15">
                                    {{ $row->description ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="500ms">
                <div class="mbp_pagination text-center">
                    {{ $data['rows']->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
