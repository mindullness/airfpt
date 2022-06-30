<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Aircrafts')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><img src="{{asset('img/Aircraft-icon.jpg')}}" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> Aircraft Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Aircrafts</li>
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
                    <a href="{{Route('admin.aircrafts.create')}}" class="card-title btn btn-info shadow">Add New Aircraft</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="aircrafts" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>A/C ID</th>
                                <th>A/C REGISTRATION</th>
                                <th>A/C CONFIGURATION</th>
                                <th>A/C TYPE</th>
                                <th>A/C IMAGE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aircrafts as $key => $acrt)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $acrt->id }}</td>
                                <td>{{ $acrt->reg }}</td>
                                <td>{{ $acrt->config }}</td>
                                <td>{{ $acrt->type }}</td>
                                <td><img class="rounded" width="100px" src="{{ url('img/acrt/'.$acrt->image) }}" /></td>
                                <td class="text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="{{Route('admin.aircrafts.update', $acrt->id)}}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{Route('admin.aircrafts.delete', $acrt->id)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>A/C ID</th>
                                <th>A/C REGISTRATION</th>
                                <th>CONFIGURATION</th>
                                <th>A/C TYPE</th>
                                <th>A/C IMAGE</th>
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
        $('#aircrafts').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
</script>
@endsection