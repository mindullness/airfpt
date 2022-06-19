@extends('airfpt.layout.layout')
@section('title', 'Elequent Products Site')
@section('content')

<div class="row justify-content-center py-2">

    <div class="container-fluid">

        <div id="indexCarousel" class="carousel carousel-fade slide overflow-hidden" data-pause="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('./img/carousel1.jpg')}}" height="800px" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel2.jpg')}}" height="800px" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel3.jpg')}}" height="800px" alt="">
                </div>
            </div>


            <a href="#indexCarousel" class="carousel-control-prev shadơw" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#indexCarousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>

    <div class="position-absolute container d-block  mt-4 justify-content-center">
        <!-- Start form -->
        <div class="indexForm container-fluid border-0">

            <!-- Tab navbar -->
            <ul id="indexFormTab" class="nav nav-tabs row text-center border-0" role="tablist">
                <li class="nav-item col-4 m-0 p-0 border-0">
                    <a class="nav-link active" id="booking-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="true">Booking Now</a>
                </li>
                <li class="nav-item col-4 m-0 p-0 border-0">
                    <a class="nav-link border-none" id="manage_my_booking-tab" data-toggle="tab" href="#manage_my_booking" role="tab" aria-controls="manage_my_booking" aria-selected="false">Manage Booking</a>
                </li>
                <li class="nav-item col-4 m-0 p-0 border-0">
                    <a class="nav-link border-none" id="flight_status-tab" data-toggle="tab" href="#flight_status" role="tab" aria-controls="flight_status" aria-selected="false">Flight Status</a>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content container-fluid pt-1 text-white font-weight-bolder" id="indexFormContent">

                <!-- Start Form Booking -->
                <form class="tab-pane fade show active container-fluid" role="tabpanel" aria-labelledby="booking-tab" id="booking">

                    <!-- Label departure -->
                    <label class="mt-2 d-flex justify-content-between mt-3" for="origin">
                        <span class="font-weight-bolder">Departure</span>
                        <span>
                            <div class="input-group input-group-lg font-weight-bolder">
                                <div class="form-check-inline mr-2 pr-2 ">
                                    <label class="form-check-label text-warning">
                                        <input type="radio" checked="checked" value="roundtrip" class="form-check-input roundtrip" name="isRoundTrip">Round-Trip
                                    </label>
                                </div>
                                <div class="form-check-inline ml-2 pl-2">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input oneway" value="oneway" name="isRoundTrip">One-Way
                                    </label>
                                </div>
                            </div>
                        </span>
                    </label>
                    <!-- Input Origin -->
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-plane-departure"></i></span>
                        </div>
                        <input name="origin" id="origin" type="text" class="form-control" placeholder="From">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                        </div>
                        <!-- Input depart_date -->
                        <input name="depart_date" id="depart_date" class="form-control" type="text" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <div class="input-group-append">
                            <span class="input-group-text">Outbound</span>
                        </div>
                    </div>

                    <!-- Input Destination -->
                    <label class="mt-2 font-weight-bolder" for="destination">Arrival</label>
                    <div class="input-group input-group-lg">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-plane-arrival"></i></span>
                        </div>
                        <input name="destination" id="destination" type="text" class="form-control" placeholder="To">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                        </div>
                        <!-- Input return_date -->
                        <input name="return_date" id="return_date" type="text" class="form-control" placeholder="Day-Month-Year" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <div class="input-group-append">
                            <span class="input-group-text"> &NonBreakingSpace; Inbound &NegativeThinSpace;</span>
                        </div>
                    </div>

                    <!-- Input Passenger -->
                    <label class="mt-2 font-weight-bolder pax " for="destination">Passenger</label>
                    <div class="input-group input-group-lg pax ">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                        </div>

                        <!-- Input Adult Children Infant -->
                        <div class="form-control">
                            <select name="paxCount" id="paxCount">
                                <optgroup label="Adult">

                                </optgroup>
                                <optgroup label="Children">
                                    <option value="">Mercedes</option>
                                </optgroup>
                                <optgroup label="Infant">
                                    <option value="">Mercedes</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- End Adult Children Infant -->
                        <div class="input-group-append d-lg-flex d-none">
                            <span class="input-group-text bg-light border-light mx-0 px-auto">Economy-Fare</span>
                        </div>
                        <div class="input-group-append d-md-flex d-none">
                            <span class="input-group-text rounded-right"><i class="fa fa-ticket-alt"></i></span>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text border-0 bg-transparent "> &nbsp;</span>
                        </div>
                        <input type="submit" value="SEARCH FLIGHTS" class="btn btn-primary  rounded font-weight-bolder">
                    </div>


                </form>

                <!-- End form "booking"-->

                <!-- Start Form Manage My Booking -->
                <div class="tab-pane fade" id="manage_my_booking" role="tabpanel" aria-labelledby="manage_my_booking-tab">

                    <form class="row d-flex text-white font-weight-bolder border">
                        <!-- Input origin -->
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Booking Reference: </span>
                                </div>
                                <input type="text" class="form-control" aria-label="booking">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-arrow-down"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name</span>
                                </div>
                                <input type="text" class="form-control" aria-label="first name">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-arrow-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- End other tab -->
            </div>
        </div>

    </div>
</div>

<!--  -->
<div class=" container newsContainer">
    <div class="promo-banner row">
        <div class="col-md-6 col-sm-6">
            <div class="">
                <p class="thumb"><img src="https://media.vietravelairlines.com/public/uploads/banners/1654049321928.png" class="img-responsive" alt="LỄ BỔ NHIỆM PHÓ TỔNG GIÁM ĐỐC VIETRAVEL AIRLINES" /></p>
                <div class="info" style="cursor:pointer">
                    <h4 class="title"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-bo-nhiem-hai-pho-tong-giam-doc-moi-421">LỄ
                            BỔ NHIỆM PHÓ TỔNG GIÁM ĐỐC VIETRAVEL AIRLINES<br /></a></h4>
                    <p class="read-more"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-bo-nhiem-hai-pho-tong-giam-doc-moi-421" class="hoverArrow">Khám phá ngay
                            <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box-banner">
                <p class="thumb"><img src="https://media.vietravelairlines.com/public/uploads/banners/1639738557351.png" class="img-responsive" alt="VIETRAVEL AIRLINES THUỘC SỞ HỮU VIETRAVEL HOLDINGS" /></p>
                <div class="info" style="cursor:pointer">
                    <h4 class="title"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-chuyen-nhuong-von-gop-tai-vietravel-airlines-cho-vietravel-holdings-376">VIETRAVEL
                            AIRLINES THUỘC SỞ HỮU VIETRAVEL HOLDINGS<br /></a></h4>
                    <p class="read-more"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-chuyen-nhuong-von-gop-tai-vietravel-airlines-cho-vietravel-holdings-376" class="hoverArrow">Khám phá ngay
                            <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box-banner">
                <p class="thumb"><img src="https://media.vietravelairlines.com/public/uploads/banners/1640752081694.png" class="img-responsive" alt="VIETRAVEL AIRLINES ĐƯỢC GIA HẠN AOC" /></p>
                <div class="info" style="cursor:pointer">
                    <h4 class="title"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-duoc-gia-han-giay-chung-nhan-nha-khai-thac-tau-bay-380">VIETRAVEL
                            AIRLINES ĐƯỢC GIA HẠN AOC<br /></a></h4>
                    <p class="read-more"><a href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-duoc-gia-han-giay-chung-nhan-nha-khai-thac-tau-bay-380" class="hoverArrow">Khám phá ngay
                            <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection