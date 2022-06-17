@extends('airfpt.layout.layout')
@section('title', 'Elequent Products Site')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brand List</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo asset('./css/index.css')?>" type="text/css">


</head>

<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{asset('images/f1.png')}}" style=" width:100%; height: 550px ;">
          <div class="carousel-caption">
            <h3 style="text-align: left; color: grey;box-shadow: lightslategray;">
              Quảng cáo trên máy bay Vietravel Airlines
            </h3>
            <p><a class="btn btn-primary" style="float: left;" href="" role="button" target="_blank">Xem
                Ngay</a></p>
          </div>
        </div>

        <div class="item">
          <img src="{{asset('images/f2.png')}}" style=" width:100%; height: 550px ;">
          <div class="carousel-caption">
            <h3>

            </h3>
            <p><a class="btn btn-primary" href="" role="button" target="_blank">Xem Ngay</a></p>
          </div>
        </div>

        <div class="item">
          <img src="{{asset('images/f3.png')}}" style=" width:100%; height: 550px ;">
          <div class="carousel-caption">
            <h3>

            </h3>
            <p><a class="btn btn-primary" href="" role="button" target="_blank">Xem Ngay</a></p>

          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  </div>
      <div class="area promotion">
        <div class="container">
          <div class="row">
            <div class="row">
              <div class="promo-banner">
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1654049321928.png"
                        class="img-responsive" alt="LỄ BỔ NHIỆM PHÓ TỔNG GIÁM ĐỐC VIETRAVEL AIRLINES" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-bo-nhiem-hai-pho-tong-giam-doc-moi-421">LỄ
                          BỔ NHIỆM PHÓ TỔNG GIÁM ĐỐC VIETRAVEL AIRLINES<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-bo-nhiem-hai-pho-tong-giam-doc-moi-421"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1639738557351.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES THUỘC SỞ HỮU VIETRAVEL HOLDINGS" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-chuyen-nhuong-von-gop-tai-vietravel-airlines-cho-vietravel-holdings-376">VIETRAVEL
                          AIRLINES THUỘC SỞ HỮU VIETRAVEL HOLDINGS<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-chuyen-nhuong-von-gop-tai-vietravel-airlines-cho-vietravel-holdings-376"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1640752081694.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES ĐƯỢC GIA HẠN AOC" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-duoc-gia-han-giay-chung-nhan-nha-khai-thac-tau-bay-380">VIETRAVEL
                          AIRLINES ĐƯỢC GIA HẠN AOC<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-duoc-gia-han-giay-chung-nhan-nha-khai-thac-tau-bay-380"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1643418758265.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES KIẾN NGHỊ MỞ CỬA DU LỊCH" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-kien-nghi-thu-tuong-chinh-phu-thoi-diem-mo-cua-du-lich-quoc-te-tai-viet-nam-391">VIETRAVEL
                          AIRLINES KIẾN NGHỊ MỞ CỬA DU LỊCH<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-kien-nghi-thu-tuong-chinh-phu-thoi-diem-mo-cua-du-lich-quoc-te-tai-viet-nam-391"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1646644884418.png"
                        class="img-responsive" alt="SPA TRÊN ĐỘ CAO 10000M CÙNG VIETRAVEL AIRLINES" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-tung-ra-chuong-trinh-trai-nghiem-dich-vu-spa-clinic-tren-khong-lan-dau-tien-tai-viet-nam-nhan-ngay-quoc-te-phu-nu-08-03-396">SPA
                          TRÊN ĐỘ CAO 10000M CÙNG VIETRAVEL AIRLINES<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-tung-ra-chuong-trinh-trai-nghiem-dich-vu-spa-clinic-tren-khong-lan-dau-tien-tai-viet-nam-nhan-ngay-quoc-te-phu-nu-08-03-396"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1647411645181.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES MỞ BÁN CHẶNG BAY MỚI TỪ HÀ NỘI" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-mo-ban-chang-ha-noi-quy-nhon-va-ha-noi-da-nang-gia-uu-dai-chi-tu-4300-vnd-400">VIETRAVEL
                          AIRLINES MỞ BÁN CHẶNG BAY MỚI TỪ HÀ NỘI<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-mo-ban-chang-ha-noi-quy-nhon-va-ha-noi-da-nang-gia-uu-dai-chi-tu-4300-vnd-400"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1649564339611.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES DẪN ĐẦU TỶ LỆ CẤT CÁNH ĐÚNG GIỜ" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-dan-dau-ty-le-cat-canh-dung-gio-toan-nganh-hang-khong-trong-quy-i-2022-407">VIETRAVEL
                          AIRLINES DẪN ĐẦU TỶ LỆ CẤT CÁNH ĐÚNG GIỜ<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-dan-dau-ty-le-cat-canh-dung-gio-toan-nganh-hang-khong-trong-quy-i-2022-407"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1650605789794.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES MỞ RỘNG ĐƯỜNG BAY TỪ THỦ ĐÔ" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-mo-rong-duong-bay-tu-thu-do-noi-dai-hanh-trinh-trai-nghiem-dip-he-2022-411">VIETRAVEL
                          AIRLINES MỞ RỘNG ĐƯỜNG BAY TỪ THỦ ĐÔ<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-mo-rong-duong-bay-tu-thu-do-noi-dai-hanh-trinh-trai-nghiem-dip-he-2022-411"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1651744431941.png"
                        class="img-responsive" alt="HÃNG HÀNG KHÔNG CHÍNH THỨC SEA GAMES 31 " /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlinestro-thanh-hang-hang-khong-chinh-thuc-dai-hoi-the-thao-dong-nam-a-lan-thu-31-415">HÃNG
                          HÀNG KHÔNG CHÍNH THỨC SEA GAMES 31 <br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlinestro-thanh-hang-hang-khong-chinh-thuc-dai-hoi-the-thao-dong-nam-a-lan-thu-31-415"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1652689762979.png"
                        class="img-responsive" alt="KÝ KẾT HỢP TÁC VỚI HIỆP HỘI DU LỊCH GOLF" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-ky-ket-hop-tac-voi-hiep-hoi-du-lich-golf-viet-nam-419">KÝ
                          KẾT HỢP TÁC VỚI HIỆP HỘI DU LỊCH GOLF<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-ky-ket-hop-tac-voi-hiep-hoi-du-lich-golf-viet-nam-419"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1639901705038.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES TRỞ LẠI BẦU TRỜI" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-tro-lai-bau-troi-vao-ngay-19-12-377">VIETRAVEL
                          AIRLINES TRỞ LẠI BẦU TRỜI<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-tro-lai-bau-troi-vao-ngay-19-12-377"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1642767044301.png"
                        class="img-responsive" alt="VIETRAVEL AIRLINES KHAI TRƯƠNG ĐƯỜNG BAY QUI NHƠN" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-khai-truong-cac-duong-bay-moi-ket-noi-nhieu-tinh-thanh-pho-trong-ca-nuoc-389">VIETRAVEL
                          AIRLINES KHAI TRƯƠNG ĐƯỜNG BAY QUI NHƠN<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/vietravel-airlines-chinh-thuc-khai-truong-cac-duong-bay-moi-ket-noi-nhieu-tinh-thanh-pho-trong-ca-nuoc-389"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="box-banner">
                    <p class="thumb"><img
                        src="https://media.vietravelairlines.com/public/uploads/banners/1647862278534.png"
                        class="img-responsive" alt="TCBC V/V GHẾ MÁY BAY BỊ HƯ HỎNG" /></p>
                    <div class="info" style="cursor:pointer">
                      <h4 class="title"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/ve-viec-ghe-may-bay-bi-rach-do-tac-dong-cua-ngoai-luc-tren-chuyen-bay-vu450-ngay-21-03-2022-403">TCBC
                          V/V GHẾ MÁY BAY BỊ HƯ HỎNG<br /></a></h4>
                      <p class="read-more"><a
                          href="https://www.vietravelairlines.com/vn/vi/ve-vietravel-airlines/tin-tuc/ve-viec-ghe-may-bay-bi-rach-do-tac-dong-cua-ngoai-luc-tren-chuyen-bay-vu450-ngay-21-03-2022-403"
                          class="hoverArrow">Khám phá ngay
                          <!-- --> <span class="icon"><i class="fas fa-arrow-right"></i></span>
                        </a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div></div>
      <div></div>
    </div>
        </div>
      </div>
    </div>
  </div>
  
</html>
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