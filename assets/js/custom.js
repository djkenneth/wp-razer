
$(function() {
  $('.nav-link').click(function(){
    $(this).next('.nav-link .dropdown-menu').toggle();
  });
  
  $(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.nav-link') && !$(target).parents().is('.nav-link')) {
      $('.nav-link .dropdown-menu').hide();
    }
  });
  
  $( document ).ready(function() {
    $('.dropdown-submenu').on('click', function() {
      $('.nav-link ul.dropdown-menu .dropdown-submenu ul').toggle();
    })
  });
});


$(function() {
  $('.toggle').click(function(){
    $(this).toggleClass('open');

   if ($('.collapse').hasClass('active')) {
    $('.collapse').removeClass('active');
   }
   else {
    $('.collapse').addClass('active');
   }
 })
});

$( document ).ready(function() {
  $('.category-product').click (function() {
    $('.nav-link .dropdown-menu').hide();
  })
});


function lockScroll() {
  if ($('body').hasClass('lock-scroll')) {
      $('body').removeClass('lock-scroll');
  }
  else {
      $('body').addClass('lock-scroll');
  }
}  

$(document).ready(function() {
  $('.toggle').click(function() {
    lockScroll();
  }); 
});
