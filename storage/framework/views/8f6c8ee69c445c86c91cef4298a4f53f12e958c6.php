<!-- 1. booking_tab 1: Select Flight -->
<div class=" ml-0 pl-0 ">
    <!-- Outbound Flight Information -->

    <div class="outbound_flight">
        <div class="outbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure icon_plane "></li>
            <span>
                <h3 class="m-0 p-0">Outbound Flight</h3>
                <h6 class="m-0 p-0"><?php echo e($ori_airports->city); ?> <b>(<?php echo e($ori_airports->iata_code); ?>)</b> &nbsp; To &nbsp; <?php echo e($dest_airports->city); ?> <b>(<?php echo e($dest_airports->iata_code); ?>)</b></h6>
            </span>
        </div>

        <?php if(sizeof($obFlights)!=0): ?>
        <!-- panel to show Date & Lowest Price -->
        <nav class="d-flex align-content-stretch justify-content-between p-2 bg-light rounded">
            <button class="obFlight_tab">Mon</button>
            <button class="obFlight_tab" id="defaultOpen">Tue</button>
            <button class="obFlight_tab">Wed</button>
            <button class="obFlight_tab">Thu</button>
            <button class="obFlight_tab">Fri</button>
            <button class="obFlight_tab">Sat</button>
            <button class="obFlight_tab">Sun</button>
        </nav>
        <?php $__currentLoopData = $obFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Foreach flight id -->

        <div id="Tue" class="obFlight_tabcontent bg-light my-3">

            <div class="w-75 flt_Info p-2">
                <div>
                    Flight Number: <b>AF<?php echo e($ob->flight_number); ?></b>
                </div>
                <div>


                    <span>Date:</span>
                    <span><b id="ob_date"><?php echo e(date("l, dMY", strtotime("$ob->date"))); ?></b></span>

                </div>
                <div>
                    <span><?php echo e(date("H:i", strtotime("$ob->depart_time"))); ?></span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-25"></small>
                        <span><?php echo e(floor($ob->duration/60)); ?> hrs <?php echo e($ob->duration%60); ?> mins</span><small class="border-bottom w-25"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>
                    <span><?php echo e(date("H:i", strtotime("$ob->depart_time") + (60*$ob->duration) )); ?></span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>
                        <span><?php echo e($ob->origin); ?></span> -
                        <span><?php echo e($ob->destination); ?></span>
                    </small>
                </div>
            </div>
            <div class="w-25 flt_price p-2 d-block text-center">
                <div>VND <?php echo e(number_format("$ob->base_price", 0, "," , ".")); ?></div>
                <input required type="radio" name="txt_ob_flight" value="<?php echo e($ob->id); ?>" onclick="show_ob_price('<?php echo e($ob->base_price); ?>');">
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Back to search</a>
        <?php else: ?>
        <h4 class="text-center bg-light rounded p-3">
            Sorry! There's none of flights matched your needs!
        </h4>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Back to search</a>
        <?php endif; ?>
    </div>

    <!-- End Outbound Flights -->

    <!-- Inbound Flight Information -->
    <!-- oneway or roundtrip CHECK -->
    <!-- empty(ibFlights) means this is a oneway flight -->
    <?php if(!empty($ibFlights)): ?>

    <div class="inbound_flight mt-5">
        <div class="inbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure fa-flip-horizontal icon_plane "></li>
            <span class="">
                <h3 class="m-0 p-0">Inbound Flight</h3>
                <h6 class="m-0 p-0"><?php echo e($dest_airports->city); ?> <b>(<?php echo e($dest_airports->iata_code); ?>)</b> &nbsp; To &nbsp; <?php echo e($ori_airports->city); ?> <b>(<?php echo e($ori_airports->iata_code); ?>)</b></h6>
            </span>
        </div>

        <?php if(sizeof($ibFlights)!=0): ?>
        <!-- panel to show Date & Lowest Price -->
        <nav class="d-flex align-content-stretch justify-content-between bg-light rounded p-2">
            <button class="obFlight_tab">Mon</button>
            <button class="obFlight_tab" id="defaultOpen">Tue</button>
            <button class="obFlight_tab">Wed</button>
            <button class="obFlight_tab">Thu</button>
            <button class="obFlight_tab">Fri</button>
            <button class="obFlight_tab">Sat</button>
            <button class="obFlight_tab">Sun</button>
        </nav>

        <?php $__currentLoopData = $ibFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ib): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Foreach flight id -->

        <div id="Tue" class="ibFlight_tabcontent bg-light my-3">

            <div class="w-75 flt_Info p-2">
                <div>
                    Flight Number: <b>AF<?php echo e($ib->flight_number); ?></b>
                </div>
                <div>


                    <span>Date:</span>
                    <span><b><?php echo e(date("l, dMY", strtotime("$ib->date"))); ?></b></span>

                </div>
                <div>
                    <span><?php echo e(date("H:i", strtotime("$ib->depart_time"))); ?></span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-25"></small>
                        <span><?php echo e(floor($ib->duration/60)); ?> hrs <?php echo e($ib->duration%60); ?> mins</span><small class="border-bottom w-25"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>
                    <span><?php echo e(date("H:i", strtotime("$ib->depart_time") + (60*$ib->duration) )); ?></span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>
                        <span><?php echo e($ib->origin); ?></span> -
                        <span><?php echo e($ib->destination); ?></span>
                    </small>
                </div>
            </div>
            <div class="w-25 flt_price p-2 d-block text-center">
                <div>VND <?php echo e(number_format("$ib->base_price",0, "," , ".")); ?></div>
                <input required type="radio" name="txt_ib_flight" value="<?php echo e($ib->id); ?>" onclick="show_ib_price('<?php echo e($ib->base_price); ?>');">
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Back to search</a>
        <?php else: ?>
        <h4 class="text-center bg-light rounded p-3">
            Sorry! There's none of flights matched your needs!
        </h4>
        <a href="<?php echo e(Route('airfpt.index')); ?>" class="btn btn-secondary">Back to search</a>
        <?php endif; ?>

    </div>
    <?php endif; ?>
    <!-- End If (oneway or roundtrip CHECK) -->
    <!-- End Inbound Flights -->

</div><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/booking/tab1_select_flight.blade.php ENDPATH**/ ?>