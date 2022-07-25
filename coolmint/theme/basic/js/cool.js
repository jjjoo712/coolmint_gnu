$(document).ready(function(){

  AOS.init();


  $('.gnb_1da').click(function(e){
      e.preventDefault(); // a 원래기능 없애
      $("#gnb_all, #gnb_all_bg").hide();
      $('body, html').animate({
          scrollTop : $($(this).attr('href')).offset().top
      }, 400)
  })
})