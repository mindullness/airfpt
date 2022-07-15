<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt News')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
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
                    <h3 class="card-title">FEEDBACKS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                
                                <th>Member Id</th>
                                <th>Member name</th>
                                <th>Comment</th>
                                <th>Reply</th>
                                <th>Post date</th>
                                <th>Update date</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->mem_id }}</td>
                                <td>{{ $c->user_name }}</td>
                                <td>{{ $c->comment }}</td>
                                <td>{{ $c->reply }}</td>
                                <td>{{ $c->created_at }}</td> 
                                <td>{{ $c->updated_at }}</td>

                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ Route('admin.comment.reply',$c->id) }}">
                                        <i class="fas fa-folder"></i> Reply
                                    </a>

                                    <a class="btn btn-danger btn-sm" href="{{ Route('admin.comment.delete_cmt',$c->id) }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

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
        $('#product').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection