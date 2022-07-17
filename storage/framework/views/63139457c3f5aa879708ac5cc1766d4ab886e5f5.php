<!-- Footer -->
<footer class="container mt-5 border-0 sticky-bottom">

    <!-- Class .footer Contact Information -->
    <div class="row m-auto footer">

        <div class="col-md-6 col-lg-3 "><br>
            <h4>INFORMATION</h4>
            <hr class="bg-primary w-25 ml-0">
            <p><i class="fas fa-map-marker-alt"></i> Headquater <br> 590 Cach Mang Thang Tam, District 3, HCM City </p>
            <p><i class="fa fa-phone-alt"></i> Hotline: <a href="tel:(028)38460846" class="h2 font-weight-bold" style="color: rgb(0, 123, 255); text-shadow: 0px 0px 1px black">(028)38460846</a> </p>
            <p><i class="fas fa-envelope "></i> Customer Service: <a href="mailto:info@pfg.com " class="btn btn-outline-primary text-monospace">customerservice@airfpt.vn</a></p>
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
            <p><a href="<?php echo e(Route('airfpt.user.details', 1)); ?>">About Us</a></p>
            <p><a href="<?php echo e(Route('airfpt.user.homeNews')); ?>">News</a></p>
            <p><a href="<?php echo e(Route('airfpt.user.details', 4)); ?>">Destinations</a></p>
        </div>
        <div class="col-md-6 col-lg-3"><br>
            <h4>CONTACT</h4>
            <hr class="bg-primary w-25 ml-0">
            <p><a href="<?php echo e(route('airfpt.contact')); ?>">Contact</a></p>
        </div>
        <div class="col-md-6 col-lg-3"><br>
            <h4>SUPPORT</h4>
            <hr class="bg-primary w-25 ml-0">
            <p><a href="<?php echo e(Route('airfpt.term_con')); ?>">Terms & Conditions</a></p>
            <p><a href="<?php echo e(Route('airfpt.faqs')); ?>">FAQs</a></p>
            <p><a href="<?php echo e(Route('airfpt.customer_service')); ?>">Customer Care</a></p>
        </div>
    </div>
    <hr class="bg-primary d-block w-25 mx-auto mb-4 mt-0">

    <!-- Footer -->
</footer>

<!-- Button Back to top -->
<a id="back-to-top" href="#" class="btn btn-outline-primary btn-md " role="button"><i class="fas fa-chevron-up text-warning font-weight-bolder  align-bottom"></i></a>

<!-- Footer Company Info -->
<div class="py-3 sticky-bottom container-fluid bg-light mx-0 px-0">
    <div class="container d-md-flex">
        <div class="d-block d-md-flex">
            <a class="mx-2" href="<?php echo e(Route('airfpt.index')); ?>"><img width="180" src="<?php echo e(asset('img/logo/prj_logo.png')); ?>" alt=""></a>
        </div>
        <div class="flex-grow-1 text-secondary text-muted ">
            <p>VIET NAM AIR FPT JOINT STOCK COMPANY <br>
                Business Registration Certificate, No. 030622180722, first time registration on 03 June 2022, revised for the third time on 18 Junly 2022, issued by Department of Planning Investment of Ho Chi Minh City</p>

            <h6 class="d-flex flex-wrap justify-content-between font-weight-bolder">
                <span>TERMS OF USE &copy; 2022 <a class="text-secondary" href="http://aptech.fpt.edu.vn/">FPT Aptech</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a class="text-secondary" href="<?php echo e(route('airfpt.index')); ?>">WWW.AIRFPT.VN</a></span>
                &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span>ALL RIGHTS RESERVED</span>
                <span class="ml-auto"><img width="90" src="<?php echo e(asset('img/logo/dathongbao.png')); ?>" alt=""></span>
            </h6>
        </div>
    </div>
</div>

<script>
    // All pages: Button scroll Back-to-top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('#back-to-top').css('display', 'block');
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').css('display', 'none');
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function() {
        $(document.body).animate({
            scrollTop: 0
        }, 8000);
    });
</script><?php /**PATH E:\xampp\htdocs\AirFPT\resources\views/airfpt/layout/footer.blade.php ENDPATH**/ ?>