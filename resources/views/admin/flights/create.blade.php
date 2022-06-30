<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Routes')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Add New Route</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/routes/postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Flight Number</label>
                                <input type="text" class="form-control" id="id" name="id" placeholder="Flight number">
                            </div>
                            <div class="form-group">
                                <label for="Destination">Origin</label>
                                <select name="origin" id="origin" class="form-control ">
                                    <option value="">From</option>
                                    @foreach($dest as $d)
                                    <option value="{{$d->iata_code}}">{{$d->iata_code}} - {{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Destination">Destination</label>
                                <select name="destination" id="destination" class="form-control ">
                                    <option value="">To</option>
                                    @foreach($dest as $d)
                                    <option value="{{$d->iata_code}}">{{$d->iata_code}} - {{$d->name}}</option>
                                    @endforeach
                                </select>
                                @error('destination')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="depart_time">Time of Departure</label>
                                <input type="text" class="form-control" id="depart_time" name="depart_time" placeholder="Time of Departure">
                                @error('depart_time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
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