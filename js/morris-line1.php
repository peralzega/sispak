
<script>
$(function() {
    <?php for($i=1;$i<=$control;$i++) {?>
    Morris.Line({
      element: 'line-example-<?php echo "$i";?>',
      data: [
        <?php for($n=1;$n<=7;$n++) {?>
        { y: '<?php echo "$y_[$n]";?>-<?php echo "$m_[$n]";?>-<?php echo "$d_[$n]";?>', a: 100, b: 90 },
              
        <?php }?>
  
         

      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Target', 'Penjualan']
    });
    <?php }?>
     
    
    
});

</script>