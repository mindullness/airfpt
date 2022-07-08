<!-- Subcribe panel Modal -->
<div class="container-fluid py-4 register-panel row">
    <div class="container">
        <h3 class="d-block align-content-center text-left">
            Do not miss out best offers from <b>Air FPT</b>
        </h3>
        <div class="form-group input-group input-group-lg pt-2">
            <small class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </small>
            <input name="email" id="email" type="email" class="form-control rounded-right" required placeholder="Enter your email address to receive our newsletters">

            <small class="input-group-append">
                <span class="input-group-text border-0 bg-transparent "> &nbsp;</span>
            </small>
            <button type="button" class=" text-white w-25 btn btn-outline-warning font-weight-bolder shadow-light rounded" data-toggle="modal" data-target="#staticBackdrop">
                SUBSCRIBE</button>
        </div>
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