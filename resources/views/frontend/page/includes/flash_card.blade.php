<section id="explore-property" class="mt60 pb90 pb30-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-title2 wow fadeInUp" data-wow-delay="300ms" style="margin-bottom: 30px;">
                    <h2 class="title">{{ $element->first()->title ?? '' }}</h2>
                    <p class="paragraph">{{ $element->first()->subtitle ?? '' }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row explore-apartment-slider navi_pagi_top_right my-flex-card wow fadeInUp" data-wow-delay="300ms">
                    @foreach($element as $index=>$row)
                        <div class="col-lg-4 item">
                        <a>
                            <div class="iconbox-style1">
                                @if($index==0)
                                    <span class="fa fa-font-awesome-flag"></span>
                                @elseif($index==1)
                                    <span class="fa fa-eye"></span>
                                @else
                                    <i class="icon flaticon-favourite"></i>
                                @endif
                                <div class="iconbox-content">
                                    <h5 class="title">{{$row->list_title ?? ''}}</h5>
                                    <p class="text mb-0 text-justify fz-16">{{$row->list_description ?? ''}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
