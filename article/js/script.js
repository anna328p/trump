$(document).ready(function(){

  $(".dateText").typewriter({
    speed: 60
  });


  $(function() {
        $('#rate').barrating({
          theme: 'bars-1to10',
          initialRating: 5,
          showValues: true
        });
     });

});
