@extends('airfpt.layout.layout')
@section('title', 'Flight status')
@section('content')
<div class="container mt-5">
    <div class="header-container">
        <h1 class="header">Flight Status</h1>
    </div>
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
    <?php if (isset($_GET['submit'])) { ?>
        <?php if (count($flight_status) === 0) { ?>
            <div class="container mt-4">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">No flight available!</h4>
                    <p>Please make sure you have entered your FLIGHT NUMBER and DEPARTURE DATE correctly.</p>
                </div>
            </div>
        <?php } else { ?>
            <div class="container mt-4">
                <table class="table table-tripped table-bordered col-md-8 offset-md-2">
                    <thead class="table-header">
                        <tr>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Flight number</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($flight_status as $flight)
                        <tr>
                            <td>{{$flight->origin}}</td>
                            <td>{{$flight->destination}}</td>
                            <td>{{$flight->flightNum}}</td>
                            <td>{{$flight->departure}}</td>
                            <td>{{$flight->arrival}}</td>
                            <td>{{$flight->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <?php } ?>
    <?php } ?>
</div>
@endsection