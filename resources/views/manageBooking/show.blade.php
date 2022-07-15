@extends('airfpt.layout.layout')
@section('title', 'show booking')
@section('content')
<div style="margin-top:98px;">
<?php if (count($booking) === 0) { ?>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">No booking available!</h4>
            <p>Please make sure you have entered your Booking reference and Last name correctly.</p>
            <hr>
            <a class="btn btn-danger" href="{{Route('manageBooking.index')}}" role="button">Cancel</a>
        </div>
    </div>
<?php } else { ?>
    <h3 class="text-center mt-4">Passenger name record: {{$pnr}}</h3>
    <div class="container mt-4" style="display: flex; flex-direction: column-reverse;">
        <table class="table table-tripped table-bordered">
            <thead class="table-header">
                <tr>
                    <!-- <th>Passenger Name Record</th> -->
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Flight number</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure time</th>
                    <th>Duration</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-body">
                <form action="{{Route('manageBooking.seat')}}">
                    @foreach($booking as $booking)
                    <input class="inputFltNum" style="display: none;" type="text" name="flightNum" value="{{$booking->flight_number}}">
                    @if($booking->status === "confirmed")
                    <tr>
                        <!-- <td>{{$booking -> PNR}}</td> -->
                        <td>{{$booking -> first_name}}</td>
                        <td>{{$booking -> last_name}}</td>
                        <td>{{$booking -> flight_number}}</td>
                        <td>{{$booking -> origin}}</td>
                        <td>{{$booking -> destination}}</td>
                        <td>{{$booking -> depart_time}}</td>
                        <td>{{$booking -> duration}}</td>
                        <td>
                            <input class="checkboxInput inputFltNum{{$booking->flight_number}}" type="checkbox" data-fltNum="{{$booking->flight_number}}" name="bookingId[]" value="{{$booking->id}}">
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    <button type="submit" class="btn btn-primary col-md-4 offset-md-4">Continue</button>
                </form>
            </tbody>
        </table>
    </div>
<?php } ?>
</div>
@endsection
