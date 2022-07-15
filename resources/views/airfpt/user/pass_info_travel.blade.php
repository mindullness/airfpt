
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

<body class="w3-light-grey">

  <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1000px">

    <!-- Header -->


    <!-- Grid -->
    <div class="w3-row ">

      <!-- Blog entries -->
      <div class="w3-col ">
        <!-- Blog entry -->
        <div class="w3-card-4 w3-margin w3-white">
          <img src="{{ asset('./img/trucduy/pass_info_travel1.png') }}" style="width:100%" class="mx-auto d-block" alt="">

          <h5><span class="w3-opacity">July 22, 2022</span></h5>
          <header class="w3-container w3-center">
      <h1><b>TRAVEL DOCUMENT</b></h1>
      <h5 style="text-align: center;">Acceptance of travel document within Vietnam is regulated in Appendix XIV of Circular number 13/2019/TT-BGTVT dated Mar 29, 2019, specifying valid types of documents for traveling on domestic flights. </h5>

    </header>
          <div class="w3-container">
            <h5 style="color:#387FB8 ;">1. Passengers traveling on Vietnam domestic flights </h5>
            <ul style="list-style-type: circle;">
              <li>Vietnamese passengers over the age of 14 (years):</li>
              <ul style="list-style-type: square;">
                <li>Passport or Travel Document;</li>
                <li>Loose-leaf Visa, Permanent residence card, temporary residence card;</li>
                <li>Identity card;</li>
                <li>Citizen (identification) card;</li>
                <li>Military Identity card;</li>
                <li>Press Identity card;</li>
                <li>Driver's license;</li>
                <li>Aviation Security control card; (long term validity);</li>
                <li>Certifying personal identification form by local police or authorities citing passenger's permanent residence or temporary residence (Certifying forms must include the following information: certifying authority offices and their officer; date of certification; certified person‘s name, date of birth, gender, residence, and hometown; reasons of verification); verification documents with photos, stamped all pages by relevant government authorities, these documents have the validity for 30 days from the date of verification.</li>
                <li>Certifying form by authorities about passenger's sentenced completion.</li>
              </ul>
              <li>Non-Vietnamese nationality:</li>
              <ul style="list-style-type: square;">
                <li>National Passport; Travel Document, Loose-leaf Visa;</li>
                <li>Permanent residence card, temporary residence card;</li>
                <li>Identity cards issued by diplomatic agencies, consular offices to members of diplomatic missions, consular agencies, and representatives of international organizations</li>
                <li>Driver's license (issued by a recognized Vietnam Authority); In case of using overseas driver license, passengers have to bring along international driver license (IDP), and driver lisence issued by home country, as regulated in Circular number 29/2015/TT-BGTVT dated Jul 06, 2015./li>
                <li>Aviation Security control card (long term validity);</li>
                <li>In case of passport loss: a diplomatic note certifying personal identification and passport loss with portrait pictures and stamp is required. Diplomatic note is valid within 30 days from the date of confirmation.</li>

              </ul>
              <li>Passengers under the age of 14 (years) traveling on Vietnam domestic flights</li>
              <ul style="list-style-type: square;">
                <li>Own passport or shared passport with parents</li>
                <li>Birth Certificate;</li>
                <li>Birth Certifying Form (infants under 01 month old);</li>
                <li>Certifying form by a social organization for children under the patronage of that organization. This certifying form shall be valid within 6 months from the date of confirmation.</li>


              </ul>
              <li>The travel document conditions:</li>
              <ul style="list-style-type: square;">
                <li>Travel documents are the original copies and are still valid;</li>
                <li>Birth Certificate and Birth Certifying Form must be the original copy or a copy certified by a notarial office with legal status.</li>
                <li>Documents without a stamped portrait picture are not accepted. Except: Birth Certificate, Birth Certifying Form, or escort document issued by a recognized authority. Illegal documents are strictly forbidden and not accepted.</li>
              </ul>
            </ul>
            <h5 style="color:#387FB8 ;">2. Passenger traveling on international flight </h5>
            <ul class="a">
              <li>Passengers travelling from Vietnam:</li>
              <ul style="list-style-type: square;">
                <li>Passport: passengers travelling on international flight must submit passport, travel documents or immigration documents in accordance with Vietnamese Law on entry, exit, transit, and residence of foreigners (such as loose-leaf visa, permanent residence card, temporary residence card, identity card. Identity card, or alternative documents as per agreement between the nations)</li>
                <li>Passport validity requirement is subject to the destinations of passengers. Normally, the validity of 6 months is required.</li>
                <li>If your children do not have a passport, their full names, date of birth and stamped portrait picture have to be available in the travel document of the legitimate representative.</li>
              </ul>
              <li>Passengers travelling to Vietnam:</li>
              <ul style="list-style-type: square;">
                <li>If passengers are non-nationals (foreigners), they are required to have a visa to enter Vietnam. In case of coming from a country with visa waiver status, passengers are allowed to travel to Vietnam for 14 days with visa exemption. Passengers traveling with Vietnamese visa exemption status are also permitted entry.</li>
                <li>Visa exemption is a waiver of visa by a country to another country allowing citizens of the other countries to enter its border for a period of time. </li>

              </ul>
            </ul>
            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="{{Route('airfpt.user.pass_info')}}" class="nav-link3"><b>BACK »</b></button></p>
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

</html>
