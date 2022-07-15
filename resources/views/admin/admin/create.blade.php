<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Airports')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Add New Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/admin/postCreate')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="iata_code">Admin name</label>
                                <input type="text" class="form-control" id="admin_username" name="username" placeholder="admin name">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="text" class="form-control" id="admin_password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="city">Role</label>
                                <input type="text" class="form-control" id="admin_role" name="role" placeholder="Role(number)">
                            </div>
                            <div class="form-group">
                                <label for="city">Permission</label>
                                <input type="text" class="form-control" id="admin_permission" name="permission" placeholder="Permission">
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