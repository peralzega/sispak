
<script>
$(function() {
    <?php for($i=1;$i<=$control;$i++) {?>
    Morris.Line({
      element: 'line-example-<?php echo "$i";?>',
      data: [
      <?php $n=1;?>
        <?php while(($jual=mysql_fetch_array($art[$i])) && ($target=mysql_fetch_array($rt[$i]))) {?>
           { y: '<?php echo "$y_[$n]";?>-<?php echo "$m_[$n]";?>-<?php echo "$d_[$n]";?>', a: <?php echo $target['target'];?>, b: <?php echo $jual['jumlah'];?> },
              
        <?php $n++;}?>
  
         

      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Target', 'Penjualan']
    });
    <?php }?>
     
    
    
});

</script>