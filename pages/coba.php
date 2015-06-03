<?php
//require 'koneksi.php';
//$hari=date("d");
//
//$li ="SELECT * FROM penjualan WHERE tanggal=$hari";
//$hasil=mysql_query($li);
//$hasil1=mysql_fetch_array($hasil);
//$id_penjualan=$hasil1['id_penjualan'];
//
//$li1 ="SELECT jumlah FROM rincian_penjualan WHERE id_penjualan=$id_penjualan";
//$hasil1 = mysql_query($li1);
//
//while($data = mysql_fetch_array($hasil1)){
//    echo $data['jumlah'];
//}

$d_1=date('d', strtotime(' -1 day'));
$m_1=date('m', strtotime(' -1 day'));
$y_1=date('Y', strtotime(' -1 day'));
echo "$d_1";
echo "$m_1";
echo "$y_1";
echo " ";
$d_7=date('d', strtotime(' -7 day'));
$m_7=date('m', strtotime(' -7 day'));
$y_7=date('Y', strtotime(' -7 day'));
echo "$d_7";
echo "$m_7";
echo "$y_7";
?>