<div class="row">
    <div class="col-md-4 col-lg-5">
        <div class="advance-search-field position-relative text-start">
            <div class="box-search">
                <span class="icon flaticon-location"></span>
                {!! Form::select('from', $data['flight_list'], null,['class'=>'form-control bgc-f7 bdrs12','id'=>'from','placeholder'=>'Select From']) !!}
            </div>
        </div>
        <span class="text-danger" id="from-prompt"></span>
    </div>
    <div class="col-md-4 col-lg-5">
        <div class="advance-search-field position-relative text-start">
            <div class="box-search">
                <span class="icon flaticon-location"></span>
                {!! Form::select('to', $data['flight_list'], null,['class'=>'form-control bgc-f7 bdrs12','id'=>'to','placeholder'=>'Select To']) !!}
            </div>
        </div>
        <span class="text-danger" id="to-prompt"></span>
    </div>
</div>

