<script>
$(function() {
    
    

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100
            
        }, {
            y: '2007',
            a: 75
            
        }, {
            y: '2008',
            a: 50
            
        }, {
            y: '2009',
            a: 75
            
        }, {
            y: '2010',
            a: 50
            
        }, {
            y: '2011',
            a: 75
            
        }, {
            aryo: '2012',
            a: 100
            
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A'],
        hideHover: 'auto',
        resize: true
    });   
});
</script>