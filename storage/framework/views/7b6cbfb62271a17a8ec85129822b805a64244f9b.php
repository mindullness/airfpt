<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: "Times New Roman", Georgia, Serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display";
            letter-spacing: 5px;
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->


    <!-- Header -->


    <!-- Page content -->
    <div class="w3-content" style="max-width:1000px" >

        <!-- About Section -->
        <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="<?php echo e(asset('./img/trucduy/pass_info_cus1.jpg')); ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="90%">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">Infants</h1><br>
                <p class="w3-text-grey">Infant means a child aged under 02 years old as of the date of departure. Infant age is calculated by flight sector. An infant must be sat on an accompanied adult's lap. </p><br>
                <p class="w3-text-grey"> Air FPT only accept transportation of healthy, term babies by the time of departure. We do not accept to transport Infants under 07 days of age, Preterm Infants who are required to be kept in a baby incubator or with unstable health under 14 days of age.
                </p><br>
                <p class="w3-text-grey"> Air FPT accepts 01 single baby stroller (foldable and fits in the carry-on baggage compartment on the passenger cabin) for free at the check-in counter or at the boarding gate; In case the single stroller cannot be folded and cannot fit in the carry-on baggage compartment on the passenger cabin, there shall be a fee and check-in procedures.</p><br>
                <p class="w3-text-grey"> Baby bassinet service is provided free of charge on our flights provided the child weights no more than 11kg. This service is only applied according to the technical conditions of the operating aircraft.For safety reason, we could only accept a limited number of infants not exceed 10% of capacity of aircraft used for the flight.</p><br>

            </div>
        </div>

        <hr>

        <!-- Menu Section -->
        <div class="w3-row w3-padding-64" id="menu">
            <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center">Children</h1><br>
                <div class="w3-text-grey">
                    <div class="w3-text-grey">
                        <p>Passenger is a child who have reached their 2nd birthday but not exceeding their 12th on the date of their flight (as of the departure date). Age of child is calculated by flight segment.</p>
                        <p>Child must be accompanied by 01 healthy adult who is the parent or legal guardian or relative or a friend who acts as an escort.</p>
                        <h5 style="color:#387FB8 ;">Notice: </h5>
                        <ul style="list-style-type: circle;">
                            <li>Children between 02 years old to 06 years old without an adult traveling will not be accepted for carriage. </li>
                            <li>A healthy child from over 07 to under 14 years old must be accompanied by a healthy adult from 15 years old.</li>

                        </ul>


                        <h5 style="color:#387FB8 ;">At the Departure: </h5>
                        <ul style="list-style-type: circle;">
                            <li>Drop-off person must prepare his or her personal ID card, information of which must be identical to information provided to Vietravel Airlines' ticket office, or agency.</li>
                            <li>Parents or Legal Guardians must prepare all required documents for the unaccompanied minor(s) in order to show at the check-in counter. The drop-off person must bring the unaccompanied minor(s) at least 02 hours for domestic flights and 03 hours for international flights prior to the departure time.</li>
                            <li>Drop-off person must complete all check-in requirements for the unaccompanied minor(s), and must not leave the airport until the flight departs.</li>
                        </ul>


                        <h5 style="color:#387FB8 ;">On the Arrival:</h5>
                        <ul style="list-style-type: circle;">
                            <li>Pick-up person at the arrival destination must be at the airport at least 30 minutes prior to the estimated arrival time.</li>
                            <li>Our handling agent will contact you at the time the flight landing and the pick-up person must carry his or her personal ID or other kinds of legal identity documents, information of which must be identical to information provided to Vietravel Airlines' ticket office, or agency to present when we hand over unaccompanied minor. </li>
                        </ul>
                        <br>
                    </div>
                </div>

            </div>

            <div class="w3-col l6 w3-padding-large">
                <img src="<?php echo e(asset('./img/trucduy/pass_info_cus2.jpg')); ?>" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:110%">
            </div>
        </div>

        <hr>

        <!-- Contact Section -->
        <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="<?php echo e(asset('./img/trucduy/pass_info_cus3.jpg')); ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
            </div>

            <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center">Pregnant Passengers</h1><br>
                <div class="w3-text-grey">
                    <div class="w3-text-grey">
                        <p>Pregnant passengers need to inform Vietravel Airlines of their gestational age during booking, and during check-in to receive necessary consulting and assistance. You are also required to sign “Waiver of Responsibilities” at the airport prior to boarding. Please find our detailed guidelines regarding pregnant passengers in follow:</p>

                        <ul style="list-style-type: circle;">
                            <li> Passengers with a normal pregnancy and taking a flight within the first 27 weeks of pregnancy can travel in similar manner as normal passengers do. However, passengers are required to carry the following documents: pregnancy medical records, ultrasound image that states gestational age. With passengers who are pregnant via artificial insemination or in poor health condition referred to regulation at “2” below.</li>
                            <li>Passengers who are pregnant from 27 weeks + 1 day to 32 weeks (include passengers who are pregnant with twin or pregnant via artificial insemination or in poor health condition)</li>
                            <ul style="list-style-type: square;">
                                <li>Normal pregnancy is accepted for transportation</li>
                                <li>Passengers must present form MEDIF II (signed by an approved doctor), or a medical clearance document approved by an authorized specialist physician, verifying the fetus' gestational age. and issued within seven (07) days of the first flight if the passenger does not suffer any unusual health conditions and the fetus is under 32 weeks old during the journey. </li>
                                <li>Passengers must sign Waiver of Responsibilities with the Airline </li>
                                <li>Confirm the health of the passenger and the fetus as fit for air travel bring notarized English translation of all required documents if travel on international flights and passengers must prepare an additional set of documents in English certified by a notarial office with legal status.</li>
                            </ul>
                            <li>Passengers with a pregnancy of more than 32 weeks + 1 day or more or birth prediction within 7 days are not allowed onboard.</li>
                        </ul>
                        <br>

                    </div>
                </div>

            </div>
            <div class="w3-row">
                <div class="w3-col m8 s12">
                    <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="<?php echo e(Route('airfpt.user.pass_info')); ?>" class="nav-link3"><b>BACK »</b></button></p>
                </div>

            </div>
        </div>

        <!-- End page content -->
    </div>



</body>

</html><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/user/pass_info_cus.blade.php ENDPATH**/ ?>