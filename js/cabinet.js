/**** Animations on scrolling ****/
new WOW().init();

$(document).ready(function () {
  $("#achievments-link").click(function () {
    $(".password-wrapper").slideUp("slow");
    $(".data-wrapper").slideUp("slow");
    $(".achievment-wrapper").fadeIn();
  });
  $("#password-link").click(function () {
    $(".data-wrapper").slideUp("slow");
    $(".achievment-wrapper").slideUp("slow");
    $(".password-wrapper").fadeIn();
  });
  $("#data-link").click(function () {
    $(".password-wrapper").slideUp("slow");
    $(".achievment-wrapper").slideUp("slow");
    $(".data-wrapper").fadeIn();
  });
});
