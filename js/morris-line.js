$(function() {
      Morris.Line({
      element: 'line-example',
      data: [
        { y: '2015-5', a: 100, b: 90 },
        { y: '2015-4', a: 75,  b: 65 },

      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B']
    });
    
    
    
});
