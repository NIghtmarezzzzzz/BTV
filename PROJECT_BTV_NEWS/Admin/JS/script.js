let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
  nav.classList.toggle("navclose");
});
$(document).ready(function () {
  $("nav-option").on("click", function () {
    alert();
    $(".box-container").hide();
    $(".manage-container").hide();
  });
});
