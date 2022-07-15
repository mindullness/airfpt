@extends('airfpt.layout.layout')
@section('title', 'Member Update')
@section('content')
@auth
<div class="container">
  <br>
  <center>
    <h2>Account Update</h2>
    <hr>
  </center>
  <div class="container px-3 py-3 bg-light">
    <div class="card-body">
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="card-header">
        <h3 class="card-title">Update Account Information</h3>
      </div>
      <form role="form" action="{{ Route('airfpt.mem_postUpdate',['airfpt'=>Auth::user()->id])}}" method="post"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
        <div class="form-group">
            <label for="username">First Name</label>
            <input value="{{Auth::user()->first_name}}" id="" name="mem_first_name" type="text" class="form-control"
              placeholder="{{Auth::user()->first_name}}">
          </div>
          <div class="form-group">
            <label for="username">Last Name</label>
            <input value="{{Auth::user()->last_name}}" id="" name="mem_last_name" type="text" class="form-control"
              placeholder="{{Auth::user()->last_name}}">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input value="{{Auth::user()->username}}" id="" name="mem_username" type="text" class="form-control"
              placeholder="{{Auth::user()->username}}">
          </div>
          <div class="form-group">
            <label for="name">Password</label>
            <input value="" type="password" class="form-control" id="" name="mem_password"
              placeholder="*******">
          </div>
          <div class="form-group">
            <label for="city">Email</label>
            <input value="{{Auth::user()->email}}" type="text" class="form-control" id="" name="mem_email"
              placeholder="{{Auth::user()->password}}">
          </div>
          <div class="form-group">
            <label for="city">Phone</label>
            <input value="{{Auth::user()->phone}}" type="text" class="form-control" id=""
              name="mem_phone" placeholder="{{Auth::user()->phone}}">
          </div>
          <div class="form-group">
            <label for="city">Title</label>
            <input value="{{Auth::user()->title}}" type="text" class="form-control" id=""
              name="mem_title" placeholder="{{Auth::user()->title}}">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <a href="{{Route('airfpt.mem_detail')}}">Return</a>
        </div>
        <div>
          <a href=""></a>
        </div>
      </form>
    </div>



@endauth
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection
    