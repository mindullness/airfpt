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
                        <h3 class="card-title">Update Flight AF{{$f->flight_number}} - {{$f->date}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ Route('admin.flights.postUpdate',$f->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">ID</label>
                                <input type="text" class="form-control" id="txt-id" name="id" value="{{ $f->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-number">Flight number</label>
                                <select name="number1" id="number" class="form-control" readonly>
                                    <!-- <option value="{{ $f->flight_num }}">{{ $f->flight_num }}</option> -->
                                    <!-- @foreach($flight_num as $num) -->
                                    <option value="{{$f->flight_number}}">{{$f->flight_number}}</option>
                                    <!-- @endforeach -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-date">Date</label>
                                <input type="date" class="form-control" id="txt-date" name="date" value="{{ $f->date }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-etd">ETD</label>
                                <input type="time" class="form-control" id="txt-etd" name="etd" value="{{ $f->etd }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-gate">Gate</label>
                                <input type="text" class="form-control" id="txt-gate" name="gate" value="{{ $f->gate }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-acid">AC ID</label>
                                <input type="text" class="form-control" id="txt-acid" name="acid" value="{{ $f->ac_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-status">Flight status</label>
                                <input type="text" class="form-control" id="txt-status" name="status" value="{{ $f->flight_status }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Base Price</label>
                                <input type="text" class="form-control" id="txt-price" name="price" value="{{ $f->base_price }}" readonly>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('admin/flights/index')}}" type="button" class="btn btn-primary">Back</a>
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
