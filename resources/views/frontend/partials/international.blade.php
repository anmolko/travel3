<div class="row">
    <div class="col-md-4 col-lg-5">
        <div class="advance-search-field position-relative text-start">
            <div class="box-search">
                <span class="icon flaticon-caravan"></span>
                {!! Form::text('from', null,['class'=>'form-control bgc-f7 bdrs12','id'=>'from','placeholder'=>'From']) !!}
            </div>
        </div>
        <span class="text-danger" id="from-prompt"></span>
    </div>
    <div class="col-md-4 col-lg-5">
        <div class="advance-search-field position-relative text-start">
            <div class="box-search">
                <span class="icon flaticon-location"></span>
                {!! Form::text('to', null,['class'=>'form-control bgc-f7 bdrs12','id'=>'to','placeholder'=>'To']) !!}
            </div>
        </div>
        <span class="text-danger" id="to-prompt"></span>
    </div>
</div>
