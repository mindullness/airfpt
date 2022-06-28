<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt routes')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Update  Flight Number AF{{$route->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('admin.routes.postUpdate', $route->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Flight Number</label>
                                <input value="{{$route->id}}" id="id" name="id" type="text" class="form-control" placeholder="{{$route->id}}">
                            </div>
                            <div class="form-group">
                                <label for="origin">Origin</label>
                                <input value="{{$route->origin}}" type="text" class="form-control" id="origin" name="origin" placeholder="Origin">
                                @error('origin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination</label>
                                <input value="{{$route->destination}}" type="text" class="form-control" id="destination" name="destination" placeholder="Destination">
                                @error('destination')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="depart_time">Time of Departure</label>
                                <input value="{{$route->depart_time}}" type="text" class="form-control" id="depart_time" name="depart_time" placeholder="Time of Departure">
                                @error('depart_time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Duration">Duration</label>
                                <input value="{{$route->duration}}" type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
                                @error('duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection