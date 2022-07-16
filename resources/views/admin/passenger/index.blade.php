<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout.layout')
@section('title', 'Passenger Booking')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-ticket-alt"></i> &nbsp; Passenger Name Record</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Passenger</a></li>
                    <li class="breadcrumb-item active">Bookings</li>
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

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="adminbookings" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PNR</th>
                                <th>LAST NAME</th>
                                <th>MID/FIRST NAME</th>
                                <th>GENDER</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $key => $b)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $b->PNR }}</td>
                                <td>{{ $b->last_name }}</td>
                                <td>{{ $b->first_name }}</td>
                                <td>{{ strtoupper($b->gender) }}</td>
                                <td>{{ number_format("$b->price", 0, "," , ".") }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>PNR</th>
                                <th>LAST NAME</th>
                                <th>MID/FIRST NAME</th>
                                <th>GENDER</th>
                                <th>PRICE</th>
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
        $('#adminbookings').DataTable({
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