@extends('airfpt.layout.layout')
@section('title', 'boarding pass')
@section('content')
<div class="container boardingpass" style="margin-top: 120px;" id="boardingpass">
    <div class="row">
        <div class="col-md-6" style="text-transform: uppercase; font-weight: bold; font-size: 25px;">Passenger's Boarding pass</div>
        <div class="col-md-6" style="display: flex;flex-direction: column;align-items: flex-end; ">
            <div style="text-transform: uppercase; font-weight: bold; color: red; font-size: 17px;">for verification of entry requirements</div>
            <div>Please proceed to our Document Check Counter.</div>
        </div>
    </div>
    @foreach($bookings as $booking)
    <div class="boardingpass-container">
        @foreach($booking as $booking)
        <div class="boardingpass-left">
            <div class="boardingpass-left-item">
                <div class="boardingpass-name">{{$booking -> first_name}} {{$booking -> last_name}}</div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Departure</div>
                <div class="boardingpass-detail">
                    {{$booking -> origin}}
                </div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Arrive</div>
                <div class="boardingpass-detail">{{$booking -> destination}}</div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Booking no.</div>
                <div class="boardingpass-detail">{{$booking -> PNR}}</div>
            </div>
        </div>
        <div class="boardingpass-right">
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Flight no.</div>
                <div class="boardingpass-detail">AF {{$booking -> flight_number}}</div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Date</div>
                <div class="boardingpass-detail">{{$booking -> date}}</div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Boarding time</div>
                <div class="boardingpass-detail">{{$booking -> depart_time}}</div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Gate no.</div>
                <div class="boardingpass-detail">{{$booking -> gate}}</div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Seat no.</div>
                <div class="boardingpass-detail">{{$booking -> seat_no}}</div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    <div class="row" style="display: flex; align-items: center;">
        <div style="width: 100%; border-right: 1px solid #000;" class="col-md-6">
            <div style="font-size: 20px; margin-bottom: 10px; font-weight: bold;">Carry-on baggage</div>
            <img style="width: 100%; margin-bottom: 30px;" src="{{asset('images/1image-removebg-preview.png')}}" alt="">
        </div>
        <div style="width: 100%;" class="col-md-6">
            <div style="font-size: 20px; margin-bottom: 10px; font-weight: bold;">Airport guide: 4 easy steps!</div>
            <img style="width: 100%;" src="{{asset('images/image-removebg-preview.png')}}" alt="">
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
@endsection
