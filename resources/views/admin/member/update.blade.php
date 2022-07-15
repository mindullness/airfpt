<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Member')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Update {{$member->username}} Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('admin.member.postUpdate',$member->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input value="{{$member->last_name}}" id="member_username" name="last_name" type="text" class="form-control" placeholder="{{$member->last_name}}">
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input value="{{$member->first_name}}" id="member_username" name="first_name" type="text" class="form-control" placeholder="{{$member->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input value="{{$member->username}}" id="member_username" name="username" type="text" class="form-control" placeholder="{{$member->username}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="{{$member->email}}" id="member_username" name="email" type="email" class="form-control" placeholder="{{$member->email}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input value="" type="text" class="form-control" id="password" name="password" required placeholder="********">
                            </div>
                            <div class="form-group">
                                <label for="username">Phone</label>
                                <input value="{{$member->phone}}" id="member_username" name="phone" type="text" class="form-control" placeholder="{{$member->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="city">Role (0-1)</label>
                                <input value="{{$member->role}}" type="text" class="form-control" id="member_role" name="role" placeholder="{{$member->role}}">
                            </div>
                            <div class="form-group">
                                <label for="city">Points</label>
                                <input value="{{$member->points}}" type="text" class="form-control" id="member_points" name="points" placeholder="{{$member->points}}">
                            </div>
                            <div class="form-group">
                                <label for="">Discount Rate</label>
                                <input value="{{$member->discount_rate_id}}" id="member_username" name="discount" type="text" class="form-control" placeholder="{{$member->discount_rate_id}}">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input value="{{$member->title}}" id="member_username" name="title" type="text" class="form-control" placeholder="{{$member->title}}">
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