
{!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'d-none row d-md-flex flex-wrap align-items-center search_tour_form']) !!}
<div class="col-md-10 mb-3 mb-md-0">
    <div class="row">
        <div class="form-group mb-3 mb-md-0 col-md-4">
            <label for="language" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Destination</label>
            {!! Form::select('travel_destination', ['1'=>'national','0'=>'international'] , 1,['class'=>'form-control form-control-sm font-weight-600 text-capitalize shadow-0 bg-white selectpicker','id'=>'travel_destination','placeholder'=>'Select Destination','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}
            <span class="text-danger flight-required" id="destination-prompt"></span>
        </div>
        <div class="form-group mb-3 mb-md-0 col-md-3">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">From</label>
            {!! Form::select('from', $data['flight_list'], null,['class'=>'form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm','id'=>'from','placeholder'=>'Select From']) !!}
            <span class="text-danger" id="from-prompt"></span>
        </div>
        <div class="form-group mb-3 mb-md-0 col-md-3">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">To</label>
            {!! Form::select('to', $data['flight_list'], null,['class'=>'form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm','id'=>'to','placeholder'=>'Select To']) !!}
            <span class="text-danger" id="to-prompt"></span>
        </div>
    </div>
</div>
<div class="col-md-2 pl-0">
    <button type="submit" class="btn btn-primary btn-lg btn-block">
        Search
    </button>
</div>
{!! Form::close() !!}
