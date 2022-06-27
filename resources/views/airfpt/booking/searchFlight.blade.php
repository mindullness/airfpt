@extends('airfpt.layout.layout')
@section('title', 'Search Flight')
@section('content')
<style>
    #bookingForm {
        margin: 120px 0px 0px 100px;
        padding-top: 1px;
        height: 480px;
        background: -webkit-linear-gradient(100deg, rgba(1, 131, 243, 0.9), rgba(1, 131, 243, 0.8), rgba(1, 131, 243, 0.8), rgba(1, 131, 243, 0.6), rgba(243, 112, 34, 0.9), rgba(243, 112, 34, 0.8), rgba(243, 112, 34, 0.7), rgba(255, 127, 39, 0.6), rgba(77, 183, 72, 0.9), rgba(77, 183, 72, 0.8), rgba(109, 233, 27, 0.6), rgba(109, 233, 27, 0.6));
        background: linear-gradient(100deg, rgba(1, 131, 243, 0.9), rgba(1, 131, 243, 0.8), rgba(1, 131, 243, 0.8), rgba(1, 131, 243, 0.6), rgba(243, 112, 34, 0.9), rgba(243, 112, 34, 0.8), rgba(243, 112, 34, 0.7), rgba(255, 127, 39, 0.6), rgba(77, 183, 72, 0.9), rgba(77, 183, 72, 0.8), rgba(109, 233, 27, 0.6), rgba(109, 233, 27, 0.6));
        border-radius: 10px;
        border-radius: 10px;
    }
</style>
<form class=" container  mx-auto" id="bookingForm" method="post" enctype="multipart/form-data" action="{{Route('airfpt.booking.flightList')}}" role="tabpanel">
    {{csrf_field()}}
    <!-- Label departure -->
    <label class="mt-2 d-flex justify-content-between" for="origin">
        <span class="font-weight-bolder">Departure</span>
        <span>
            <div class="input-group input-group-lg font-weight-bolder">
                <div class="form-check-inline  ">
                    <label class="form-check-label text-warning">
                        <input type="radio" checked="checked" value="roundtrip" class="form-check-input roundtrip" name="isRoundTrip">Round-Trip
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input oneway" value="oneway" name="isRoundTrip">One-Way
                    </label>
                </div>
            </div>
        </span>
    </label>
    <!-- Input Origin -->
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-plane-departure"></i></span>
        </div>
        <input name="origin" id="origin" type="text" class="form-control is-valid" required placeholder="From">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
        </div>
        <!-- Input depart_date -->
        <input name="depart_date" id="depart_date" class="form-control" type="text" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='text')">
        <div class="input-group-append">
            <span class="input-group-text">Outbound</span>
        </div>
    </div>

    <!-- Input Destination -->
    <label class="mt-2 font-weight-bolder" for="destination">Arrival</label>
    <div class="input-group input-group-lg">

        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-plane-arrival "></i></span>
        </div>
        <input name="destination" id="destination" type="text" class="form-control is-valid" placeholder="To">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
        </div>
        <!-- Input return_date -->
        <input name="return_date" id="return_date" type="text" class="form-control" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='text')">
        <div class="input-group-append">
            <span class="input-group-text"> &NonBreakingSpace; Inbound &NegativeThinSpace;</span>
        </div>
    </div>

    <!-- Input Passenger -->
    <label class="mt-2 font-weight-bolder pax " for="destination">Passenger</label>
    <div class="input-group input-group-lg pax ">

        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
        </div>

        <!-- select zone-->
        <select class="form-control" multiple data-toggle="collapse" data-target="#gender">
        </select>
        <!-- End select zone -->

        <div class="input-group-append d-lg-flex d-none">
            <span class="input-group-text bg-light border-light mx-0 px-auto">Economy-Fare</span>
        </div>
        <div class="input-group-append d-md-flex d-none">
            <span class="input-group-text rounded-right"><i class="fa fa-ticket-alt"></i></span>
        </div>
        <div class="input-group-append">
            <span class="input-group-text border-0 bg-transparent "> &nbsp;</span>
        </div>
        <input type="submit" value="SEARCH FLIGHTS" class="btn btn-primary  rounded font-weight-bolder">
    </div>
    <!-- End Input Passenger -->
    <div id="gender" class="collapse form-control input-group input-group-md w-50">
        <div class="box  " style="background-color:rgba(1, 131, 243, 0.3);">
            <label for="adl">Adults:</label>
            <button class="dec">-</button>
            <input value="1" min="1" max="9" type="number" name="adl" id="adl">
            <button class="inc">+</button>
        </div>

        <div class="box  " style="background-color: rgba(243, 112, 34, 0.3);">
            <label for="chd">Children:</label>
            <button class="dec">-</button>
            <input value="0" min="0" max="9" class="" type="number" name="chd" id="chd">
            <button class="inc">+</button>
        </div>

        <div class="box  " style="background-color: rgba(109, 233, 27, 0.3);">
            <label class="" for="">Infants:</label>
            <button class="dec">-</button>
            <input value="0" min="0" max="" class="" type="number" name="inf" id="inf">
            <button class="inc">+</button>
        </div>
    </div>
</form>
<script src="js/userIndex.js"></script>
@endsection