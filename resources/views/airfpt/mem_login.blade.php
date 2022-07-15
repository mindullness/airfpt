@extends('airfpt.layout.layout')
@section('title', 'Login')
@section('content')
@guest
<div class="container">
  <br>
  <center>
    <h2>Login</h2>
    <hr>
    @if(session('alert'))
      <section class='alert alert-success'>{{session('alert')}}</section>
    @endif
    @if(session('alert2'))
      <section class='alert alert-success'>{{session('alert2')}}</section>
    @endif
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form method="POST" action="{{Route('airfpt.mem_postLogin')}}" class="px-3 py-3 bg-light">
        {{csrf_field()}}
        <label for="username">Username</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-envelope"></i></span>
            </small>
            <input name="mem_username" id="" type="text" class="form-control" required placeholder="username">
          </div>
          <label for="password">Password</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-key"></i></span>
            </small>
            <input name="mem_password" id="" type="password" class="form-control" required placeholder="password">
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
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

@endguest
@auth
<center>
    <hr>
    <h1>You're already logged-in</h1>
    <hr>
  </center>
@endauth
@endsection