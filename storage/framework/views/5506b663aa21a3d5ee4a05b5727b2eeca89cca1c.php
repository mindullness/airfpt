<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey" >

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:900px">

        <!-- Header -->


        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->

            <div class="w3-card-4 w3-margin w3-white">
                <img src=" <?php echo e(asset('./img/trucduy/pass_info_carr1.jpg')); ?>" style="width:100%">
                <div class="w3-col ">
                    <!-- Blog entry -->

                </div>
                <h5><span class="w3-opacity">July 22, 2022</span></h5>
                <header class="w3-container w3-center w3-padding-32">
                    <h1><b>CARRY ON LUGGAGE</b></h1>


                </header>
                <div class="w3-container">
                    <h5 style="color:#387FB8 ;">Carry-on baggage allowance </h5>
                    <p>Carry-on baggage is not supposed to contain:</p>
                    <ul class="a">

                        <ul style="list-style-type: square;">
                            <li>Fresh and frozen food items (meat, fish, crab, or snails, etc.);</li>
                            <li>Smelling fruits (jackfruit, durian, etc.) and liquids (fish sauce, shrimp paste, etc.);</li>
                            <li>Objects violating safety and security regulations of the flight.</li>
                        </ul>
                    </ul>
                    <p>Carry-on baggage will be controlled and tagged with "Cabin baggage" at the check-in counters.</p>
                    <p>Infant passengers (under 02 years old) are not entitled to carry-on baggage allowance.</p>
                    <h5 style="color:#387FB8 ;">Important information </h5>
                    <ul class="a">
                        <li>If the carry-on baggage exceeds the quantity, weight or dimension as specified above, the baggage service fee will be applied. </li>
                        <li>Passengers who has dry ice in their carry-on baggage are supposed to notice our employees in advance. The amount of dry ice is not allowed to exceed 2.5kg/person and must be packed and ventilated.</li>
                        <li>Liquid in carry-on baggage for international flight:</li>
                        <ul style="list-style-type: square;">
                            <li>Total volume is not more than 1.000ml/passenger.</li>
                            <li>Each liquid container has a maximum volume of 100ml and must be kept in a visible, sealable bag. </li>
                        </ul>

                    </ul>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="<?php echo e(Route('airfpt.user.pass_info')); ?>" class="nav-link3"><b>BACK »</b></button></p>
                        </div>

                    </div>
                </div>
            </div>
            <hr>


        </div>
        <!-- END BLOG ENTRIES -->
    </div>





    <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
    </div>



</body>

</html><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/user/pass_info_carry.blade.php ENDPATH**/ ?>