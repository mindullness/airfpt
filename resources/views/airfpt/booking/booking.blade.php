@extends('airfpt.layout.layout')
@section('title', 'Select Flight')
@section('content')
<style>
    /* CSS for all form tabs */
    #booking_form {
        display: flex;
        justify-content: space-between;
    }

    .booking_tab {
        display: none;
    }

    .booking_step {
        color: rgb(23, 74, 146) !important;
    }

    .breadcrumb_item.booking_step.activated {
        color: white !important;
        font-weight: 800;
        background-color: rgb(23, 74, 146);
    }

    /*  */

    .booking_head_nav_breadcrumb {
        display: flex;
        overflow: hidden;
        align-self: stretch;
        justify-content: space-between;
        padding: 0;
        margin-bottom: 20px;
    }

    .booking_head_nav_breadcrumb>.breadcrumb_item {
        position: relative;
        margin: auto 0;
        border-radius: 5px;
        width: 24%;
        word-wrap: break-word;
        background: #fff;
        color: #333;
        text-align: center;
        text-decoration: none;
        transition: background 0.2s linear;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    /* .booking_head_nav_breadcrumb>.breadcrumb_item:not(:first-child) {
        padding-left: 2px;
    }

    .booking_head_nav_breadcrumb>.breadcrumb_item:not(:last-child) {
        padding-right: 2px;
    } */

    /* .booking_head_nav_breadcrumb>.breadcrumb_item>a {
        border: #04AA6D 1px solid;
        margin: auto;
    } */

    .booking_head_nav_breadcrumb>.breadcrumb_item:hover:after,
    .booking_head_nav_breadcrumb>.breadcrumb_item:hover {
        background-color: #edf1f5;
    }


    /* origin ----> plane ----> dest */
    .outbound_title,
    .inbound_title,
    .passenger_title {
        display: inline-flex;
        width: 100%;
        margin-bottom: 15px;
    }

    .outbound_title>span,
    .inbound_title>span,
    .passenger_title>span {
        display: flex;
        flex-direction: column;
        margin-bottom: 5px;
    }

    .icon_plane,
    .passenger_title>li {
        border-radius: 50%;
        background-color: rgb(23, 74, 146);
        padding: 10px;
        margin-top: 8px;
        height: 40px;
        color: white;
        margin-right: 5px;
    }

    /* End origin ----> plane ----> dest */

    .obFlight_tabcontent,
    .ibFlight_tabcontent {
        display: flex;
        justify-content: space-between;
        position: relative;
        margin-bottom: 5px;
    }

    .flt_Info {
        padding-right: 15px;
        margin: 0;
        border-right: lightgrey 1px solid;
    }

    .flt_Info>div {
        display: flex;
        justify-content: space-between;
        align-self: stretch;
    }

    .flt_price {
        justify-content: center;
        align-self: center;
        display: flex;
        align-content: center;
    }

    .line {
        display: flex;
        justify-content: space-between;
        color: grey;
        padding-top: 8px;
        font-size: 14px;
    }

    .line>small {
        height: 1px;
        padding-top: 5px;
    }
</style>

<div class="container bg-transparent" style="padding-top: 110px;">

    <!-- Start breadcrumb -->

    <nav class="booking_head_nav_breadcrumb">
        <a href="#" class="breadcrumb_item booking_step">1. Flights</a>
        <a href="#" class="breadcrumb_item booking_step">Passengers</a>
        <a href="#" class="breadcrumb_item booking_step">Add-ons</a>
        <a href="#" class="breadcrumb_item booking_step">Payment</a>
    </nav>
    <!-- End breadcrumb -->
    <form id="booking_form" action="#" method="POST" enctype="multipart/form-data">

        <div class="w-100 pr-2">
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
        <div class="bookingsummary w-25" style="height: 500px;background-color:lightslategray;">
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
    var dayObj = document.getElementById("day");
    var monthObj = document.getElementById("month");
    var isLeap = false;

    window.onload = function() {
        setYear();
        setMonth();
    }
    document.getElementById("year").onchange = function() {
        checkLeapYear();
        checkDay();
    }

    monthObj.onchange = function() {
        checkDay();
    }
    dayObj.onfocus = function() {
        setDay();
    }

    function checkDay() { // Check the day is valid or not
        var month = monthObj.value;
        var day = dayObj.value;
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
        dayObj.innerHTML = "";
        let month = monthObj.value;
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

        for (let i = 1; i <= maxDay; i++)
            if (i < 10) {
                dayObj.innerHTML += "<option value='" + i + "'>0" + i + "</option>"
            } else {
                dayObj.innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
    }

    function setMonth() {
        for (let i = 1; i <= 12; i++) {
            if (i < 10) {
                monthObj.innerHTML += "<option value='" + i + "'>0" + i + "</option>"
            } else {
                monthObj.innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
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