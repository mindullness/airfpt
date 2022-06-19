<!-- Register panel Modal -->
<div style=" box-shadow: 0px 0px 15px black;" class="container-fluid py-3 register-panel">
    <div class="row align-content-center w-50 m-auto">
        <div class="col-md-9 text-left h3">
            REGISTER NOW
            <h5>For Experiencing <span class="text-white font-weight-bold h3"> 3-Days Trial-Pass </span></h5>
        </div>
        <button type="button" class="col-md-3 mb-4 mt-2 btn btn-primary font-weight-bolder " data-toggle="modal" data-target="#staticBackdrop">
            REGISTER</button>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-secondary text-warning">
            <div class="modal-header bg-dark bg-image" style="background-image: url('images/logo.png');background-size: contain; background-repeat: no-repeat;">
                <button type="button" class="close text-warning" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="" method="get">
                <div class="modal-body row">
                    <picture class="col"><img src="images/home/sport.jpg" class="img-fluid img-thumbnail bg-transparent border-0 shadow rounded" alt=""></picture>
                    <div class="col">
                        <h5>Bring your friends to extend a full-week</h5>
                        <hr>
                        <input class="form-control" type="text" class="name" id="name" placeholder="Your Name" required autocomplete="off" minlength="6" maxlength="30">
                        <br>
                        <input type="tel" class="form-control" autocomplete="off" name="telNo" id="telNo" placeholder="Your Phone Number" minlength="9" maxlength="12" pattern="[0-9]{}" required>
                        <br>
                        <input type="email" class="form-control" id="email" placeholder="Your email">
                        <br>
                        <input type="text" class="form-control" id="address" placeholder="Your Address">
                    </div>
                </div>
                <div class="modal-footer bg-dark">
                    <button type="submit" class="btn btn-danger">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal -->
<!-- Footer -->
<div class="container">
    <footer class="mt-5 border-0 sticky-bottom">
        <!-- Class .footer -->
        <div class="row m-auto footer">

            <div class="col-md-6 col-lg-3 "><br>
                <h4>INFORMATION</h4>
                <hr class="bg-primary w-25 ml-0">
                <p><i class="fas fa-map-marker-alt"></i> Headquater <br> 590 Cach Mang Thang Tam, District 3, HCM City </p>
                <p><i class="fa fa-phone-alt"></i> Hotline: <a href="tel:(028)38460846" class="h2 font-weight-bold" style="color: rgb(255, 199, 9); text-shadow: 0px 0px 1px black">(028)38460846</a> </p>
                <p><i class="fas fa-envelope "></i> Customer Service: <a href="mailto:info@pfg.com " class="btn btn-outline-warning text-monospace">customerservice@airfpt.vn</a></p>
                <p>
                <div class="d-block mt-3">
                    <div class="d-inline-flex justify-content-between h3">
                        <a href="# "> <i class="fa fa-facebook"></i> </a>&ThickSpace;
                        <a href="# "> <i class="fa fa-twitter"></i> </a>&ThickSpace;
                        <a href="# "> <i class="fa fa-instagram"></i> </a>&ThickSpace;
                        <a href="# "> <i class="fa fa-youtube-play"></i> </a> &ThickSpace;
                        <a href="#"> <i class="fa fa-github-square"></i> </a>
                    </div>
                </div>
                </p>
            </div>
            <div class="col-md-6 col-lg-3"><br>
                <h4>AIR FPT</h4>
                <hr class="bg-primary w-25 ml-0">
                <p><a href="">About Us</a></p>
                <p><a href="">News</a></p>
                <p><a href="">Destinations</a></p>
            </div>
            <div class="col-md-6 col-lg-3"><br>
                <h4>CONTACT</h4>
                <hr class="bg-primary w-25 ml-0">
                <p><a href="#">Contact</a></p>    
            </div>
            <div class="col-md-6 col-lg-3"><br>
                <h4>SUPPORT</h4>
                <hr class="bg-primary w-25 ml-0">
                <p><a href="">Terms & Conditions</a></p>
                <p><a href="#">FAQs</a></p>
                <p><a href="#">Irregular Flight</a></p>   
            </div>
        </div>
        <hr class="bg-primary d-block w-25 mr-auto mb-4 mt-0">

    </footer>

</div>
<div class="py-3 container-fluid bg-light">
    <div class="container d-flex">
        <div class="logo pr-3 mr-3">
            <a href="{{Route('airfpt.index')}}"><img width="200" src="{{ asset('img/logo/prj_logo.png') }}" alt=""></a>
        </div>
        <div class="flex-grow-1 text-secondary text-muted ">
            <p>VIET NAM AIR FPT JOINT STOCK COMPANY <br>
                Business Registration Certificate, No. 030622180722, first time registration on 03 June 2022, revised for the third time on 18 Junly 2022, issued by Department of Planning Investment of Ho Chi Minh City</p>

            <h6 class="d-flex justify-content-between font-weight-bolder">
                <span>TERMS OF USE &copy; 2022 <a class="text-secondary" href="http://aptech.fpt.edu.vn/">FPT Aptech</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a class="text-secondary" href="{{route('airfpt.index')}}">WWW.AIRFPT.VN</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span>ALL RIGHTS RESERVED</span>
                <span class="ml-auto"><img width="90" src="{{asset('img/logo/dathongbao.png')}}" alt=""></span>
            </h6>
        </div>
    </div>
</div>
<!-- Footer -->