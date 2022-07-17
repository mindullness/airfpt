<div class="passenger_title bg-light rounded p-2">
    <li class="fa fa-user-friends "></li>
    <span class="">
        <h3 class="m-0 p-0">Passengers</h3>
        <h6 class="m-0 p-0">Enter passenger details</h6>
    </span>
</div>

<!-- foreach here -->
<div class="eachpax">
    <div class="passenger_detail bg-light p-2 mb-2">
        <h5 class="font-weight-bold mt-2">Passenger (primary passenger)</h5>
        <div class="form-row d-flex justify-content-between">
            <div class="col-md-2 mb-3">
                <label for="title">Title
                    
                </label>
                <select required name="title1" id="title1" class="form-control">
                    <option selected value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                </select>
            </div>
            <div class="col-md mb-3">
                <label for="invalidationCustom02">Last name</label>
                <input required type="text" class="form-control adl_last_name" name="last_name1" id="last_name1" placeholder="As given in passport/ID" value="" autocomplete="on">
                <i style="color: red;" class="invalid-last_name1"></i>
            </div>
            <div class="col-md mb-3">
                <label for="invalidationCustom02">Middle & First name</label>
                <input required type="text" class="form-control adl_first_name" name="first_name1" id="first_name1" placeholder="As given in passport/ID" value="" autocomplete="on">
                <i style="color:red;" class="invalid_first_name1"></i>
            </div>
        </div>
        <div class="form-row d-flex justify-content-between">
            <div class="col-md ">
                <label for="dob">Date of birth</label>
                <div class="input-group">
                    <label for="day" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>
                    <select required name="day1" id="day1" class="form-control">
                        <option value="">Day</option>
                    </select>
                    <label for="month" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>
                    <select required name="month1" id="month1" class="form-control" onfocus="setMonth(1);"></select>
                    <label for="year" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>
                    <select required name="year1" id="year1" class="form-control">
                        <option value="">Year</option>
                    </select>
                </div>
                <i style="color: red;" class="invalid-dob"></i>
            </div>
            <div class="col-md mb-3">
                <label for="mem_id">Member ID (Optional)</label>
                <input type="text" class="form-control" name="mem_id1" id="mem_id1" placeholder="Your member ID" autocomplete="on">
                <i class="invalid-"></i>
            </div>
        </div>
        <hr>
        <h5 for="contact" class="font-weight-bold">Contact Information</h5>
        <div class="form-row d-flex justify-content-between">
            <div class="col-md mb-3">
                <label for="contact">Mobile Phone</label>
                <input required type="tel" class="form-control phone" name="phone" id="phone" placeholder="Your mobile number" value="" autocomplete="on">
                <i class="invalid-phone"></i>
            </div>
            <div class="col-md mb-3">
                <label for="invalidationCustom02">Email</label>
                <input required type="email" class="form-control email" name="email" id="email" placeholder="Your email" value="" autocomplete="on">
                <div class="invalid-email"></div>
            </div>
        </div>

    </div>

</div>
<!-- End foreach here -->

