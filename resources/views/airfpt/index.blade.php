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
<div  role="tabpanel" aria-labelledby="searchFlight-tab" class="tab-pane fade show active" id="searchFlight">
            <!-- Start Form Booking -->
            <form  method="get" role="form" id="searchFlightForm" enctype="multipart/form-data" action="{{Route('airfpt.booking.booking')}}">

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
                    <input name="depart_date" id="depart_date" class="form-control" type="text" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='text')">
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
                    <select class="form-control" data-toggle="collapse" data-target="#genderPopup">
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
                    <input type="submit" value="SEARCH FLIGHTS" class="btn btn-primary rounded font-weight-bolder">
                </div>
                <!-- End Input Passenger -->
                <div id="genderPopup" class="collapse form-control input-group input-group-md w-50">
                    <div class="box  " style="background-color:rgba(1, 131, 243, 0.3);">
                        <label for="adl">Adults:</label>
                        <div class="dec btn">-</div>
                        <input value="1" type="number" name="adl" id="adl" require readonly>
                        <div class="inc btn">+</div>
                    </div>

                    <div class="box  " style="background-color: rgba(243, 112, 34, 0.3);">
                        <label for="chd">Children:</label>
                        <div class="dec btn">-</div>
                        <input value="0" class="" type="number" name="chd" id="chd" readonly>
                        <div class="inc btn">+</div>
                    </div>

                    <div class="box  " style="background-color: rgba(109, 233, 27, 0.3);">
                        <label class="" for="">Infants:</label>
                        <div class="dec btn">-</div>
                        <input value="0" type="number" name="inf" id="inf" readonly>
                        <div class="inc btn">+</div>
                    </div>
                </div>
            </form>
            </div>
            <!-- End form "booking"-->

            <!-- Start Form Manage My Booking -->
            <div class="tab-pane fade" id="manage_my_booking" role="tabpanel" aria-labelledby="manage_my_booking-tab">

                <form class="row d-flex text-white font-weight-bolder border">
                    <!-- Input origin -->
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Booking Reference: </span>
                            </div>
                            <input type="text" class="form-control" aria-label="booking">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-arrow-down"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">First Name</span>
                            </div>
                            <input type="text" class="form-control" aria-label="first name">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-arrow-down"></i></span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- End other tab -->
        </div>
    </div>

</div>

<div class="row container newsContainer">

    @foreach($news as $n)

    <div class="col-lg-6 border border-success m-0 p-2">
        <a href="">
            <img src="{{$n -> image}}" width="100%" class="z-depth-0" alt="">
            <h3 class="newsTitle">{{$n->title}}</h3>
            <div class="newsJumpArrow text-light font-weight-bold">
                <a href="">
                    <span class="d-block pb-2 text-light">Let's Go</span>
                    <li class="far fa-arrow-alt-circle-right d-block m-1 p-0 text-light font-weight-bold"></li>
                </a>
            </div>
        </a>
    </div>
    @endforeach
</div>
@include('airfpt.subcribe_panel')
@endsection