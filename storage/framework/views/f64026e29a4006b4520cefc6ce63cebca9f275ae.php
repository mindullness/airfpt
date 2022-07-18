<div class="passenger_title bg-light rounded p-2">
    <li class="	fas fa-tasks"></li>
    <span class="">
        <h3 class="m-0 p-0">Payment</h3>
        <h6 class="m-0 p-0">Please double check your informations</h6>
    </span>
</div>
<!-- ADL  -->

<div class="bg-light p-2 mb-2 table-responsive ">
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>Adult</th>
                <th>Date of birth</th>
                <th>Email</th>
                <th>Phone</th>
        </thead>
        </tr>
        <tbody class="adl_payment">
            <!-- content -->
        </tbody>
    </table>
</div>
<!-- End ADL  -->

<!-- CHD  -->
<div class="chd_content"></div>

<!-- INF  -->
<div class="inf_content"></div>

<div class="passenger_title bg-light rounded p-2">
    <li class="	fas fa-tasks mr-2 mt-2"></li>
    <span class="">
        <a href="#" class="m-0 p-0 h3 pb-2">Read Terms & conditions</a>
        <h6 class=" p-0"> <input type="checkbox" required name="agreements" id="agreement">&nbsp; I agree to the terms and conditions, and confirm all my given information is correct.</h6>
    </span>
</div>

<script>
    function show_payment_tab() {
        $(".adl_payment").html('');
        $(".chd_content").html('');
        $(".inf_content").html('');
        let adl = parseInt(sessionStorage.getItem("adl"));
        let chd = parseInt(sessionStorage.getItem("chd"));
        let inf = parseInt(sessionStorage.getItem("inf"));

        // ADL
        for (let p = 1; p <= adl; p++) {
            $('.adl_payment').append(
                '<tr>' +
                '<td>' +
                '<span id="confirmed_title' + p + '"></span>' +
                '<span id="confirmed_last_name' + p + '"></span>' +
                '<span id="confirmed_first_name' + p + '"> </span>' +
                '</td>' +
                '<td>' +
                '<span id="confirmed_dob' + p + '"></span>' +
                '</td>' +
                '<td>' +
                '<span id="confirmed_email' + p + '"></span>' +
                '</td>' +
                '<td>' +
                '<span id="confirmed_phone' + p + '"></span>' +
                '</td>' +
                '</tr>'
            );
            fill_details(p);
        }
        // CHD
        if (chd > 0) {
            $(".chd_content").append(
                '<div class="bg-light p-2 mb-2 table-responsive ">' +
                '<table class="table table-hover ">' +
                '<thead>' +
                '<tr>' +
                '<th>Child</th>' +
                '<th>Date of birth</th>' +
                '<th>Email</th>' +
                '<th>Phone</th>' +
                '</thead>' +
                '</tr>' +
                '<tbody class="chd_payment">' +
                '</tbody>' +
                '</table>' +
                '</div>'
            );

            for (let p = adl + 1; p <= chd + adl; p++) {
                $('.chd_payment').append(
                    '<tr>' +
                    '<td>' +
                    '<span id="confirmed_title' + p + '"></span>' +
                    '<span id="confirmed_last_name' + p + '"></span>' +
                    '<span id="confirmed_first_name' + p + '"> </span>' +
                    '</td>' +
                    '<td>' +
                    '<span id="confirmed_dob' + p + '"></span>' +
                    '</td>' +
                    '<td>' +
                    '<span id="confirmed_email' + p + '"></span>' +
                    '</td>' +
                    '<td>' +
                    '<span id="confirmed_phone' + p + '"></span>' +
                    '</td>' +
                    '</tr>'
                );
                fill_details(p);
            }

        }


        // INF
        if (inf > 0) {
            $(".inf_content").append(
                '<div class="bg-light p-2 mb-2 table-responsive ">' +
                '<table class="table table-hover ">' +
                '<thead>' +
                '<tr>' +
                '<th>Infant</th>' +
                '<th>Date of birth</th>' +
                '<th>Accompanied by</th>' +
                '</thead>' +
                '</tr>' +
                '<tbody class="inf_payment">' +
                '</tbody>' +
                '</table>' +
                '</div>'
            );
            for (let p = adl + chd + 1, j = 1; p <= chd + adl + inf; p++, j++) {
                $('.inf_payment').append(
                    '<tr>' +
                    '<td>' +
                    '<span id="confirmed_last_name' + p + '"></span>' +
                    '<span id="confirmed_first_name' + p + '"> </span>' +
                    '</td>' +
                    '<td>' +
                    '<span id="confirmed_dob' + p + '"></span>' +
                    '</td>' +
                    '<td>' +
                    '<span id="confirmed_accompanied_' + j + '"></span>' +
                    '</td>' +
                    '</tr>'
                );
                fill_details(p);
                let g = $("#accompanied_" + j).val();
                let guardian_name = $("#title" + g).val() + ". " + $("#last_name" + g).val() + " " + $("#first_name" + g).val();
                $("#confirmed_accompanied_" + j).html(guardian_name);
            }
        }

        function fill_details(p) {
            $("#confirmed_title" + p).html($("#title" + p).val() + ". ");
            $("#confirmed_last_name" + p).html($("#last_name" + p).val());
            $("#confirmed_first_name" + p).html(" " + $("#first_name" + p).val());

            let day = $("#day" + p).val();
            let month = $("#month" + p).val();
            let year = $("#year" + p).val();
            let confirmed_dob = new Date(year, month - 1, day).toLocaleDateString('en-GB', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            }).replace(/ /g, '-');
            $("#confirmed_dob" + p).html(confirmed_dob);
            $("#confirmed_email" + p).html($("#email" + p).val());
            $("#confirmed_phone" + p).html($("#phone" + p).val());
        }
    }
</script><?php /**PATH E:\xampp\htdocs\AirFPT\resources\views/airfpt/booking/tab4_payment.blade.php ENDPATH**/ ?>