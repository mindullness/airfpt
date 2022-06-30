<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Routes')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1><img src="{{asset('img/route-icon.jpg')}}" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> &nbsp; Route Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Routes</li>
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
                    <a href="{{Route('admin.routes.create')}}" class="card-title btn btn-info shadow">Add New Route</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <span class="d-flex justify-content-start">
                        <span>Destinations: &nbsp;</span>
                        @foreach($dest as $d)
                        <span>'{{$d->iata_code}}' &nbsp;</span>
                        @endforeach
                    </span>
                    <table id="routes" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>FLIGHT NUMBER</th>
                                <th>ORIGIN</th>
                                <th>DESTINATION</th>
                                <th>TIME OF DEPARTURE</th>
                                <th>DURATION (Minutes)</th>
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
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="{{Route('admin.routes.update', $r->id)}}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{Route('admin.routes.delete', $r->id)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>FLIGHT NUMBER</th>
                                <th>ORIGIN</th>
                                <th>DESTINATION</th>
                                <th>TIME OF DEPARTURE</th>
                                <th>DURATION (Minutes)</th>
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
        $('#routes').DataTable({
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