@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($view_path.'includes.search_breadcrumb', ['breadcrumb_image'=>'bread-bg.jpeg'])

    <section class="pt0 pb90 bgc-f8">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-4 d-none d-lg-block">
                    @include($view_path.'includes.sidebar')
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($data['rows'] as $package)
                            <div class="col-sm-6 col-lg-6">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100 lazy" data-src="{{ asset(imagePath($package->image)) }}" alt="">
                                        @if($package->package_ribbon_id)
                                            <div class="list-tag fz12 {{$package->packageRibbon->key ?? ''}}"><span class="flaticon-electricity me-2"></span>{{$package->packageRibbon->title ?? ''}}</div>
                                        @endif
                                        <div class="list-price">
                                            <a href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}">
                                                {{ $package->packageCategory->title }} {{ $package->price ?  ' / ' . $package->price:''}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <p class="list-text">
                                            <i class="fal fa-earth mr-1"></i>
                                            {{ $package->country->title }}
                                        </p>
                                        <h6 class="list-title">
                                            <a href="{{ route('frontend.activity.show',$package->slug) }}">
                                                {{ $package->title ?? '' }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
