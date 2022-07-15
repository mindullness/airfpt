@extends('airfpt.layout.layout')
@section('title', 'manage booking')
@section('content')
<div class="container d-flex justify-content-center form-wrapper mt-5" ">
    <div class="form-container col-md-5 mt-5">
        <h1 class="form-title mb-4 text-center">Manage my Booking</h1>
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
                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">Show booking</button>
            </div>
        </form>
    </div>
</div>
@endsection