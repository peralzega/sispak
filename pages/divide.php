<?php
$string = "t2";
$sub1 = substr($string,0,1);
$sub2 = substr($string,1,1)-1;
$sub3 = $sub1.$sub2;
echo $sub3; 
?>