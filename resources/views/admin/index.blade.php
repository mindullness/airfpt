@extends('admin.layout.layout')
@section('title', 'Admin Air-Fpt Project')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="font-weight-bolder text-danger shadow p-3 text-center">AIR FPT MANAGEMENT </h1>
    <div class="container mt-5">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Passengers</h3>

                        <p>View Bookings</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-user-friends"></i>
                    </div>
                    <a href="{{Route('admin.passenger.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Flights</h3>

                        <p>View Flights</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon"><img class="align-text-top mt-0 pt-0" src="{{asset('img/flight-icon.png')}}" width="63" alt="" style="border-radius: 15px; opacity:0.8;"></i>
                    </div>
                    <a href="{{Route('admin.flights.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Airports</h3>

                        <p>View Airports</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon"><img class="align-text-top mt-0 pt-0" src="{{asset('img/airport-icon.jpg')}}" width="63" height="60" alt="" style="border-radius: 15px; opacity:0.8;"></i>
                    </div>
                    <a href="{{Route('admin.airports.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Aircrafts</h3>

                        <p>View Aircrafts</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon"><img class="align-text-top mt-0 pt-0" src="{{asset('img/aircraft-icon.jpg')}}" width="63" height="60" alt="" style="border-radius: 15px; opacity:0.8;"></i>
                    </div>
                    <a href="{{Route('admin.aircrafts.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Routes</h3>
                        <p>View Routes</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon"><img class="align-text-top mt-0 pt-0" src="{{asset('img/route-icon.jpg')}}" width="63" height="60" alt="" style="border-radius: 12px; opacity:0.6;"></i>
                    </div>
                    <a href="{{Route('admin.routes.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>News</h3>
                        <p>View News</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon"><img class="align-text-top mt-0 pt-0" src="{{asset('img/news-icon.jpg')}}" width="63" height="60" alt="" style="border-radius: 12px; opacity:0.9;"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- <div class="col-lg-3 col-6">
                
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-3 col-6">
                
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> -->
           
        </div>
        <!-- /.row -->
    </div>
</body>

</html>
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