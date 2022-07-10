<!-- 1. booking_tab 1: Select Flight -->
<div class=" ml-0 pl-0 ">
    <!-- Outbound Flight Information -->

    <div class="outbound_flight">
        <div class="outbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure icon_plane "></li>
            <span>
                <h3 class="m-0 p-0">Outbound Flight</h3>
                <h6 class="m-0 p-0">{{$ori_airports->city}} <b>({{$ori_airports->iata_code}})</b> &nbsp; To &nbsp; {{$dest_airports->city}} <b>({{$dest_airports->iata_code}})</b></h6>
            </span>
        </div>

        @if(sizeof($obFlights)!=0)
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
        @foreach($obFlights as $ob)
        <!-- Foreach flight id -->

        <div id="Tue" class="obFlight_tabcontent bg-light my-3">

            <div class="w-75 flt_Info p-2">
                <div>
                    Flight Number: <b>AF{{$ob->flight_number}}</b>
                </div>
                <div>


                    <span>Date:</span>
                    <span><b>{{date("l, dMY", strtotime("$ob->date"))}}</b></span>

                </div>
                <div>
                    <span>{{date("H:i", strtotime("$ob->depart_time"))}}</span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-25"></small>
                        <span>{{floor($ob->duration/60)}} hrs {{$ob->duration%60}} mins</span><small class="border-bottom w-25"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>
                    <span>{{date("H:i", strtotime("$ob->depart_time") + (60*$ob->duration) )}}</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>
                        <span>{{$ob->origin}}</span> -
                        <span>{{$ob->destination}}</span>
                    </small>
                </div>
            </div>
            <div class="w-25 flt_price p-2 d-block text-center">
                <div>VND {{number_format("$ob->base_price",0,",",".")}}</div>
                <input type="radio" name="ob_chosen_flight_id" value="{{$ob->id}}">
            </div>
        </div>
        @endforeach
        <a href="{{url()->previous() }}" class="btn btn-secondary">Back to search</a>
        @else
        <h4 class="text-center bg-light rounded p-3">
            Sorry! There's none of flights matched your needs!
        </h4>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back to search</a>
        @endif
    </div>

    <!-- End Outbound Flights -->

    <!-- Inbound Flight Information -->
    <!-- oneway or roundtrip CHECK -->
    <!-- empty(ibFlights) means this is a oneway flight -->
    @if(!empty($ibFlights))
    
    <div class="inbound_flight mt-5">
        <div class="inbound_title bg-light rounded p-2">
            <li class="fa fa-plane-departure fa-flip-horizontal icon_plane "></li>
            <span class="">
                <h3 class="m-0 p-0">Inbound Flight</h3>
                <h6 class="m-0 p-0">{{$dest_airports->city}} <b>({{$dest_airports->iata_code}})</b> &nbsp; To &nbsp; {{$ori_airports->city}} <b>({{$ori_airports->iata_code}})</b></h6>
            </span>
        </div>

        @if(sizeof($ibFlights)!=0)
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

        @foreach($ibFlights as $ib)
        <!-- Foreach flight id -->

        <div id="Tue" class="ibFlight_tabcontent bg-light my-3">

            <div class="w-75 flt_Info p-2">
            <div>
                    Flight Number: <b>AF{{$ib->flight_number}}</b>
                </div>
                <div>


                    <span>Date:</span>
                    <span><b>{{date("l, dMY", strtotime("$ib->date"))}}</b></span>

                </div>
                <div>
                    <span>{{date("H:i", strtotime("$ib->depart_time"))}}</span>
                    <span class="line w-75 mx-2">
                        <li class="fa fa-plane "></li>
                        <small class="border-bottom w-25"></small>
                        <span>{{floor($ib->duration/60)}} hrs {{$ib->duration%60}} mins</span><small class="border-bottom w-25"></small>
                        <li class="fa fa-map-marker-alt "></li>
                    </span>
                    <span>{{date("H:i", strtotime("$ib->depart_time") + (60*$ib->duration) )}}</span>
                </div>
                <div>
                    <small>Direct</small>
                    <small>
                        <span>{{$ib->origin}}</span> -
                        <span>{{$ib->destination}}</span>
                    </small>
                </div>
            </div>
            <div class="w-25 flt_price p-2 d-block text-center">
                <div>VND {{number_format("$ib->base_price",0,",",".")}}</div>
                <input type="radio" name="ib_chosen_flight_id" value="{{$ib->id}}">
            </div>
        </div>
        @endforeach
        @else
        <h4 class="text-center bg-light rounded p-3">
            Sorry! There's none of flights matched your needs!
        </h4>
        <a href="{{Route('airfpt.index')}}" class="btn btn-secondary">Back to search</a>
        @endif

    </div>
    @endif
    <!-- End If (oneway or roundtrip CHECK) -->
    <!-- End Inbound Flights -->

</div>