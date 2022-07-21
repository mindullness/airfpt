<div>
    <div class="passenger_title bg-light rounded p-2">
        <li class="material-icons"> &#xe903;</li>
        <span class="">
            <h3 class="m-0 p-0">Select seats</h3>
            <h6 class="m-0 p-0">Please select seat for passengers</h6>
        </span>
    </div>
    <script>
        // var ob_flight_id='';
        // var ib_flight_id='';
        $("input[name=txt_ob_flight]").click(function() {
            ob_flight_id = $("input[name=txt_ob_flight]:checked").val();
            get_ob_flight(ob_flight_id);

        });
        // });
        // $("input[name=txt_ib_flight]").click(function() {
        //     ib_flight_id = $("input[name=txt_ib_flight]:checked").val();
        //     return ib_flight_id;
        // });
        var ob_flight_id = 11;
    </script>



    <?php

    foreach ($obFlights as $ob)
    ?><h2><?php
        //     $test = "<script>document.write(ob_flight_id);</script>";

        //     $obid= strval($ob->id);
        //     echo 'Type obid: '.gettype($obid)."<br>";
        //     echo 'Value obid: '.$obid."<br>";
        //     echo 'Type test: '.gettype($test)."<br>";
        //     echo 'Test: '.$test. '<br>';
        //     echo 'Sizeof obFlights: '.sizeof($obFlights). '<br>';
        // if (strcmp($obid, $test) === 0) {
        //     echo 'Success' . $ob->flight_number;
        // }else{
        //     echo 'Failed';
        // }
            ?></h2><?php  ?>
    <?php $__currentLoopData = $obFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    // $idob = $ob->id;
    // $idob = strval($idob);

    // echo 'Type idob: '.gettype($idob)."<br>";
    // echo 'Value idob: '.$idob."<br>";
    // echo 'Type test: '.gettype($test)."<br>";
    // echo 'Test: '.$test. '<br>';

    // if ( $idob == $test) {
    //     echo 'Success' . $ob->flight_number;
    // }else{
    //     echo 'Failed';
    // }
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php
    $ob_checkFile = './sm/sm_flights/2022-07-28-121-Y180.json';
    // is_file($checkFile) ? $seatmap_file = file_get_contents($checkFile) : $seatmap_file = file_get_contents('sm/sm_flights/'.preg_match(, $str) . '*.json');
    $seatmap_file = file_get_contents($ob_checkFile);
    $seatmap = json_decode($seatmap_file, true);
    ?>
    <div class="bg-light rounded">
        <div class="d-md-flex d-block justify-content-center p-3">

            <?php if(sizeof($obFlights)!=0): ?>
            <div class="ob_seat border pb-2">
                <h6 class="m-0 p-2"><?php echo e($ori_airports->city); ?> <b>(<?php echo e($ori_airports->iata_code); ?>)</b> &nbsp; to &nbsp; <?php echo e($dest_airports->city); ?> <b>(<?php echo e($dest_airports->iata_code); ?>)</b></h6>
                <hr>
                <div class="ob_seat_pax">

                </div>
                <button type="button" id="testclick" class="btn btn-primary d-block m-auto" data-toggle="modal" data-target="#ob_seat_backdrop">Select</button>

                <!-- Modal -->
                <div class="modal fade" id="ob_seat_backdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ob_seat_backdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ob_seat_backdropLabel">Selecting seat for <?php echo e($ori_airports->iata_code); ?> - <?php echo e($dest_airports->iata_code); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <!-- SEATMAP OUTBOUND FLIGHT HERE -->
                                <!-- include('airfpt.booking.select_seat') -->
                                <!-- END SEATMAP OUTBOUND FLIGHT MODAL -->
                            </div>
                            <!-- .End /div modal-body -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End modal ob_seat -->
            </div>
            <!-- End ob_seat content <div> -->
            <?php endif; ?>
            <?php if(!empty($ibFlights)): ?>
            <div class="ib_seat border pb-2 ml-auto">
                <h6 class="m-0 p-2"><?php echo e($dest_airports->city); ?> <b>(<?php echo e($dest_airports->iata_code); ?>)</b> &nbsp; to &nbsp; <?php echo e($ori_airports->city); ?> <b>(<?php echo e($ori_airports->iata_code); ?>)</b></h6>
                <hr>
                <div class="ib_seat_pax">

                </div>
                <button type="button" onclick="displayRadioValue();" class="btn btn-primary d-block m-auto" data-toggle="modal" data-target="#ib_seat_backdrop">Select</button>


                <!-- Modal -->
                <div class="modal fade" id="ib_seat_backdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ib_seat_backdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ib_seat_backdropLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End modal ib_seat -->
            </div>
            <!-- End ib_seat <div> -->
            <?php endif; ?>
        </div>


    </div>


</div><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/booking/tab3_add_ons.blade.php ENDPATH**/ ?>