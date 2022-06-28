<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Airports')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Airport Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Air-FPT</a></li>
                    <li class="breadcrumb-item active">Airport List</li>
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
                    <a href="{{Route('admin.airports.create')}}" class="card-title btn btn-info shadow">Add New Airport</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="product" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>FLIGHT NUMBER</th>
                                <th>ORIGIN</th>
                                <th>DESTINATION</th>
                                <th>TIME OF DEPARTURE</th>
                                <th>DURATION</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($routes as $key => $r)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->origin }}</td>
                                <td>{{ $r->destination }}</td>
                                <td>{{ $r->depart_time }}</td>
                                <td>{{ $r->duration }}</td>
                               <td class="text-right">
                                    <a class="btn btn-primary btnsm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                    <a class="btn btn-info btnsm" href="#">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btnsm" href="{{Route('admin.airports.delete', $airport->iata_code)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>IATA CODE</th>
                                <th>AIRPORT NAME</th>
                                <th>CITY/PROVINCE</th>
                                <th></th>
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
        $('#airports').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection