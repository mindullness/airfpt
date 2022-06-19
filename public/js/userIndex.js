$(document).ready(function() {


    var roundtrip = true;
    beforeFullFill();

    $("#indexFormTab > li > .nav-link").click(function() {
        $(this).toggleClass("active");
    });

    // Check radio button "roundtrip" or "oneway" is checked
    $('input:radio[name="isRoundTrip"]').change(function() {
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

    // Script to toggle Active Tab between "Booking", "Manage Booking" and "Flight Status" Tabs
    $("#indexFormTab > li > .nav-link").click(function() {
        $(this).toggleClass("active");

    });
});