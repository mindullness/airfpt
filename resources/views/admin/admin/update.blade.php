<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Update {{$admin->username}} Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('admin.admin.postUpdate',$admin->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Admin Name</label>
                                <input value="{{$admin->username}}" id="admin_username" name="username" type="text" class="form-control" placeholder="{{$admin->username}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input value="" type="text" class="form-control" id="admin_password" name="password" placeholder="********">
                            </div>
                            <div class="form-group">
                                <label for="city">Role (number)</label>
                                <input value="{{$admin->role}}" type="text" class="form-control" id="admin_role" name="role" placeholder="{{$admin->role}}">
                            </div>
                            <div class="form-group">
                                <label for="city">Permission</label>
                                <input value="{{$admin->permission}}" type="text" class="form-control" id="admin_permission" name="permission" placeholder="{{$admin->permission}}">
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