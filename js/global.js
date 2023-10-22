$(window).on('load', function(){
  //------------------------------------------------------------- Preloader
  $('header, section, footer').animate({'opacity': 1}, 'slow');
  $('#preloader').fadeOut('slow',function(){$(this).remove();});
});


$(document).ready(function() {
  //------------------------------------------------------------- main menu open
    $('#butt_menu').click(function(){
        $('#main_menu, #lang_menu').delay(300).slideToggle('fast');
    });
  //------------------------------------------------------------- burger menu
    (function() {
      "use strict";
      var toggles = document.querySelectorAll(".c-burger");
      for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
      };
      function toggleHandler(toggle) {
        toggle.addEventListener( "click", function(e) {
          e.preventDefault();
          (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
        });
      }
    })();





  //------------------------------------------------------------- modal

    var modal = document.getElementById("modal-registration");
    $('#btn-registration').click(function(event){
      modal.style.display = "block";
    } );
    $('.close').click(function(event){
      modal.style.display = "none";
    } );
    $('.area').click(function(event){
      modal.style.display = "none";
    } );

}); 


$(window).scroll(function () {
  //------------------------------------------------------------- menu header
    if ($(document).scrollTop() < 200) { 
        $('body').removeClass('scrolled');
    } else {
        $('body').addClass('scrolled');  
    }
  //------------------------------------------------------------- top button
    if ($(document).scrollTop() < 800) { 
        $('.top').addClass('top_no');
    } else {
        $('.top').removeClass('top_no');  
    }
});






