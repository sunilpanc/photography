$(window).scroll(function(){
if($(document).scrollTop() > 50){
  $('nav').addClass('navbar2');
  $('nav').removeClass('navbar1');
  $('#w3s').attr("src","images/main-logo.png");
}
else{
  $('nav').addClass('navbar1');
  $('nav').removeClass('navbar2');
  $('#w3s').attr("src","images/main-logo1.png");
}
});
