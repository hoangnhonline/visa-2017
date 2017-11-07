/*
 * ---------------------------------------------------
 * 1. Scroll to Top
 * 2. Sticky Menu
 * 3. select2
 * 4. datetimepicker
 * 5. Not Overflow datetimepicker
 */

(function($){
  "use strict";

  /*
   * 1. Scroll to Top
  */
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {
      $('#return-to-top').addClass('td-scroll-up-visible');
    } else {
      $('#return-to-top').removeClass('td-scroll-up-visible');
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 'slow');
  });

  /*
   * 2. Sticky Menu
  */
  $('.fixed').sticky({ topSpacing: 0 });
  /*
   * 3. select2
  */
  $('select').select2();

  /*
   * 4. datetimepicker
  */
  $(function(){
    // Determine the div width parent
    var width = document.getElementById('nav-service-wrap').offsetWidth;
    // Determine the div width parent
    var mainDiv = $('.nav-service');
    var childDivCount = mainDiv.find('li').length;
    // Get width for li
    var widthItem = width/childDivCount;
    $('.nav-service li').css("width", widthItem);
  });

})(jQuery); // End of use strict