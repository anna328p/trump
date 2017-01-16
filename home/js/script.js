$(document).ready(function(){

//Get the main score and change the CSS for the circle
var mainScore = $("#mScore").text();
var mainColorScore = mainScore/10;
$("#mScore").css("background-color", getColorForPercentage(mainColorScore));

//Get the republican score and change the CSS for it's circle
var rScore = $("#repScore").text();
var rColorScore = rScore/10;
$("#repScore").css("background-color", getColorForPercentage(rColorScore));

//Get the democratic score and change the CSS for it's circle
var dScore = $("#demScore").text();
var dColorScore = dScore/10;
$("#demScore").css("background-color", getColorForPercentage(dColorScore));

function showItems(){

$("#desktopfriendly").hide();
$("#mobilefriendly").hide();

var windowSize = $(window).width();

if(windowSize<699){
  $("#mobilefriendly").show();
}

else{
  $("#mScore").addClass("animated tada");
  $("#desktopfriendly").show();
}

}//end of showItems function

showItems();

$(window).resize(function(){
    showItems();
}); // this will make it mobile friendly/desktop friendly after the page is loaded


$(".circle").hover(function(){
  var animation = "animated pulse";
  $(this).addClass(animation);
});

/*$(".sDataCenter").hover(function(){
  $(".sDataCenter").addClass("animated pulse");
});

$(".sNewsWall").hover(function(){
  $(".sNewsWall").addClass("animated pulse");
});

$(".sBlog").hover(function(){
  $(".sBlog").addClass("animated pulse");
}); */

//For the slider

$("#featuredSlider").lightSlider({
                keyPress:true,
                controls: false,
                slideMargin: 40,
                responsive: true,
                autoWidth: true,
                pager: false
            });

//To get the slider background-color values working
$("#listItem1").css("background-color", getColorForPercentage($("#listItem1").text()/10));
$("#listItem2").css("background-color", getColorForPercentage($("#listItem2").text()/10));
$("#listItem3").css("background-color", getColorForPercentage($("#listItem3").text()/10));
$("#listItem4").css("background-color", getColorForPercentage($("#listItem4").text()/10));
$("#listItem5").css("background-color", getColorForPercentage($("#listItem5").text()/10));
$("#listItem6").css("background-color", getColorForPercentage($("#listItem6").text()/10));
$("#listItem7").css("background-color", getColorForPercentage($("#listItem7").text()/10));
$("#listItem8").css("background-color", getColorForPercentage($("#listItem8").text()/10));
$("#listItem9").css("background-color", getColorForPercentage($("#listItem9").text()/10));
$("#listItem10").css("background-color", getColorForPercentage($("#listItem10").text()/10));




  setInterval(function () {
    if( $('.recentEvent').is(':appeared')){
      $(".recentEvent").typewriter({
        speed: 130
      });
    }
  }, 250);


//To get that sweet typewriter effect



}); //jquery end


var percentColors = [
    { pct: 0.0, color: { r: 0xff, g: 0x00, b: 0 } },
    { pct: 0.5, color: { r: 0xff, g: 0xff, b: 0 } },
    { pct: 1.0, color: { r: 0x00, g: 0xff, b: 0 } } ];

var getColorForPercentage = function(pct) {
    for (var i = 1; i < percentColors.length - 1; i++) {
        if (pct < percentColors[i].pct) {
            break;
        }
    }
    var lower = percentColors[i - 1];
    var upper = percentColors[i];
    var range = upper.pct - lower.pct;
    var rangePct = (pct - lower.pct) / range;
    var pctLower = 1 - rangePct;
    var pctUpper = rangePct;
    var color = {
        r: Math.floor(lower.color.r * pctLower + upper.color.r * pctUpper),
        g: Math.floor(lower.color.g * pctLower + upper.color.g * pctUpper),
        b: Math.floor(lower.color.b * pctLower + upper.color.b * pctUpper)
    };
    return 'rgb(' + [color.r, color.g, color.b].join(',') + ')';
};
