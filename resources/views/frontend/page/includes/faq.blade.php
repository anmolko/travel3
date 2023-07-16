<section class="our-faq bgc-f8 mt60 pb60">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-12">
                <div class="ui-content">
                    <h4 class="title">{{ $element->first()->title ?? '' }}</h4>
                    <div class="accordion-style1 faq-page mb-4 mb-lg-5">
                        <div class="accordion" id="accordionExample">
                            @foreach($element as $index=>$row)
                                <div class="accordion-item {{$loop->first ? 'active':''}}">
                                    <h2 class="accordion-header" id="heading{{$index}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}" aria-controls="collapse{{$index}}">
                                            {{ $row->list_title ?? '' }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$index}}" class="accordion-collapse collapse {{$loop->first ? 'show':''}}" aria-labelledby="heading{{$index}}" data-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ $row->list_description ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
