$(document).ready(function(){

$("#desktopfriendly").hide();
$("#mobilefriendly").hide();

var windowSize = $(window).width();

if(windowSize<699){
  $("#mobilefriendly").show();
}

else{
  $("#desktopfriendly").show();
}



});
