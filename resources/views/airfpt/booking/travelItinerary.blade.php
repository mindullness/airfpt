@extends('airfpt.layout.layout')
@section('title', 'AirFPT')
@section('content')
<div class="container bg-light py-3 px-5 rounded" style="margin-top: 120px;">
    <div class="d-flex justify-content-between">
        <img width="390" src="{{ asset('img/logo/prj_logo.png') }}" alt="">
        <h1 class="align-self-center " style="font-family: 'Courier New', monospace;">Travel Itinerary</h1>
    </div>
    <div class="row mt-4 d-flex justify-content-between px-3 ">
        @foreach ($bookings as $b)
        @if($loop->first)
        <table class="col-6 mr-auto">
            <tr>
                <th>Name </th>
                <td>: {{ $b->last_name }} &nbsp;{{$b->first_name}}<small> (primary passenger)</small> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: {{$b->email}}</td>
            </tr>
            <tr>
                <th>Booking date</th>
                <td>: {{date("l, d M Y", strtotime("$b->created_at"))}}</td>
            </tr>
            <tr>
                <?php $totalPaid = 0;
                foreach ($bookings as $b) {
                    $totalPaid += $b->price;
                }
                ?>
                <th>Total paid</th>
                <td>:  {{number_format("$totalPaid",0, "," , ".")}}<sub class="align-top">đ &nbsp;</sub>VND</td>
            </tr>
        </table>
        @endif
        @endforeach
        <div class="col-auto text-center">
            <h5><b> Booking number </b></h5>
            <img class="mt-0 pt-0" width="120" src="{{ asset('img/logo/barcode_test.jpg') }}" alt="">
            <h1 class="text-primary font-weight-bold">{{$b->PNR}}</h1>
        </div>
    </div>
</div>
<!-- End header of Itinerary -->
<!-- Body of Itinerary -->
<div class="container bg-light py-3 px-5 rounded mt-2">
<a href="#" class="text-primary d-flex justify-content-end"><b> Itinerary details </b><small>&nbsp;<li class="fa fa-arrow-down align-bottom"></li></small></a>
</div>



@include('airfpt.subcribe_panel')

@endsection