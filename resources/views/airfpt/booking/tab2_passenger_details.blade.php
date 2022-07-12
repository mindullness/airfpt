<div class="passenger_title bg-light rounded p-2">
    <li class="fa fa-user-friends "></li>
    <span class="">
        <h3 class="m-0 p-0">Passengers</h3>
        <h6 class="m-0 p-0">Enter passenger details</h6>
    </span>
</div>

<!-- foreach here -->
<div class="eachpax"></div>
<!-- End foreach here -->

<div id="test"></div>
<script>
    let adl = parseInt(sessionStorage.getItem("adl"));
    let chd = parseInt(sessionStorage.getItem("chd"));
    let inf = parseInt(sessionStorage.getItem("inf"));

    // ADL
    for (let p = 1; p <= adl; p++) {
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
            '<label for="validationCustom02">Last name</label>' +
            '<input required type="text" class="form-control adl_last_name" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="valid-"></div>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="validationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control adl_first_name" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
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
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            ' </div>' +
            ' <div class="col-md mb-3">' +
            '  <label for="mem_id">Member ID (Optional)</label>' +
            '  <input type="text" class="form-control" name="mem_id' + p + '" id="mem_id' + p + '" placeholder="Your member ID">' +
            '  <div class="valid-"></div>' +
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
            '    <option value="master">Master</option>' +
            '    <option value="miss">Miss</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="validationCustom02">Last name</label>' +
            '<input required type="text" class="form-control" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="valid-"></div>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="validationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
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
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            ' </div>' +
            ' <div class="col-md mb-3">' +
            '  <label for="mem_id">Member ID (Optional)</label>' +
            '  <input type="text" class="form-control" name="mem_id' + p + '" id="mem_id' + p + '" placeholder="Your member ID">' +
            '  <div class="valid-"></div>' +
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
            '<label for="validationCustom02">Last name</label>' +
            '<input required type="text" class="form-control" name="last_name' + p + '" id="last_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
            '<div class="valid-"></div>' +
            '</div>' +
            '<div class="col-md mb-3">' +
            '<label for="validationCustom02">Middle & First name</label>' +
            '  <input required type="text" class="form-control" name="first_name' + p + '" id="first_name' + p + '" placeholder="As given in passport/ID" value="" required>' +
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
            '    <select required name="year' + p + '" id="year' + p + '" class="form-control">' +
            '        <option value="">Year</option>' +
            '    </select>' +
            '  </div>' +
            ' </div>' +
            ' </div>' +
            ' </div>' +
            '  </div>'
        );
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
</script>