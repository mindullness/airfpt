$(document).ready(() => {
    // $('#pnr').focus();
    // $('#flightNum').focus();
});
var formBox = document.querySelectorAll(".form-box");
formBox.forEach((item) => {
    item.onclick = () => {
        item.querySelector(".form-input").focus();
    };
});
var formInput = document.querySelectorAll(".form-input");
formInput.forEach((item) => {
    if (item.nextElementSibling) {
        item.parentElement.classList.add("active-red_trung");
        item.previousElementSibling.classList.add("activeTxt-red_trung");
    }
    item.onfocus = () => {
        item.parentElement.classList.add("active_trung");
        item.previousElementSibling.classList.add("activeTxt_trung");
        if (item.nextElementSibling) {
            item.parentElement.classList.remove("active-red_trung");
            item.previousElementSibling.classList.remove("activeTxt-red_trung");
            item.nextElementSibling.remove();
        }
    };
    item.onblur = () => {
        item.parentElement.classList.remove("active_trung");
        item.previousElementSibling.classList.remove("activeTxt_trung");
    };
});
var formLabel = document.querySelectorAll(".form-label");
formLabel.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
    });
});
/* SEAT MAP start */
var seatNOT = document.querySelectorAll(".seat-disabled_trung");
seatNOT.forEach((item) => {
    item.addEventListener("click", () => {
        alert("Cannot select this seat");
    });
});
var seatOK = document.querySelectorAll(".seat-available_trung");
seatOK.forEach((item) => {
    item.addEventListener("click", () => {
        item.classList.remove("seat-available_trung");
        item.classList.add("seat-selected_trung");
        var seatno = document.querySelector(".seatInput_trung");
        console.log(item.children[0].innerHTML);
        if (!seatno.value) {
            seatno.value = item.children[0].children[0].innerHTML;
            seatno.className = "selected_trung";
            seatno.nextElementSibling.removeAttribute("style");
        } else {
            var seatno2 = document.querySelector(".seatInput_trung");
            seatno2.value = item.innerHTML;
        }
        item.children[0].children[0].removeAttribute('style')
    });
});

var removeSeatBtn = document.querySelectorAll(".remove-seat-btn");
removeSeatBtn.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        location.reload();
    });
});

// var alphaRow = document.querySelector('.alphabet-row')
// var seatmapContainer = document.querySelector('.seatmap-container')
// console.log(alphaRow);
// seatmapContainer.addEventListener("scroll", ()=>{
//     if(seatmapContainer.parentNode> 0){
//         alphaRow.classList.toggle('sticky-alpha-row')
//     }
// })

// var selected_seat_arr = []
// var selectedSeat = document.querySelectorAll('.selected')
// selectedSeat.forEach(item => {
//     console.log(item.innerHTML)
//     selected_seat_arr = [...selected_seat_arr, item.innerHTML]
// })
// console.log(selected_seat_arr);

var checkboxInput = document.querySelectorAll(".checkboxInput");
checkboxInput.forEach((item) => {
    console.log(item);
    item.addEventListener("change", (e) => {
        console.log([e.target]);
        console.log(item.getAttribute("data-fltNum"));
        document.querySelectorAll(".inputFltNum").forEach((childItem) => {
            var inputFltNum = childItem.value;
            if (
                e.target.checked === true &&
                childItem.value !== e.target.attributes[2].value
            ) {
                childItem.setAttribute("disabled", true);
                document
                    .querySelectorAll(`.inputFltNum${inputFltNum}`)
                    .forEach((deeperChildItem) => {
                        deeperChildItem.setAttribute("disabled", true);
                    });
            } else {
                console.log("ASDASD");
                childItem.removeAttribute("disabled");
                document
                    .querySelectorAll(`.inputFltNum${inputFltNum}`)
                    .forEach((deeperChildItem) => {
                        deeperChildItem.removeAttribute("disabled");
                    });
            }
        });
    });
});
/* SEAT MAP end */
