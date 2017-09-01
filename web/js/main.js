$(document).ready(function() {
   $('.navbar-nav li').on('click',function () {
       $('.navbar-nav li').each(function () {
           $(this).removeClass('active');
       });
       $(this).addClass('active');
   })
} );