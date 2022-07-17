 <!-- Outbound price -->
 <div class="pt-2 px-2 bg-light">
     <b>Passengers:</b>
     <div id="paxs"></div>
     <input type="text" value="<?php echo e($adl); ?>" name="adl_quantity" class="d-none">
     <input type="text" value="<?php echo e($chd); ?>" name="chd_quantity" class="d-none">
     <input type="text" value="<?php echo e($inf); ?>" name="inf_quantity" class="d-none">

     <hr>
     <div class="d-flex justify-content-between">
         <b><?php echo e($ori_airports->iata_code); ?> - <?php echo e($dest_airports->iata_code); ?></b>
         <input id="ob_price" type="text" readonly value="0" class="bg-transparent border-0 w-50 shadow-none text-right font-weight-bold">
         &nbsp;<small class="align-self-center"> VND</small>
     </div>
     <?php if(sizeof($obFlights)!=0): ?>
     <div class="py-1">
         <?php echo e(date("l, dMY", strtotime($obFlights[0]->date))); ?>

     </div>
     <?php endif; ?>

     <?php if(!empty($ibFlights)): ?>
     <hr>
     <div class="d-flex justify-content-between">
         <b><?php echo e($dest_airports->iata_code); ?> - <?php echo e($ori_airports->iata_code); ?></b>
         <input id="ib_price" type="text" readonly value="0" class="bg-transparent border-0 w-50 shadow-none text-right font-weight-bold">
         &nbsp;<small class="align-self-center"> VND</small>
     </div>

     <?php if(sizeof($ibFlights)!=0): ?>
     <div class="py-1">
         <?php echo e(date("l, dMY", strtotime($ibFlights[0]->date))); ?>

     </div>
     <?php endif; ?>
     <?php endif; ?>
     <hr>
     <div class="d-lg-flex d-block justify-content-between pb-3">
         <span class="font-weight-bold">Total price: </span>
         <input id="total_price" type="text" readonly value="" class="bg-transparent border-0 w-50 shadow-none text-right font-weight-bold">

         &nbsp;<small class="align-self-center"> VND</small>
     </div>
 </div>
 <!-- Inbound price -->
 <div>

 </div>

 <!-- .End inside summary div-->

 <script>
    
     function show_ob_price(base_ob_price) {
         let adl = parseInt(sessionStorage.getItem("adl"));
         let chd = parseInt(sessionStorage.getItem("chd"));
         let inf = parseInt(sessionStorage.getItem("inf"));

         let fare_chd = 0.75;
         let fee_service = 440000;

         let fee_adl = base_ob_price * adl;
         let fee_chd = base_ob_price * chd * fare_chd;
         let fee_inf = 100000 * inf;

         let ob_price = Math.round(fee_adl + fee_chd + fee_inf + fee_service);

         $("#ob_price").val(ob_price.toLocaleString("vi-VN", {
             style: "currency",
             currency: "VND"
         }));

         show_total_price();
     }

     function show_ib_price(base_ib_price) {
         let adl = parseInt(sessionStorage.getItem("adl"));
         let chd = parseInt(sessionStorage.getItem("chd"));
         let inf = parseInt(sessionStorage.getItem("inf"));

         let fare_chd = 0.75;
         //  fee_service includes airport tax and service tax etc...
         let fee_service = 440000;

         let fee_adl = base_ib_price * adl;
         let fee_chd = base_ib_price * chd * fare_chd;
         let fee_inf = 100000 * inf;

         let ib_price = Math.round(fee_adl + fee_chd + fee_inf + fee_service);

         $("#ib_price").val(ib_price.toLocaleString("vi-VN", {
             style: "currency",
             currency: "VND"
         }));
         show_total_price();

     }

     function show_total_price() {

         let ob_price =0;
         let ib_price = 0;

         typeof($("#ob_price").val()) != 'undefined' ? ob_price = $("#ob_price").val() : ob_price = 0;
         !isNaN(ob_price)?ob_price = 0:ob_price = parseInt(ob_price.replace(/\D/g, ""));

         typeof($("#ib_price").val()) != 'undefined'? ib_price = $("#ib_price").val() : ib_price = 0;
         !isNaN(ib_price)?ib_price = 0:ib_price = parseInt(ib_price.replace(/\D/g, ""));

         $("#total_price").val((ob_price + ib_price).toLocaleString("vi-VN", {
             style: "currency",
             currency: "VND"
         }));
     }
 </script><?php /**PATH E:\xampp\htdocs\AirFPT\resources\views/airfpt/booking/summary.blade.php ENDPATH**/ ?>