$(document).ready(function () {
  // alert('ok');

  // HIDES COLLAPSED NAVBAR AFTER LINK CLICKED
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });

  // REMOVES BLUE COLOUR ON ACTIVE NAV LINKS WHEN LOGO IS CLICKED
  $('.logo').click(function() {
    $('.nav-item .nav-link').removeClass('active');
  });

  // ADDS BLUE COLOUR ON ACTIVE NAV LINKS WHEN LINK IS CLICKED
  $('.nav-item .nav-link').click(function() {
    $('.nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
  });

  // SETS CURRENT YEAR IN FOOTER
  // Create Date Object
  var date = new Date();
  var currentYear = date.getFullYear();
  document.getElementById("year").innerHTML = currentYear;



}); // end document.ready
