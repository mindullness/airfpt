$(document).ready(function() {

    // Script to toggle Active Tab between "Booking", "Manage Booking" and "Flight Status" Tabs
    $("#indexFormTab > li > .nav-link").click(function() {
        $(this).toggleClass("active");
    });
    $("#indexFormTab > li > .nav-link").click(function() {
        $(this).toggleClass("active");
    });
    // SEARCH FLIGHTS ZONE //

    var roundtrip = true;
    beforeFullFill();


    // Check radio button "roundtrip" or "oneway" is checked
    $(' input:radio[name="isRoundTrip"]').change(function() {
        changeRadioBtn();
        displayPaxField();
    });
    $('label.form-check-label').css({
        "text-shadow": " 0px 0px 2px black"
    });

    $('#origin, #depart_date, #destination, #return_date').on('input', function() {
        displayPaxField();
    });
    $('#origin, #depart_date, #destination, #return_date').blur(function() {
        displayPaxField();
    });

    function displayPaxField() {
        isFullFill() ? beforeFullFill() : afterFullFill();
    }

    function isFullFill() {
        let isOriginFill = $('#origin').val();
        let isDestinationFill = $('#destination').val();
        let isDepart_dateFill = $('#depart_date').val();
        let isReturn_dateFill = isRoundTrip() ? ($('#return_date').val()) : true;

        if (!isOriginFill || !isDestinationFill || !isDepart_dateFill || !isReturn_dateFill) {
            return true;
        } else {
            return false;
        }
    }

    function beforeFullFill() {
        $('.indexForm').css({
            'height': '280px',
            'transition': '0.4s',
            'transition-timing-function': 'ease-in-out'
        });
        $('.pax').css({
            'visibility': 'hidden',
            'transition': '0.4s',
            'transition-timing-function': 'ease-in-out'
        });
    }

    function afterFullFill() {
        $('.indexForm').css({
            'height': '368px',
            'transition': '0.4s',
            'transition-timing-function': 'ease-in-out'
        });
        $('.pax').css({
            'visibility': 'visible',
            'transition': '0.4s',
            'transition-timing-function': 'ease-in-out'
        });
    }

    function isRoundTrip() {
        $('.oneway').is(':checked') ? roundtrip = false : roundtrip = true;
        return roundtrip;
    }

    function changeRadioBtn() {
        isRoundTrip();
        if (!roundtrip) {
            $('.oneway').parent().toggleClass("text-warning");
            $('.roundtrip').parent().toggleClass("text-warning");

            $("#return_date").prop({
                'disabled': true,
                'value': ''
            });

        } else {
            $("#return_date").prop('disabled', false);
            $('.oneway').parent().toggleClass("text-warning");
            $('.roundtrip').parent().toggleClass("text-warning");
        }
    }

    // .END SEARCH FLIGHTS ZONE //


    $(".inc").click(function() {

        let current_qty = parseInt($(this).prev('input').val());;
        let id = $(this).prev('input').attr('id');

        if (checkIncrementPax(id)) {
            // Increment value only when ADL + CHD not over 6 passengers && INF <= ADL.
            $(this).prev('input').val(current_qty + 1);
        }
    });


    $(".dec").click(function() {
        // These code check there's at least 01 Adult, other fields can be zero when click 'decrement button'
        // get current passenger quantity
        let current_qty = parseInt($(this).next('input').val());

        if (!isNaN(current_qty)) {

            if (current_qty > 1) {
                return $(this).next('input').val(current_qty - 1);
            } else {
                if ($(this).next('input').attr('id') == 'adl') {
                    return $(this).next('input').val(1);
                } else {
                    current_qty <= 0 ? $(this).next('input').val(0) : $(this).next('input').val(current_qty - 1);
                }
            }
        } else {
            alert('Passenger field must be numeric!');
        }
    });

    function checkIncrementPax(id) {

        let adl_qty = parseInt($("#adl").val());
        let chd_qty = parseInt($("#chd").val());
        let inf_qty = parseInt($("#inf").val());

        if (id != 'inf') {
            if (adl_qty + chd_qty >= 6) {
                alert('Maximum 6 passengers per booking');
                return false;
            }
        } else {
            if (inf_qty >= adl_qty) {
                alert('Allowed just one "Infant" per an "Adult"');
                return false;
            }
        }

        return true;
    }


});