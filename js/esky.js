jQuery(document).ready(function ($) {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function () {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });

  $(".gallery-main").attr('src', $(".gallery-item").attr('src').replace(/-[0-9]*x[0-9]*/, ''));

  $(".gallery-item").click(function () {
    $(".gallery-main").attr('src', $(this).attr('src').replace(/-[0-9]*x[0-9]*/, ''));
  });
});