<script>
$(document).ready(function(){

console.log($(".larger").text());


  var chart = new Chartist.Line('#thechart', {
    labels: ['Start', '1/20', '1/27'],
    series: [
      [0,<?php echo $mainScore ?>], //overall score
      [0,<?php echo $republicanScore ?>], //repbulican score
      [0,<?php echo $democratScore ?>], //democrat score
    ]
  }, {
    showArea: true,
    showPoint: false,
  },
  {
});

  chart.on('draw', function(data) {
    if(data.type === 'line' || data.type === 'area') {
      data.element.animate({
        d: {
          begin: 300 * data.index,
          dur: 700,
          from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
          to: data.path.clone().stringify(),
          easing: Chartist.Svg.Easing.easeOutQuint
        }
      });
    }

  });

});
</script>
