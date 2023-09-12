var popup = document.getElementById("popup");
var closePopup = document.getElementById("closePopup");

var showPopupButton = document.getElementById("showPopup");

function openPopup() {
    popup.style.display = "block";
}

function closePopupFn() {
    popup.style.display = "none";
}

showPopupButton.addEventListener("click", openPopup);
closePopup.addEventListener("click", closePopupFn);
