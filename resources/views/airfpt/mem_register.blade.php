@extends('airfpt.layout.layout')
@section('title', 'Term & Conditions')
@section('content')
<div class="container">
  <br>

  <center>
    <h2>Register </h2>
    <hr>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('success'))
        <p>{{Session::get('success')}}</p>
    @endif
        <form method="POST" action="{{Route('airfpt.mem_postRegister')}}" class="px-3 py-3 bg-light">
        {{csrf_field()}}
        <label for="username">First Name</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_first_name" id="" type="text" class="form-control" required placeholder="First name">
          </div>
          <label for="username">Last Name</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_last_name" id="" type="text" class="form-control" required placeholder="Last name">
          </div>
          <label for="username">Email</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-envelope"></i></span>
            </small>
            <input name="mem_email" id="" type="email" class="form-control" required placeholder="Email">
          </div>
          <label for="username">Username</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_username" id="" type="text" class="form-control" required placeholder="Username">
          </div>
          <label for="username">Password</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-key"></i></span>
            </small>
            <input name="mem_password" id="" type="password" class="form-control" required placeholder="Password">
          </div>
          <label for="username">Phone Number</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-phone"></i></span>
            </small>
            <input name="mem_phone" id="" type="text" class="form-control" required placeholder="Phone number">
          </div>
          <label for="gender">How should we call you?</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_title" id="" type="text" class="form-control" required placeholder="Mr/Ms/Mrs">
          </div>
          <div class="form-group input-group">
            <label class="checkbox-inline">
              <input type="checkbox" name="subscribe" value="yes" required> I have read and agreed with the <a href="{{Route('airfpt.term_con')}}">terms and conditions</a>.
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="px-3 py-3 bg-light" style="border-style: double;">
          <p>Don't have an account? <a href="{{Route('airfpt.mem_register')}}">Sign up</a>.</p>
          <p>Already have an account? <a href="{{Route('airfpt.mem_login')}}">Sign in</a>.</p>
          <p><a href="{{Route('airfpt.mem_pass')}}">Forgot your password?</a>
          <p><a href="{{Route('airfpt.customer_service')}}">Help.</a></p>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection