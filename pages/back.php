<?php
session_start();
$getTanya	= $_SESSION['tanya'];
$front		= substr($getTanya,0,1);
$end		= substr($getTanya,1,1);

$hitung		= $_SESSION['hitung'];
$_SESSION['hitung'] = $hitung-2;
header('location:index.php');

if ($end > 1 && $end <=4) {
	unset($_SESSION['tanya']);
} else if ($end > 4 && $end <=6) {
	$_SESSION['tanya'] = "t2";
} else if ($end > 6 && $end <=12) {
	$_SESSION['tanya'] = "t3";
} else if ($end > 12 && $end <= 21) {
	$_SESSION['tanya'] = "t5";
} else if ($end == 6) {
	$_SESSION['tanya'] = "t2";
} else if ($end > 20 && $end <=23) {
	$_SESSION['tanya'] = "t8";
} else {
	$_SESSION['tanya'] = "t22";
}
header('location:index.php');
?>