@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}" />
@endsection

@section('content')

    @include($view_path.'includes.show_breadcrumb')

    <section class="pt60 pb90 bgc-f8">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-lg-8">
                    <div class="single-property-content mb30-md">
                        <h2 class="sp-lg-title">{{ $data['row']->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-property-content">
                        <div class="property-action text-lg-end">
                            <h3 class="price mb-0">{{ $data['row']->price ?? ''}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb30 mt10 wow fadeInUp" data-wow-delay="300ms">
                @if(count($data['row']->packageGalleries)>0)
                    @include($view_path.'partials.gallery')
                @endif
            </div>

            {{--  for description  --}}
            <div class="row wrap wow fadeInUp" data-wow-delay="500ms">
                @include($view_path.'partials.description')
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
            @if(count($data['related_activity']) > 0)
                @include($view_path.'partials.related_activity')
            @endif
        </div>
    </section>

@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/frontend/js/navbar-sticky.js')}}"></script>
@endsection
