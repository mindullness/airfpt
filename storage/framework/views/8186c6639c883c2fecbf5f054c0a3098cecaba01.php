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
    <div class="w3-content" style="max-width:1000px">

        <!-- Header -->


        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col ">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src=" <?php echo e(asset('./img/trucduy/pass_info_check.jpg')); ?>" style="width:100%">

                    <h5><span class="w3-opacity">July 22, 2022</span></h5>

                    <div class="w3-container">
                        <header class="w3-container w3-center w3-padding-32">
                            <h1><b>Checked luggage</b></h1>

                        </header>
                        <ul class="a">

                            <p>Checked baggage is the baggage that the Carrier takes responsible for carrying from the origin point to the destination indicated in PNR (Passenger name record) or on the boarding pass.</p>
                            <p>Checked baggage must be packed in accordance with weight, size and and follow security and safety regulations;</p>
                            <h5 style="color:#387FB8 ;">Checked- baggage conditions: </h5>
                            <ul style="list-style-type: circle;">
                                <li>Checked baggage acceptance depends on the baggage allowance that passengers have already chosen. </li>
                                <li>Passengers should purchase baggage allowance via one of the following:</li>
                                <ul style="list-style-type: square;">
                                    <li>At Website airfpt.vn</li>
                                    <li>Air FPT Call Center: (028)38460846. </li>
                                    <li>Air FPT Ticketing office or Agency and at the airport. </li>

                                </ul>
                                <li>Passengers have choice to buy or upgrade the weight of checked baggage allowance according to the following packages: 5kg, 10kg, 15kg, 20kg, 25kg, 30kg, 35kg, 40kg under the satisfaction of: </li>
                                <ul style="list-style-type: square;">
                                    <li>Maximum weight/piece: ≤ 32 kgs (70Lb)/piece.</li>
                                    <li>Three dimensions: ≤ 203 cm.</li>
                                </ul>
                                <li>Additional weight and/or dimension of baggage allowance will be charged extra service fee at airport with higher rate.</li>
                                <li>In case of exceeding the limitation of weight and size as mentioned above, it is required to inform Vietravel Airlines and be confirmed prior to departure. The service fee will be applied.</li>
                                <li>PROHIBITED items in checked baggage: Cash, High-value items, Power bank (Lithium) for PC, tablet, etc.</li>
                            </ul>
                            <br>
                            <h5 style="color:#387FB8 ;">Notice: </h5>
                            <p>Air FPT reserves the right to refuse to carriage items in checked baggage as follows:</p>
                            <ul style="list-style-type: circle;">
                                <li>Items not properly packed in suitcase or suitable containers, not eligible for transportation.</li>
                                <li>Items are capable of causing unsafety or/and not security to the flight according to The dangerous goods regulations of the International Civil Aviation Organization (ICAO) and the International Air Transport Association (IATA) and The Conditions of Carriage and Term of our contract.</li>
                                <li>Items that are prohibited in accordance with applicable laws, regulations or orders of any states or country of destination, departure or transit point;</li>
                                <li>Items that, in Vietravel Airlines point of view, are not suitable for carriage due to their weight safe, size or nature;</li>
                                <li>Fragile or/and perishable items;</li>
                                <li>Live or dead animal;</li>
                                <li>Fresh or frozen seafood and/or raw, frozen meat have been packed properly in an in foam and/or cold storage container be acceptable by the airport authorities. </li>

                                <p>We reserve the right to refuse carriage in case passengers are not willing to corporate. </p>
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

</html><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/user/pass_info_checked.blade.php ENDPATH**/ ?>