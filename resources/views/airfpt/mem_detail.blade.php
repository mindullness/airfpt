@extends('airfpt.layout.layout')
@section('title', 'Member Detail')
@section('content')
@auth
<div class="container">
  <br>

  <center>
    <h2>Account Detail</h2>
    <hr>
  </center>
  <div class="container px-3 py-3 bg-light">
    <div class="card-body">
      <table id="product" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Information</th>
            <td>
              <a class="btn btn-info btn-sm" href="{{Route('airfpt.mem_update')}}">
                <i class="fas fa-pencil-alt"></i> Edit
              </a>
            </td>
          </tr>
          <tr>
            <th>First Name</th>
            <td>{{Auth::user()->first_name}}</td>
          </tr>
          <tr>
            <th>Last Name</th>
            <td>{{Auth::user()->last_name}}</td>
          </tr>
          <tr>
            <th>Username</th>
            <td>{{Auth::user()->username}}</td>
          </tr>
          <tr>
            <th>Password</th>
            <td>********</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{Auth::user()->email}}</td>
          </tr>
          <tr>
            <th>Phone</th>
            <td>{{Auth::user()->phone}}</td>
          </tr>
          <tr>
            <th>Title</th>
            <td>{{Auth::user()->title}}</td>
          </tr>
        </thead>
      </table>
    </div>
  </div>



  @endauth
  @endsection