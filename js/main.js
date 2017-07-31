$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('select').material_select();
});

    $( document ).ready(function() {
       $('.datepicker').pickadate({
          format: 'yyyy-mm-dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });