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
// var dayObj = document.getElementById("#day");
// var monthObj = document.getElementById("#month");
var isLeap = false;
window.onload = function() {
    $("#booking_form").ready(function() {
        setYear();
        setMonth();
        alert($("#month").val());
    });
}
document.getElementById("year").onchange = function() {
    checkLeapYear();
    checkDay();
}

monthObj.onchange = function() {
    checkDay();
}
$("#day").focus(function() {
    setDay();
});


function checkDay() { // Check the day is valid or not
    var month = $("#month").val();
    var day = $("#day").val();
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
    alert('setday');
    $("#day").html("");

    let month = $("#month").val();
    console.log(month);
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
            $("#day").append("<option value='" + i + "'>0" + i + "</option>");
            // dayObj.innerHTML += "<option value='" + i + "'>0" + i + "</option>"
        } else {
            $("#day").append("<option value='" + i + "'>" + i + "</option>");
            // dayObj.innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
}

function setMonth() {
    for (let i = 1; i <= 12; i++) {
        if (i < 10) {
            $("#month").append("<option value='" + i + "'>0" + i + "</option>");
            // monthObj.innerHTML += "<option value='" + i + "'>0" + i + "</option>"
        } else {
            $("#month").append("<option value='" + i + "'>" + i + "</option>");
            // monthObj.innerHTML += "<option value='" + i + "'>" + i + "</option>";
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