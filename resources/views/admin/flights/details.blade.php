<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('layout.layout')
@section('title', 'Flight - details')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <!-- <div class="card card-primary"> -->
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Flight {{$f->flight_num}} details
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Flight number</th>
                                    <th>Date</th>
                                    <th>ETD</th>
                                    <th>Gate</th>
                                    <th>AC ID</th>
                                    <th>Flight status</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $f->id }}</td>
                                    <td>{{ $f->flight_num }}</td>
                                    <td>{{ $f->date }}</td>
                                    <td>{{ $f->ETD }}</td>
                                    <td>{{ $f->gate }}</td>
                                    <td>{{ $f->ac_id }}</td>
                                    <td>{{ $f->flight_status }}</td>
                                    <td>{{ $f->base_price }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="offset-md-11 float-right mt-2">
                            <a href="{{url('flight/index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card-header -->

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