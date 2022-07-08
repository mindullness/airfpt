@extends('airfpt.layout.layout')
@section('title', 'Book A Ticket')
@section('content')

<div class="container bg-transparent" style="padding-top: 110px;">

    <!-- Start breadcrumb -->

    <nav class="booking_head_nav_breadcrumb">
        <a href="#" class="breadcrumb_item booking_step">1<span class="shortNav">. Flights</span></a>
        <a href="#" class="breadcrumb_item booking_step">2<span class="shortNav">. Passengers</span></a>
        <a href="#" class="breadcrumb_item booking_step">3<span class="shortNav">. Add-ons</span></a>
        <a href="#" class="breadcrumb_item booking_step">4<span class="shortNav">. Payment</span></a>
    </nav>
    <!-- End breadcrumb -->
    <form id="booking_form" action="#" method="POST" enctype="multipart/form-data">

        <div class="w-75">
            <!-- One "booking_tab" for each booking_step in the form: -->

            <!-- 1. booking_tab 1: Select Flight -->
            <div class="booking_tab m-0 p-0">
                @include('airfpt.booking.tab1_select_flight')
            </div>
            <!-- .End booking_tab 1 -->

            <!-- 2. booking_tab: Input Passenger Details -->
            <div class="booking_tab m-0 p-0" id="passenger_tab">
                @include('airfpt.booking.tab2_passenger_details')
            </div>

            <!-- 3. booking_tab: Add-ons -->
            <div class="booking_tab m-0 p-0"> Add-ons
                @include('airfpt.booking.tab3_add_ons')
            </div>
            <!-- 4. Payment -->
            <div class="booking_tab m-0 p-0">Payment
                @include('airfpt.booking.tab4_payment')
            </div>

            <div class="overflow-hidden mt-2">
                <div class="d-flex justify-content-between">
                    <button onclick="nextPrev(-1)" class="btn btn-secondary  font-weight-bolder" type="button" id="booking_prevBtn">
                        <li class="	fas fa-chevron-circle-left"></li> Previous
                    </button>

                    <button onclick="nextPrev(1)" class="btn btn-primary font-weight-bolder" type="button" id="booking_nextBtn">
                        Next <li class="fa fa-chevron-circle-right"></li>
                    </button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <!-- <div style="text-align:center;margin-top:40px;">
                <span class="booking_step"></span>
                <span class="booking_step"></span>
                <span class="booking_step"></span>
                <span class="booking_step"></span>
            </div> -->
        </div>
        <div id="bookingsummary" class="d-block d-sm-block">
            <h3 class="font-weight-light">Booking Summary</h3>
        </div>

    </form>
</div>
<script>
    var currentTab = 0;
    showTab(currentTab);
    // This function will figure out which tab to display
    function nextPrev(n) {
        let tabs_arr = $(".booking_tab");

        // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && !validateForm()) return false; 
        // function validateForm() chưa viết.
        // Hide the current tab:

        $(tabs_arr[currentTab]).css({
            'display': 'none'
        });
        currentTab += n;

        // if you have reached the end of the form...the form gets submitted:
        if (currentTab >= tabs_arr.length) {
            $("#booking_form").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function showTab(n) {

        let tabs_arr = $(".booking_tab");

        $(tabs_arr[n]).css({
            'display': 'block'
        });

        // If index 0 => prev Btn display: none, else display: inline.
        n == 0 ? ($('#booking_prevBtn').css('visibility', 'hidden')) : ($('#booking_prevBtn').css('visibility', 'visible'));
        n == (tabs_arr.length - 1) ? ($('#booking_nextBtn').html('Confirmed & Pay Now')) : ($('#booking_nextBtn').html('Next <li class="fa fa-chevron-circle-right"></li>'));

        fixStepIndicator(n);
    }

    // This function removes the "active" class of all steps...
    function fixStepIndicator(n) {

        let steps_arr = $(".booking_step");
        for (i = 0, j = steps_arr.length; i < steps_arr.length; i++, j--) {
            if (i <= n) {
                $(steps_arr[i]).addClass('activated');
            }
            if (j > n) {
                $(steps_arr[j]).removeClass('activated');
            }
        }

    }

    // DOB
    // 
    // 
    let isLeap = false;
    window.onload = function() {
        $("#booking_form").ready(function() {
            setYear();
        });
    }
    $("#year").change(function() {
        checkLeapYear();
        checkDay();
    });

    $("#month").change(function() {
        checkDay();
    });

    $("#day").focus(function() {
        setDay();
    });

    function checkDay() { // Check the day is valid or not
        let month = $("#month").val();
        let day = $("#day").val();
        if (month == 2) {
            if (isLeap) {
                if (day > 29) {
                    setDay();
                }
            } else {
                if (day > 28) {
                    setDay();
                }
            }
        } else if (month == 4 || month == 6 || month == 9 || month == 11) {
            if (day > 30) {
                setDay();
            }
        }
    }

    function setDay() { // Set the day to the first day of the month
        $("#day").html("");

        let month = $("#month").val();
        let maxDay = 31;
        if (month == 2) {
            if (isLeap) {
                maxDay = 29;
            } else {
                maxDay = 28;
            }
        } else if (month == 4 || month == 6 || month == 9 || month == 11) {
            maxDay = 30;
        }
        $("#day").append("<option value=''>Day</option>");
        for (let i = 1; i <= maxDay; i++)
            
            if (i < 10) {
                $("#day").append("<option value='" + i + "'>0" + i + "</option>");
                // dayObj.innerHTML += "<option value='" + i + "'>0" + i + "</option>"
            } else {
                $("#day").append("<option value='" + i + "'>" + i + "</option>");
                // dayObj.innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
    }


    function setYear() {

        for (let i = 2022; i >= 1920; i--) {
            document.getElementById("year").innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
    }

    function checkLeapYear() {

        var year = document.getElementById("year").value;
        if (year % 4 == 0) {
            if (year % 100 == 0) {
                if (year % 400 == 0)
                    isLeap = true;
                else
                    isLeap = false;
            } else
                isLeap = true;
        } else {
            isLeap = false;
        }
    }
    // 
    // 
    // End DOB
</script>

@endsection