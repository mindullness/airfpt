<!-- Birthday FIELD CODE -->
<div class="form-group w-25 d-flex justify-content-between ">
<select name="day" id="day" class="form-control">
                        <option value='1' hidden>01</option>              
                    </select>
                    <strong>/</strong>
                    <select class="form-control" name="month" id="month">
                        <option value=1 hidden>01</option>                                        
                    </select>
                    <strong>/</strong>
                    <select class="form-control" name="year" id="year">
                        <option value='1989' hidden>1989</option>                        
                   </select>
                    <span class="form-control" id="leap_year" style="visibility: hidden;">
                        <i class="material-icons" style="font-size: x-small; color: rgb(0, 117, 255);">&#xe86c;</i>
                        Leap Year
                    </span>
</div>
<script>
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
                isLeap?maxDay = 29:maxDay = 28;                
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

            for (let i = 2012; i >= 1920; i--) {
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

            if (isLeap) {
                document.getElementById("leap_year").style.visibility = "visible";
            } else {
                document.getElementById("leap_year").style.visibility = 'hidden';
            }
        }

    </script>

<!-- End Birthday FIELD CODE  -->