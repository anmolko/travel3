<div class="container">
    <div class="roww wow fadeInUp" data-wow-delay="500ms">
        <div class="col-xl-12">
            @if($element->first()->subtitle)
                <h2 class="blog-title">
                    {{$element->first()->subtitle ?? '' }}
                </h2>
            @endif
            <div class="ui-content mt40 mb60 text-justify custom-description">
                {!! $element->first()->description ?? '' !!}
            </div>
        </div>
    </div>
</div>
