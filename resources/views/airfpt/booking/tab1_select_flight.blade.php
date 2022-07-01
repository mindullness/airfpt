<!-- 1. booking_tab 1: Select Flight -->
<div class=" ml-0 pl-0 ">
    <!-- Outbound Flight Information -->
    <div class="outbound_flight">
        <div class="outbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure icon_plane "></li>
            <span class="">
                <h3 class="m-0 p-0">Outbound Flight</h3>
                <h6 class="m-0 p-0">{{$bookings['origin']}} (SGN) To {{$bookings['destination']}} (PQC)</h6>
            </span>
        </div>
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
        <!-- Foreach flight id -->
        <div id="Mon" class="">
            <h3>Monday</h3>
        </div>


        <div id="Tue" class="obFlight_tabcontent bg-light">

            <div class="w-75 flt_Info p-2">
                <div>
                    <span>{{$bookings['origin']}}</span>
                    <span>{{$bookings['destination']}}</span>
                </div>
                <div>
                    <span>{{$bookings['depart_date']}}</span>
                    <span>{{$bookings['depart_date']}}</span>
                </div>
                <div>
                    <span>18:15</span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-100"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>

                    <span>19:25</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>AF 301</small>
                </div>
            </div>
            <div class="w-25 flt_price p-2">
                VND 1.800.000

            </div>
        </div>

        <div id="Wed" class="obFlight_tabcontent bg-light">

            <div class="w-75 flt_Info p-2">
                <div>
                    <span>Origin</span>
                    <span>Destination</span>
                </div>
                <div>
                    <span>Monday 27 June 2022</span>
                    <span>Monday 27 June 2022</span>
                </div>
                <div>
                    <span>18:15</span>
                    <span class="line w-75 mx-2 ">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-100"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>

                    <span>19:25</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>AF 301</small>
                </div>
            </div>
            <div class="w-25 flt_price p-2">
                VND 1.800.000

            </div>
        </div>
    </div>
    <!-- <script>
                            function openPage(pageName, elmnt, color) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("obFlight_tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("obFlight_tab");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].style.backgroundColor = "";
                                }
                                document.getElementById(pageName).style.display = "flex";
                                elmnt.style.backgroundColor = color;
                            }

                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();
                    </script> -->



    <div class="inbound_flight mt-5">
        <div class="inbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure fa-flip-horizontal icon_plane "></li>
            <span class="">
                <h3 class="m-0 p-0">Inbound Flight</h3>
                <h6 class="m-0 p-0">{{$bookings['destination']}} () To {{$bookings['origin']}} ()</h6>
            </span>
        </div>
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
        <!-- Foreach flight id -->
        <div id="Mon" class="">
            <h3>Monday</h3>
        </div>


        <div id="Tue" class="ibFlight_tabcontent bg-light">

            <div class="w-75 flt_Info p-2">
                <div>
                    <span>{{$bookings['destination']}}</span>
                    <span>{{$bookings['origin']}}</span>
                </div>
                <div>
                    <span>{{$bookings['depart_date']}}</span>
                    <span>{{$bookings['depart_date']}}</span>
                </div>
                <div>
                    <span>18:15</span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-100"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>

                    <span>19:25</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>AF 301</small>
                </div>
            </div>
            <div class="w-25 flt_price p-2">
                VND 1.800.000

            </div>
        </div>

        <div id="Wed" class="ibFlight_tabcontent bg-light">

            <div class="w-75 flt_Info p-2">
                <div>
                    <span>Origin</span>
                    <span>Destination</span>
                </div>
                <div>
                    <span>Monday 27 June 2022</span>
                    <span>Monday 27 June 2022</span>
                </div>
                <div>
                    <span>18:15</span>
                    <span class="line w-75 mx-2 ">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-100"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>

                    <span>19:25</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>AF 301</small>
                </div>
            </div>
            <div class="w-25 flt_price p-2">
                VND 1.800.000

            </div>
        </div>
    </div>
</div>