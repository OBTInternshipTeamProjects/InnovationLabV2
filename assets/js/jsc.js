/*function openNav() {
    document.getElementById("mySidenav").style.width = "50%";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0%";
}*/


$(document).ready(function(){
  $('.mobile-toggle').click(function(){
    $('nav').toggle();
  });
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });



$('.stuff').hide(0);

var topofDiv = $(".hero").offset().top; //gets offset
var height = $(".hero").outerHeight(); //gets height
var total = topofDiv + height;
$(window).scroll(function(){
    if($(window).scrollTop() > (total) - 300){
      $('#one').delay(0).show(0);
      $('#two').delay(1000).show(0);
      $('#three').delay(2000).show(0);
      $("#line").addClass("drop");
    }
});
});