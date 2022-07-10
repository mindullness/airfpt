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
            'transition': '0.3s',
            'transition-timing-function': 'ease-in-out'
        });
        $('.pax').css({
            'visibility': 'hidden',
            'transition': '0.3s',
            'transition-timing-function': 'ease-in-out'
        });
    }

    function afterFullFill() {
        $('.indexForm').css({
            'height': '368px',
            'transition': '0.3s',
            'transition-timing-function': 'ease-in-out'
        });
        $('.pax').css({
            'visibility': 'visible',
            'transition': '0.3s',
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

    // HANDLE PASSENGER QUANTITY //

    // Increment Event
    $(".inc").click(function() {

        let current_qty = parseInt($(this).prev('input').val());;
        let id = $(this).prev('input').attr('id');
        incrementPax(id, current_qty);
        show_totalPax();
    });

    function incrementPax(id, current_qty) {

        switch (id) {
            case 'inf':
                if (is_inf_avai(current_qty)) {
                    $('#' + id).val(current_qty + 1);
                }
                break;
            default:
                if (is_totalPax_avai()) {
                    $('#' + id).val(current_qty + 1);
                }
                break;
        }
        return true;
    }

    // Decrement Event
    $(".dec").click(function() {
        let current_qty = parseInt($(this).next('input').val());
        let id = $(this).next('input').attr('id');

        decrementPax(id, current_qty);
        show_totalPax();
    });

    function decrementPax(id, current_qty) {
        switch (id) {
            case 'adl':
                if (is_adl_avai(current_qty)) {
                    $('#' + id).val(current_qty - 1);
                }
                break;
            default:
                if (current_qty >= 1) {
                    $('#' + id).val(current_qty - 1);
                }
                break;
        }
    }

    function is_adl_avai(adl_qty) {
        // Check whether adl quantity is available to decrease.
        // Minimun Adl quantity is 1 and greater than or equal to Inf quantity.
        if (adl_qty == $('#inf').val()) {
            alert('One infant per adult allowed!');
            return false;
        }
        if (adl_qty > 1)
            return true;
        else
            return false;
    }

    function is_totalPax_avai() {
        let adl_qty = parseInt($("#adl").val());
        let chd_qty = parseInt($("#chd").val());
        if (adl_qty + chd_qty < 6)
            return true;
        else {
            alert('Maximum 6 passengers per booking allowed!')
            return false;
        }
    }

    function is_inf_avai(inf_qty) {
        if (inf_qty < $("#adl").val())
            return true;
        else {
            alert('One infant per adult allowed!');
            return false;
        }
    }

    function show_totalPax() {
        let adl = parseInt($("#adl").val());
        let chd = parseInt($("#chd").val());
        let inf = parseInt($("#inf").val());

        $("#totalPax").val((adl > 1 ? (adl + " Adults") : (adl + " Adult")) + (chd > 1 ? (", " + chd + " Children") : (chd == 1 ? (", " + chd + " Child") : "")) + (inf != 0 ? (", " + inf + " Infant" + (inf > 1 ? "s" : "")) : ""));
    }
});