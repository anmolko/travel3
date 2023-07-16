<div class="advance-content-style1">
   <div class="row">
        <div class="col-md-3 col-lg-4">
            <div class="advance-search-field position-relative text-start">
                <div class="box-search">
                    <span class="icon flaticon-home-1"></span>
                    {!! Form::select('travel_destination', ['1'=>'national','0'=>'international'] , 1,['class'=>'form-control bgc-f7 bdrs12 capitalize','id'=>'travel_destination','placeholder'=>'Select Destination']) !!}
                </div>
            </div>
            <span class="text-danger flight-required" id="destination-prompt"></span>
        </div>

       <div class="col-md-6 col-lg-8" id="for-destination">
           <div class="row">
               <div class="col-md-4 col-lg-5">
                   <div class="advance-search-field position-relative text-start">
                       <div class="box-search">
                           <span class="icon flaticon-caravan"></span>
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
       </div>

       <div class="col-md-3 col-lg-3 mt15">
           <div class="advance-search-field position-relative text-start">
               <div class="box-search">
                   <span class="icon flaticon-event"></span>
                   {!! Form::date('travel_date', now(),['class'=>'form-control bgc-f7 bdrs12','id'=>'travel_date','placeholder'=>'Select date']) !!}
               </div>
           </div>
           <span class="text-danger flight-required" id="date-prompt"></span>
       </div>

       <div class="col-md-3 col-lg-2 mt15">
           <div class="advance-search-field position-relative text-start">
               <div class="box-search">
                   <span class="icon flaticon-user-1"></span>
                   {!! Form::number('adult_number', null,['class'=>'form-control bgc-f7 bdrs12','id'=>'adult_number','min'=>'0','placeholder'=>'Number of adults']) !!}
               </div>
           </div>
           <span class="text-danger flight-required" id="adult-number-prompt"></span>
       </div>
       <div class="col-md-3 col-lg-2 mt15">
           <div class="advance-search-field position-relative text-start">
               <div class="box-search">
                   <span class="icon flaticon-user"></span>
                   {!! Form::number('kids_number', null,['class'=>'form-control bgc-f7 bdrs12','id'=>'kids_number','min'=>'0','placeholder'=>'Number of kids']) !!}
               </div>
           </div>
       </div>

       <div class="col-md-3 col-lg-3 mt15">
           <div class="advance-search-field position-relative text-start">
               <div class="box-search">
                   <span class="icon flaticon-discovery"></span>
                   {!! Form::select('travel_type', ['1'=>'one way','0'=>'return'] , 1,['class'=>'form-control bgc-f7 bdrs12 capitalize','id'=>'travel_type','placeholder'=>'Select type']) !!}
               </div>
           </div>
           <span class="text-danger flight-required" id="type-prompt"></span>
       </div>

       <div class="col-md-4 col-lg-2 mt15">
            <div class="d-flex justify-content-start mt-3 mt-md-0">
                <button class="advance-search-icon ud-btn btn-thm" type="button" id="book-flight"><span class="flaticon-search"></span></button>
            </div>
      </div>
   </div>
</div>
