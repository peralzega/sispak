<?php
session_start();

if(isset($_POST['jawab'])){
$jawab=$_POST['jawab'];


if($jawab=="j1"){$_SESSION['tanya']="t2";header('location:index.php');}
else if($jawab=="j2"){$_SESSION['tanya']="t3";header('location:index.php');}
else if($jawab=="j3"){$_SESSION['tanya']="t4";$_SESSION['akhir']=1;header('location:index.php');}
//------------------level 1---------------------------------------------------------------------------

else if($jawab=="j4"){$_SESSION['tanya']="t5";header('location:index.php');}
else if($jawab=="j5"){$_SESSION['tanya']="t6";$_SESSION['akhir']=1;header('location:index.php');}

else if($jawab=="j6"){$_SESSION['tanya']="t7";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j7"){$_SESSION['tanya']="t8";header('location:index.php');}
else if($jawab=="j8"){$_SESSION['tanya']="t9";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j9"){$_SESSION['tanya']="t10";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j10"){$_SESSION['tanya']="t11";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j11"){$_SESSION['tanya']="t12";header('location:index.php');}
//----------------------------level 2-----------------------------------------------------------------
else if($jawab=="j12"){$_SESSION['tanya']="t13";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j13"){$_SESSION['tanya']="t14";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j14"){$_SESSION['tanya']="t15";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j15"){$_SESSION['tanya']="t16";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j16"){$_SESSION['tanya']="t17";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j17"){$_SESSION['tanya']="t18";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j18"){$_SESSION['tanya']="t19";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j19"){$_SESSION['tanya']="t20";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j20"){$_SESSION['tanya']="t21";$_SESSION['akhir']=1;header('location:index.php');}

else if($jawab=="j21"){$_SESSION['tanya']="t22";header('location:index.php');}
else if($jawab=="j22"){$_SESSION['tanya']="t23";header('location:index.php');}

else if($jawab=="j23"){$_SESSION['tanya']="t24";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j24"){$_SESSION['tanya']="t25";header('location:index.php');}
else if($jawab=="j25"){$_SESSION['tanya']="t26";$_SESSION['akhir']=1;header('location:index.php');}
//------------------------------------------level 3------------------------------------------------
else if($jawab=="j26"){$_SESSION['tanya']="t27";header('location:index.php');}
else if($jawab=="j27"){$_SESSION['tanya']="t28";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j28"){$_SESSION['tanya']="t29";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j29"){$_SESSION['tanya']="t30";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j30"){$_SESSION['tanya']="t31";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j31"){$_SESSION['tanya']="t32";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j32"){$_SESSION['tanya']="t33";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j33"){$_SESSION['tanya']="t34";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j34"){$_SESSION['tanya']="t35";$_SESSION['akhir']=1;header('location:index.php');}

else if($jawab=="j35"){$_SESSION['tanya']="t36";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j36"){$_SESSION['tanya']="t37";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j37"){$_SESSION['tanya']="t38";$_SESSION['akhir']=1;header('location:index.php');}

else if($jawab=="j38"){$_SESSION['tanya']="t39";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j39"){$_SESSION['tanya']="t40";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j40"){$_SESSION['tanya']="t41";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j41"){$_SESSION['tanya']="t42";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j42"){$_SESSION['tanya']="t43";$_SESSION['akhir']=1;header('location:index.php');}
//------------level 4---------------------------------------------------------------------------

else if($jawab=="j43")
    {$_SESSION['tanya']="t44";$_SESSION['akhir']=1;header('location:index.php');}
else if($jawab=="j44")
    {$_SESSION['tanya']="t45";$_SESSION['akhir']=1;header('location:index.php');}
    
else 
    {$_SESSION['tanya']="t46";$_SESSION['akhir']=1;header('location:index.php');}
    
}
else {
    
    echo"<script>alert('Silahkan isi setiap pertanyaan sesuai dengan gejala yang anda alami');window.location='destroy.php';</script>";exit;}
//------------level 5----------------------------------------------------------------------
?>