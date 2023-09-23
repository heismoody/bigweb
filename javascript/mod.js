let tobeviewed = document.querySelector(".tobeviewed");
let displyform = document.querySelector(".displayform");

function views() {
    tobeviewed.style.display = "block";
    displyform.style.display = "none";
}

function registering() {
    tobeviewed.style.display = "none";
    displyform.style.display = "block";

}