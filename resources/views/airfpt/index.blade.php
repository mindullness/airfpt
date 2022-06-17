@extends('airfpt.layout.layout')
@section('title', 'Elequent Products Site')
@section('content')

<style>
    .carousel-item>img {
        object-fit: cover;
        width: 100%;
        height: 800px;
    }

    .container-fluid {
        height: 600px;
        width: 100%;
    }

    .indexForm {
        background: rgba(0, 0, 0, 0.6);
        padding: 25px;
        border-radius: 5px;

    }
    .newsContainer{
        margin: 230px auto auto auto;
        display: block;
        border: cadetblue 1px solid;
        background-color: lightskyblue;
    }
</style>

<div class="row justify-content-center">

    <div class="container-fluid">

        <div id="indexCarousel" class="carousel slide z-depth-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel1.jpg')}}" height="800px" alt="">
                </div>
                <div class="carousel-item active">
                    <img src="{{asset('./img/carousel2.jpg')}}" height="800px" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('./img/carousel3.jpg')}}" height="800px" alt="">
                </div>
            </div>
            <a href="#indexCarousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#indexCarousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </div>

    <div class=" position-absolute container d-flex p-2 justify-content-center">
        <form class="indexForm row mt-5 text-white">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-4">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="row  newsContainer">
    <div class="promo-banner">
        <div class="col-md-6 col-sm-6">
            <div class="box-banner">
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

    @endsection