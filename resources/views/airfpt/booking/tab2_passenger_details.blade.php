<div class="passenger_title bg-light rounded p-2">
    <li class="fa fa-user-friends "></li>
    <span class="">
        <h3 class="m-0 p-0">Passengers</h3>
        <h6 class="m-0 p-0">Enter passenger details</h6>
    </span>
</div>
<div class="passenger_detail bg-light p-2">
    <h5 class="font-weight-bold">Passenger</h5>
    <div class="form-row d-flex justify-content-between">
        <div class="col-md-2 mb-3">
            <label for="title">Title</label>
            <select name="title" id="title" class="form-control">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
            </select>
        </div>
        <div class="col-md mb-3">
            <label for="validationCustom02">Last/Family name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="As given in passport/ID" value="" required>
            <div class="valid-"></div>
        </div>
        <div class="col-md mb-3">
            <label for="validationCustom02">Middle & First/Given name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="As given in passport/ID" value="" required>

        </div>
    </div>
    <div class="form-row d-flex justify-content-between">
        <div class="col-md ">
            <label for="dob">Date of birth</label>
            <div class="input-group">
                <label for="" class="input-group-prepend"><small class="input-group-text">Day</small> </label>
                <select name="day" id="day" class="form-control">
                    <option value='1'>01</option>
                </select>
                <label for="" class="input-group-prepend text-small"><small class="input-group-text">Month</small> </label>
                <!-- <strong>/</strong> -->
                <select name="month" id="month" class="form-control">

                    <option value=1>01</option>
                </select>
                <!-- <strong>/</strong> -->
                <label for="" class="input-group-prepend"><small class="input-group-text">Year</small> </label>
                <select name="year" id="year" class="form-control">
                    <option value='1989'>1989</option>
                </select>
            </div>
        </div>
        <div class="col-md mb-3">
            <label for="mem_id">Member ID (Optional)</label>
            <input type="text" class="form-control" name="mem_id" id="mem_id" placeholder="Your member ID">
            <div class="valid-"></div>
        </div>

    </div>
</div>