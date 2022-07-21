@extends('airfpt.layout.layout')
@section('title', 'AirFPT')
@section('content')

<div class="row justify-content-center pt-5 mt-4">

    <div class="container-fluid">

        <!-- Image Homepage Carousel -->
        <div id="indexCarousel" class="carousel carousel-fade slide " data-pause="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('./img/carousel1.jpg')}}" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel2.jpg')}}" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel3.jpg')}}" alt="">
                </div>
            </div>


            <a href="#indexCarousel" class="carousel-control-prev shadơw" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#indexCarousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- End Image Homepage Carousel -->
    </div>

    <!-- Start form -->
    <div class="indexForm container justify-content-center">

        <!-- Tab navbar -->
        <ul id="indexFormTab" class="nav nav-tabs row text-center border-0" role="tablist">
            <li class="nav-item col-4 m-0 p-0 border-0">
                <a class="nav-link active" id="searchFlight-tab" data-toggle="tab" href="#searchFlight" role="tab" aria-controls="searchFlight" aria-selected="true">Booking Now</a>
            </li>
            <li class="nav-item col-4 m-0 p-0 border-0">
                <a class="nav-link border-none" id="manage_my_booking-tab" data-toggle="tab" href="#manage_my_booking" role="tab" aria-controls="manage_my_booking" aria-selected="false">Manage Booking</a>
            </li>
            <li class="nav-item col-4 m-0 p-0 border-0">
                <a class="nav-link border-none" id="flight_status-tab" data-toggle="tab" href="#flight_status" role="tab" aria-controls="flight_status" aria-selected="false">Flight Status</a>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content  text-white font-weight-bolder p-2" id="indexFormContent">
            <div role="tabpanel" aria-labelledby="searchFlight-tab" class="tab-pane fade show active" id="searchFlight">

                <!-- Start Form Booking -->
                <form method="get" role="form" id="searchFlightForm" enctype="multipart/form-data" action="{{Route('airfpt.booking.booking')}}">

                    <!-- Label departure -->
                    <label class="mt-3 d-flex justify-content-between" for="origin">
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
                        <select name="origin" id="origin" class="form-control ">
                            <option value="">From</option>
                            @foreach($airports as $a)
                            <option value="{{$a->iata_code}}">{{$a->city}} ({{$a->iata_code}}) - {{$a->name}}</option>
                            @endforeach
                        </select>
                        <!-- <input name="origin" id="origin" type="text" class="form-control is-valid" required placeholder="From"> -->
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                        </div>
                        <!-- Input depart_date -->
                        <input name="depart_date" min="{{date('Y-m-d')}}" max="" id="depart_date" class="form-control" type="text" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='date')">
                        <div class="input-group-append">
                            <span class="input-group-text">Outbound</span>
                        </div>
                    </div>

                    <!-- Input Destination -->
                    <label class="mt-2 font-weight-bolder" for="destination">Arrival</label>
                    <div class="input-group input-group-lg">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-plane-arrival"></i></span>
                        </div>
                        <select name="destination" id="destination" class="form-control ">
                            <option value="">To</option>
                            @foreach($airports as $a)
                            <option value="{{$a->iata_code}}">{{$a->city}} ({{$a->iata_code}}) - {{$a->name}}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                        </div>
                        <!-- Input return_date -->
                        <input name="return_date" min="" max="" id="return_date" type="text" class="form-control" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='date')">
                        <div class="input-group-append">
                            <span class="input-group-text"> &NonBreakingSpace; Inbound &NegativeThinSpace;</span>
                        </div>
                    </div>

                    <!-- Input Passenger -->
                    <label class="mt-2 font-weight-bolder pax " for="destination">Passengers</label>
                    <div class="input-group input-group-lg pax ">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                        </div>

                        <!-- select passenger-->
                        <input class="form-control bg-light" id="totalPax" readonly data-toggle="collapse" data-target="#genderPopup" type="text">

                        <!-- End select passenger -->

                        <div class="input-group-append d-lg-flex d-none">
                            <span class="input-group-text bg-light border-light mx-0 px-auto">Economy-Fare</span>
                        </div>
                        <div class="input-group-append d-md-flex d-none">
                            <span class="input-group-text rounded-right"><i class="fa fa-ticket-alt"></i></span>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text border-0 bg-transparent "> &nbsp;</span>
                        </div>
                        <input type="submit" value="SEARCH FLIGHTS" class="btn btn-primary rounded font-weight-bolder">
                    </div>
                    <!-- End Input Passenger -->
                    <div id="genderPopup" class="collapse form-control input-group input-group-md w-50">
                        <div class="gender_box  " style="background-color:rgba(1, 131, 243, 0.3);">
                            <label for="adl">Adults:</label>
                            <div class="dec btn">-</div>
                            <input value="1" placeholder="1 Adult" type="number" name="adl" id="adl" require class="text-center" readonly>
                            <div class="inc btn">+</div>
                        </div>

                        <div class="gender_box  " style="background-color: rgba(243, 112, 34, 0.3);">
                            <label for="chd">Children:</label>
                            <div class="dec btn">-</div>
                            <input value="0" class="text-center" type="number" name="chd" id="chd" readonly>
                            <div class="inc btn">+</div>
                        </div>

                        <div class="gender_box  " style="background-color: rgba(109, 233, 27, 0.3);">
                            <label class="" for="">Infants:</label>
                            <div class="dec btn">-</div>
                            <input value="0" type="number" name="inf" id="inf" class="text-center" readonly>
                            <div class="inc btn">+</div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End form "booking"-->

            <!-- Start Form Manage My Booking -->
            <div class="tab-pane fade" id="manage_my_booking" role="tabpanel" aria-labelledby="manage_my_booking-tab">

                <!-- TRUNG -->
                <div class="container d-flex justify-content-center form-wrapper">
                    <div class="form-container col-md-5">
                        <form role="form" action="{{ Route('manageBooking.show') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-box d-flex flex-column">
                                <label for="" class="form-label">Booking reference</label>
                                <input type="text" name="pnr" id="pnr" class="form-input">
                                @if($errors->has('pnr'))
                                <p class="form-error text-danger">{{$errors->first('pnr')}}</p>
                                @endif
                            </div>
                            <div class="form-box d-flex flex-column">
                                <label for="" class="form-label">Last name</label>
                                <input type="text" name="lastname" class="form-input">
                                @if($errors->has('lastname'))
                                <p class="form-error text-danger">{{$errors->first('lastname')}}</p>
                                @endif
                            </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block mt-3">Show booking</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END of TRUNG -->
            </div>
            <!-- End other tab -->
            <!-- PHUC DUY -->
            <div class="tab-pane fade" id="flight_status" role="tabpanel" aria-labelledby="manage_my_booking-tab">
                <div class="container d-flex justify-content-center form-wrapper">
                    <div class="form-container col-md-5">
                        <form role="form" action="{{ Route('manageBooking.flightStatusShow') }}" method="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-box d-flex flex-column">
                                <label for="" class="form-label">Flight Number</label>
                                <input type="text" name="flightNum" id="flightNum" class="form-input">
                                @if($errors->has('flightNum'))
                                <p class="form-error text-danger">{{$errors->first('flightNum')}}</p>
                                @endif
                            </div>
                            <div class="form-box d-flex flex-column">
                                <label for="" class="form-label">Departure Date</label>
                                <input type="date" name="date" id="date" class="form-input">
                                @if($errors->has('date'))
                                <p class="form-error text-danger">{{$errors->first('date')}}</p>
                                @endif
                            </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">Show booking</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row container newsContainer">

        @foreach($news as $n)

        <div class="col-lg-6 mx-0 mb-2 p-2 eachIndexNews">
            <a href="{{  route('airfpt.user.details',$n->id) }}">
                <img src="{{ url('./img/trucduy/'.$n->image) }}" width="98%" class="z-depth-0 " alt="">
                <h3 class="newsTitle" style="height: 60px;">{{$n->topic}}</h3>
                <div class="newsJumpArrow text-light font-weight-bold">
                    <a href="{{  route('airfpt.user.details',$n->id) }}">
                        <span class="d-block pb-2 text-light">Let's Go</span>
                        <li class="far fa-arrow-alt-circle-right d-block m-1 p-0 text-warning font-weight-bold"></li>
                    </a>
                </div>
            </a>
        </div>
        @endforeach
    </div>


    @include('airfpt.subcribe_panel')
    @endsection