<script>
    let adl = parseInt(sessionStorage.getItem("adl"));
    let chd = parseInt(sessionStorage.getItem("chd"));
    let inf = parseInt(sessionStorage.getItem("inf"));

    // ADL
    for (let p = 2; p <= adl; p++) {
        $('.eachpax').append(
            '<div class="passenger_detail bg-light p-2 mb-2">' +
            '<h5 class="font-weight-bold mt-2">Passenger</h5>' +
            ' <div class="form-row d-flex justify-content-between">' +
            ' <div class="col-md-2 mb-3">' +
            '  <label for="title">Title</label>' +
            '   <select required name="title' + p + '"id="title' + p + '" class="form-control">' +
            '    <option value="Mr">Mr</option>' +
            '    <option value="Mrs">Mrs</option>' +
            '    <option value="Ms">Ms</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Last name</label>' +
            '<input required type="text" class="form-control adl_last_name" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" autocomplete="on">' +
            '<i class="invalid-last_name'+p+'"></i>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control adl_first_name" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" autocomplete="on">' +
            '<i class="invalid-first_name'+p+'"></i>' +
            ' </div>' +
            ' </div>' +
            ' <div class="form-row d-flex justify-content-between">' +
            '  <div class="col-md ">' +
            '  <label for="dob">Date of birth</label>' +
            ' <div class="input-group">' +
            '     <label for="day" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="day' + p + '" id="day' + p + '" class="form-control">' +
            '         <option value="">Day</option>' +
            '     </select>' +
            '    <label for="month" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="month' + p + '" id="month' + p + '" class="form-control" onfocus="setMonth(' + p + ');"></select>' +
            '     <label for="year" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control chd_year">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            '<i style="color: red;" class="invalid-dob'+p+'"></i>'+
            ' </div>' +
            ' <div class="col-md mb-3">' +
            '  <label for="mem_id">Member ID (Optional)</label>' +
            '  <input type="text" class="form-control" name="mem_id' + p + '" id="mem_id' + p + '" placeholder="Your member ID">' +
            '  <div class="invalid-"></div>' +
            ' </div>' +
            ' </div>' +
            '  </div>'
        );
    }
    // CHD
    for (let p = adl + 1; p <= chd + adl; p++) {
        $('.eachpax').append(
            '<div class="passenger_detail bg-light p-2 mb-2">' +
            '<h5 class="font-weight-bold mt-2">Passenger (Child)</h5>' +
            ' <div class="form-row d-flex justify-content-between">' +
            ' <div class="col-md-2 mb-3">' +
            '  <label for="title">Title</label>' +
            '   <select required name="title' + p + '"id="title' + p + '" class="form-control">' +
            '    <option value="Mstr">Master</option>' +
            '    <option value="Miss">Miss</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Last name</label>' +
            '<input required type="text" class="form-control" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="invalid-last_name'+p+'"></div>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="invalid-first_name'+p+'"></div>' +
            ' </div>' +
            ' </div>' +
            ' <div class="form-row d-flex justify-content-between">' +
            '  <div class="col-md ">' +
            '  <label for="dob">Date of birth</label>' +
            ' <div class="input-group">' +
            '     <label for="day" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="day' + p + '" id="day' + p + '" class="form-control">' +
            '         <option value="">Day</option>' +
            '     </select>' +
            '    <label for="month" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="month' + p + '" id="month' + p + '" class="form-control" onfocus="setMonth(' + p + ');"></select>' +
            '     <label for="year" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control chd_year">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            '<i style="color: red;" class="invalid-dob'+p+'"></i>'+
            ' </div>' +
            ' <div class="col-md mb-3">' +
            '  <label for="mem_id">Member ID (Optional)</label>' +
            '  <input type="text" class="form-control" name="mem_id' + p + '" id="mem_id' + p + '" placeholder="Your member ID">' +
            '  <div class="invalid-"></div>' +
            ' </div>' +
            ' </div>' +
            '  </div>'
        );
    }

    // INF
    for (let p = adl + chd + 1, j = 1; p <= chd + adl + inf; p++, j++) {
        $('.eachpax').append(
            '<div class="passenger_detail bg-light p-2 mb-2">' +
            '<h5 class="font-weight-bold mt-2">Passenger (Infant)</h5>' +
            ' <div class="form-row d-flex justify-content-between">' +
            ' <div class="col-md mb-3">' +
            '  <label for="title">Accompanied by</label>' +
            '   <select required name="accompanied_' + j + '" id="accompanied_' + j + '" class="form-control">' +
            '<option value="">Parent or guardian</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Last name</label>' +
            '<input required type="text" class="form-control" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="invalid-last_name'+p+'"></div>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="invalidationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="invalid-first_name'+p+'"></div>' +
            ' </div>' +
            ' </div>' +
            ' <div class="form-row d-flex justify-content-between">' +
            '  <div class="col-md ">' +
            '  <label for="dob">Date of birth</label>' +
            ' <div class="input-group">' +
            '     <label for="day" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="day' + p + '" id="day' + p + '" class="form-control">' +
            '         <option value="">Day</option>' +
            '     </select>' +
            '    <label for="month" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="month' + p + '" id="month' + p + '" class="form-control" onfocus="setMonth(' + p + ');"></select>' +
            '     <label for="year" class="input-group-prepend"><i class="fa fa-calendar-alt input-group-text"></i></label>' +
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control inf_year">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            '<i style="color: red;" class="invalid-dob'+p+'"></i>'+
            ' </div>' +
            ' </div>' +
            ' </div>' 
        );
    }

    function invalid_dob() {
        $("select[id*='year']").filter(".chd_year")
    }
    // INF
    // Display <option> to identiy which adult the infant is accompanied by
    $('select[name*="accompanied_"]').focus(function() {
        $(this).html('');
        // Clear the content first
        let selectedGuardians = [];

        for (let inf_order = 1; inf_order <= inf; inf_order++) {
            selectedGuardians.push($('#accompanied_' + inf_order).val());
        }

        $(this).append('<option value="0">Parent or guardian</option>');
        for (let i = 1; i <= adl; i++) {
            //    Check if
            if (!selectedGuardians.includes(i + '')) {
                $(this).append(
                    '<option value="' + i + '">' + ($("#last_name" + i).val()) + ' ' + ($("#first_name" + i).val()) + ' </option>'
                );
            }
        }
    });

    $('input[type=text]').blur(function() {
        $(this).val($(this).val().toUpperCase());
    })
</script>