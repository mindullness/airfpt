@extends('airfpt.layout.layout')
@section('title', 'passenger information')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1000px">

    <!-- Header -->
    <header class="w3-container w3-center " style="padding-top: 90px; padding-bottom: 10px;">
      <h1><b>PASSENGER INFORMATION</b></h1>
      <h3 style="color: #FF1616;">Welcome to the Air FPT </h3>
    </header>

    <!-- Grid -->
    <div class="w3-row">

      <!-- Blog entries -->
      <div class="w3-col ">
         <!-- Blog entry -->
         <div class="w3-card-4 w3-margin w3-white">
          <img src="{{ asset('./img/trucduy/pass_info_cus.jpg') }}" alt="Norway" style="width:100%">
          <div class="w3-container">
            <h5><span class="w3-opacity">July 22, 2022</span></h5>
            <h3><b>Customer Support</b></h3>

          </div>

          <div class="w3-container">
            <p>Air FPT is one of the most respected travel Viet Nam. Flying one of the youngest aircraft fleets in the world to destinations spanning a network spread over Viet Nam, the Air FPT's serivec providing the high standards of care and service that customers have come to expect.</p>

            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="{{Route('airfpt.user.pass_info_cus')}}" class="nav-link4"><b>READ MORE »</b></button></p>
              </div>

            </div>
          </div>
        </div>
        
        <!-- Blog entry -->
        <div class="w3-card-4 w3-margin w3-white">
          <img src="{{ asset('./img/trucduy/pass_info_travel1.png') }}" style="width:100%" class="mx-auto d-block" alt="">
          <div class="w3-container">
            <h5><span class="w3-opacity">July 22, 2022</span></h5>
            <h3><b>Travel Document</b></h3>

          </div>

          <div class="w3-container">
            <p>Acceptance of travel document within Vietnam is regulated in Appendix XIV of Circular number 13/2019/TT-BGTVT dated Mar 29, 2019, specifying valid types of documents for traveling on domestic flights.</p>
            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="{{Route('airfpt.user.pass_info_travel')}}" class="nav-link1"><b>READ MORE »</b></button></p>
              </div>

            </div>
          </div>
        </div>
        <hr>

        <!-- Blog entry -->
        <div class="w3-card-4 w3-margin w3-white">
          <img src=" {{ asset('./img/trucduy/pass_info_carr1.jpg') }}" style="width:100%">
          <div class="w3-container">
            <h5><span class="w3-opacity">July 22, 2022</span></h5>
            <h3><b>Carry-on luggage</b></h3>
          </div>
          <div class="w3-container">
            <p>Passenger is responsibility for safekeeping their carry-on baggage.
            </p>
            <ul style="list-style-type: square;">
              <li>If passengers are non-nationals (foreigners), they are required to have a visa to enter Vietnam. In case of coming from a country with visa waiver status, passengers are allowed to travel to Vietnam for 14 days with visa exemption. Passengers traveling with Vietnamese visa exemption status are also permitted entry.</li>
              <li>Visa exemption is a waiver of visa by a country to another country allowing citizens of the other countries to enter its border for a period of time. </li>

            </ul>
            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="{{Route('airfpt.user.pass_info_carry')}}" class="nav-link2"><b>READ MORE »</b></button></p>
              </div>

            </div>
          </div>
        </div>

        <!-- Blog entry -->
        <div class="w3-card-4 w3-margin w3-white">
          <img src="{{ asset('./img/trucduy/pass_info_check.jpg') }}" alt="Norway" style="width:100%">
          <div class="w3-container">
            <h5><span class="w3-opacity">April 22s, 2022</span></h5>
            <h3><b>Checked luggage</b></h3>

          </div>

          <div class="w3-container">
            <p>Checked baggage is the baggage that the Carrier takes responsible for carrying from the origin point to the destination indicated in PNR (Passenger name record) or on the boarding pass.
            </p>
            <p>Checked baggage must be packed in accordance with weight, size and and follow security and safety regulations.</p>
            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="{{Route('airfpt.user.pass_info_checked')}}" class="nav-link3"><b>READ MORE »</b></button></p>
              </div>

            </div>
          </div>
        </div>

       

      </div>
      <!-- END BLOG ENTRIES -->
    </div>
    <!-- END Introduction Menu -->
  </div>


</html>
@endsection
@section('script-section')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  @endsection