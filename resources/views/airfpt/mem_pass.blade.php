@extends('airfpt.layout.layout')
@section('title', 'Reset Password')
@section('content')
<div class="container">
  <br>

  <center>
    <h2>Reset Password</h2>
    <hr>
  </center>
  <div class="container">
  <div>You will be sent an e-mail to reset your password.</div>
  <div>Please enter your registered e-mail address and tap "Send".</div><br>
    <div class="row">
      <div class="col-md-6">
        <form action="" class="px-3 py-3 bg-light">
            <label for="username">Email</label>
            <div class="form-group input-group">
                <small class="input-group-prepend">
                <span class="input-group-text text-secondary"><i class="fa fa-envelope"></i></span>
                </small>
                <input name="" id="" type="email" class="form-control" required placeholder="email">
            </div>
          <button type="submit" class="btn btn-primary">Send</button>
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