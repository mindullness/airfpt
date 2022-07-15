<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><img src="{{asset('img/airport-icon.jpg')}}" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> Admin Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Air-FPT</a></li>
                    <li class="breadcrumb-item active">Admin List</li>
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
                    <a href="{{Route('admin.admin.create')}}" class="card-title btn btn-info shadow">Add New Admin</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="product" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ADMIN</th>
                                <th>ROLE</th>
                                <th>PERMISSION</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $key => $admin)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ $admin->role }}</td>
                                <td>{{ $admin->permission }}</td>
                                <td class="mw-25 h-25"><img style="max-width: 128px;" src="#" /></td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{Route('admin.admin.update', $admin->id)}}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{Route('admin.admin.delete', $admin->id)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>#</th>
                                <th>ADMIN</th>
                                <th>ROLE</th>
                                <th>PERMISSION</th>
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
        $('#admin').DataTable({
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