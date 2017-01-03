$(document).ready(function(){

  var chart = new Chartist.Line('#thechart', {
    labels: ['1/23', '1/30', '2/6', '2/13', '2/20', '2/27'],
    series: [
      [1, 5, 1.2, 5, 4, 3],
      [2, 3, 4, 8, 1, 2],
      [5, 4, 7, 5, 3, 2.3]
    ]
  }, {
    low: 0,
    showArea: true,
    showPoint: false,
    fullWidth: true
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
