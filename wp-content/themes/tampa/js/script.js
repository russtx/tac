// Floating div
jQuery(document).ready(function($) {
//this is the floating content
  var $floatingbox = $('#floating-box');

  if($('body').length > 0){

    var bodyY = parseInt($('body').offset().top) + 300;
    var originalX = $floatingbox.css('margin-left');

    $(window).scroll(function () { 

      var scrollY = $(window).scrollTop();
      var isfixed = $floatingbox.css('position') == 'fixed';

      if($floatingbox.length > 0){

        // $floatingbox.html("scrollY : " + scrollY + ", bodyY : " + bodyY + ", isfixed : " + isfixed);

        if ( (parseInt(scrollY) - 150) > bodyY && !isfixed ) {
  		    $floatingbox.stop().css({
  		      position: 'fixed',
            top: 50
  		    });
  	    } else if ( (parseInt(scrollY) - 150) < bodyY && isfixed ) {

  	 	    $floatingbox.css({
    		    position: 'relative',
    		    top: 0,
    		    marginLeft: originalX
  	      });
        }
      }
    });
  }
});

// // drop downs
// $(document).ready(function(e) {
//  try {
//    // $("#simple-search select").msDropDown();
//  } catch(e) {
//    // alert(e.message);
//  }
// 
//  // $("select").chosen({allow_single_deselect: true});// $(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
// 
// });
// 
// 
// 
// //slideshow
// $(window).load(function() { // NIVO SLIDER - this must be added to the script.js file. As you can see (".nivoSlider({..."), it refers to the function nivoSlider and refers back to the nivo-slider jquery pack
//     $('#slider').nivoSlider({
//         effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
//         // slices: 15, // For slice animations
//         // boxCols: 8, // For box animations
//         // boxRows: 4, // For box animations
//         animSpeed: 500, // Slide transition speed
//         pauseTime: 3000, // How long each slide will show
//         startSlide: 0, // Set starting Slide (0 index)
//         directionNav: true, // Next & Prev navigation
//         directionNavHide: true, // Only show on hover
//         controlNav: true, // 1,2,3... navigation
//         controlNavThumbs: false, // Use thumbnails for Control Nav
//         // controlNavThumbsFromRel: false, // Use image rel for thumbs
//         // controlNavThumbsSearch: '.jpg', // Replace this with...
//         // controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
//         keyboardNav: true, // Use left & right arrows
//         pauseOnHover: true, // Stop animation while hovering
//         manualAdvance: false, // Force manual transitions
//         captionOpacity: 0.9 // Universal caption opacity
//         // prevText: 'Prev', // Prev directionNav text
//         // nextText: 'Next', // Next directionNav text
//         // beforeChange: function(){}, // Triggers before a slide transition
//         // afterChange: function(){}, // Triggers after a slide transition
//         // slideshowEnd: function(){}, // Triggers after all slides have been shown
//         // lastSlide: function(){}, // Triggers when last slide is shown
//         // afterLoad: function(){} // Triggers when slider has loaded
//     });
// });
// 
//  
// // drop down bars in search
// $(document).ready(function(e) {
//  try {
//    // $("body select").msDropDown();
//  } catch(e) {
//    alert(e.message);
//  }
// });
// 
// 
// // fancybox
// $("a[rel=image_gallery]").fancybox({ // FANCYBOX - this must be added to the script.js file. As you can see (".fancybox({..."), it refers to the function fancybox and refers back to the fancybox jquery files
//        'transitionIn'    : 'none',
//        'transitionOut'   : 'none',
//        'titlePosition'   : 'over',
//        'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
//          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
//        }
// });
// 
// 
// ////
// ////// ADD EVERYTHING BELOW FOR FANCYBOX FORMS
// ////
// 
// 
// // fancybox sign up 
// $("#signup").fancybox({
//  'scrolling'   : 'no',
//  'titleShow'   : false,
//  'onClosed'    : function() {
//      $("#login_error").hide();
//  }
// });
// 
// //Simple validation; submit data using Ajax and display response
// $("#signup_form").bind("submit", function() {
// 
//  if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
//      $("#login_error").show();
//      $.fancybox.resize();
//      return false;
//  }
// 
//  $.fancybox.showActivity();
// 
//  $.ajax({
//    type    : "POST",
//    cache : false,
//    url   : "/data/login.php",
//    data    : $(this).serializeArray(),
//    success: function(data) {
//      $.fancybox(data);
//    }
//  });
// 
//  return false;
// });
// 
// 
// // fancybox password change 
// $("#password_change").fancybox({
//  'scrolling'   : 'no',
//  'titleShow'   : false,
//  'onClosed'    : function() {
//      $("#login_error").hide();
//  }
// });
// 
// //Simple validation; submit data using Ajax and display response
// $("#password_form").bind("submit", function() {
// 
//  if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
//      $("#login_error").show();
//      $.fancybox.resize();
//      return false;
//  }
// 
//  $.fancybox.showActivity();
// 
//  $.ajax({
//    type    : "POST",
//    cache : false,
//    url   : "/data/login.php",
//    data    : $(this).serializeArray(),
//    success: function(data) {
//      $.fancybox(data);
//    }
//  });
// 
//  return false;
// });
// 
// 
// 
// // fancybox login
// $("#login").fancybox({
//  'scrolling'   : 'no',
//  'titleShow'   : false,
//  'onClosed'    : function() {
//      $("#login_error").hide();
//  }
// });
// 
// //Simple validation; submit data using Ajax and display response
// $("#login_form").bind("submit", function() {
// 
//  if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
//      $("#login_error").show();
//      $.fancybox.resize();
//      return false;
//  }
// 
//  $.fancybox.showActivity();
// 
//  $.ajax({
//    type    : "POST",
//    cache : false,
//    url   : "/data/login.php",
//    data    : $(this).serializeArray(),
//    success: function(data) {
//      $.fancybox(data);
//    }
//  });
// 
//  return false;
// });
//   $(function() {
//     $( "#datepicker" ).datepicker({
//       showOn: "button",
//       buttonImage: "img/icon-calendar.png",
//       buttonImageOnly: true
//     });
//   });
// 
//    floatingMenu.add('map',  
//    { targetTop: 10, prohibitXMovement: true, snap: false });  
