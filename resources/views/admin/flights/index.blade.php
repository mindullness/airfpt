<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Flights')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1><img src="{{asset('img/flight-icon.png')}}" alt="" width="50" height="45" style="border-radius: 10px; padding-left:2px; opacity:0.8;"> &nbsp; Flight Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Flights</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{Route('admin.flights.create')}}" class="card-title btn btn-info shadow">Add New Flight</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="flights" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FLIGHT NUMBER</th>
                                <th>DEPARTURE DATE</th>
                                <th>ETD</th>
                                <th>GATE</th>
                                <th>A/C ID</th>
                                <th>FLIGHT STATUS</th>
                                <th>BASE PRICE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($flights as $key => $f)
                            <tr>
                                <td>{{ $f->id }}</td>
                                <td>{{ $f->flight_number }}</td>
                                <td>{{ $f->date }}</td>
                                <td>{{ $f->ETD }}</td>
                                <td>{{ $f->gate }}</td>
                                <td>{{ $f->ac_id }}</td>
                                <td>{{ $f->flight_status }}</td>
                                <td>{{ $f->base_price }}</td>
                                <td class="text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="{{Route('admin.flights.update', $f->id)}}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{Route('admin.flights.delete', $f->id)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>FLIGHT NUMBER</th>
                                <th>DEPARTURE DATE</th>
                                <th>ETD</th>
                                <th>GATE</th>
                                <th>FLIGHT STATUS</th>
                                <th>BASE PRICE</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#flights').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
</script>
@endsection