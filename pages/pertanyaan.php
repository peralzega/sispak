<?php 
session_start();
if(isset($_SESSION['hitung'])){
    $no=$_SESSION['hitung'];
    $cet=$no+1;
    $_SESSION['hitung']=$cet;
}
else {
    $_SESSION['hitung']=1;
    $cet=$_SESSION['hitung'];
}
?>
<?php if (isset($_SESSION['akhir'])){?>
<div class="panel-heading">
            <h3>Hasil akhir</h3>
            </div>
<?php } else {?>
    <div class="panel-heading">
            <h3>Pertanyaan <?php echo $cet?></h3>
            </div>
    <?php }?>

	<?php
if (isset($_SESSION['tanya'])){
    $tanya=$_SESSION['tanya'];
    if ($tanya=="t2") {
    ?>
    <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Berapa ukuran tubuh dari imago (serangga dewasa)?</p>
                    </div>
                    </div>
    </div>

    <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                                  
                    <div class="form-group">
                    <form id="form_tanya" method="post" action=generator.php>
                    <label class="radio-inline">
                    <input type="radio" name="jawab" id="optionsRadiosInline1" value="j4">Kecil (< 1 cm)
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="jawab" id="optionsRadiosInline2" value="j5">Besar (> 1 cm)
                    </label>
                                           
                                            </form>
                                        </div>
                                        </div>
                                    </div>
    </div>
    <?php } elseif ($tanya=="t3") {?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Apakah jenis serangga yang ditemukan?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j6">Kepik
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j7">Ulat
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j8">Kutu
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j9">Tungau
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j10">Kumbang
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j11">Lalat
                                            </label>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                            </div>
    <?php }
    elseif ($tanya=="t4") {?>
 
<div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Aphis glycines</p>
                    </div>
                    </div>
            </div>
                         
             <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                   <p>Nama lain : Kutu daun kedelai</p>
                                   <p>Jenis serangga : Kutu</p>
                                   <p>Bagian tanaman yang diserang : Daun</p>
                                        </div>
                                    </div>
                            </div>

    <?php }
    
    elseif($tanya=="t5"){?>
    <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Apa warna tubuh dari imago (serangga dewasa) hama?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j12">Coklat
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j13">Hijau
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j14">Abu-abu
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j15">Kuning
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j16">Merah
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j17">Hitam
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j18">Emas
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j19">Perak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j20">Sawo Matang
                                            </label>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                            </div>
            
    <?php }
    elseif ($tanya=="t6") {?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Kepik Hijau</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t7"){?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>
<?php } 
    elseif ($tanya=="t8"){?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Berapa ukuran tubuh dari imago (serangga dewasa) hama?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j21">Kecil (< 1 cm)
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j22">Besar (> 1 cm)
                                            </label>
                                            
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                            </div>
<?php } 
    elseif($tanya=="t9"){?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t10") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
elseif ($tanya=="t11") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Phaedonia inclusa</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kumbang kedelai</p>
                            <p>Jenis serangga : Kumbang</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } elseif ($tanya=="t12") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Dimanakah telur serangga dapat ditemukan?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j23">Atas daun
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j24">Bawah daun
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j25">Lainnya
                                            </label>
                                            
                                </form>
                                        </div>
                                        </div>
                                    </div>
            </div>

<?php } 
elseif ($tanya=="t13") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Kepik Coklat</p>
                    </div>
                    </div>
            </div>
          

<?php } 
elseif ($tanya=="t14") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
          

<?php } 
elseif ($tanya=="t15") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kepik Piezodorus / Kepik Hijau Pucat</p>
                            <p>Jenis serangga : Kepik</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t16") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Bemisia tabaci</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kutu kebul / kutu bemisia</p>
                            <p>Jenis serangga : Kutu</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t17") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Tetranychus cinnabarinus</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Tungau Merah</p>
                            <p>Jenis serangga : Tungau</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t18") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kepik Piezodorus / Kepik Hijau Pucat</p>
                            <p>Jenis serangga : Kepik</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t19") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kepik Piezodorus / Kepik Hijau Pucat</p>
                            <p>Jenis serangga : Kepik</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t20") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kepik Piezodorus / Kepik Hijau Pucat</p>
                            <p>Jenis serangga : Kepik</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t21") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Piezodorus hybneri</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Kepik Piezodorus / Kepik Hijau Pucat</p>
                            <p>Jenis serangga : Kepik</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>           

<?php } 
elseif ($tanya=="t22") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Apa warna tubuh dari imago (serangga dewasa) hama?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j26">Coklat
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j27">Hijau
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j28">Abu-abu
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j29">Kuning
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j30">Merah
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j31">Hitam
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j32">Emas
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j33">Perak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j34">Sawo Matang
                                            </label>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
            </div>          

<?php } 
elseif ($tanya=="t23") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Bagian apa yang diserang oleh hama?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j35">Polong
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j36">Daun
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j37">Batang
                                            </label>
                                            
                                </form>
                                        </div>
                                        </div>
                                    </div>
            </div>          

<?php } elseif ($tanya=="t24"){?> 
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Ophiomyia phaseoli</p>
                    </div>
                    </div>
            </div>

<!--cek disini------------------------------------------------------------------------------------------------------------------------->
<?php } elseif ($tanya=="t25") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Fase tanaman yang diserang ?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j38">Berbunga (31 - 50 hari setelah tanam)
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j39">Pertumbuhan polong (51 - 70 hari setelah tanam)
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j40">Pemasakan polong (71 hari setelah tanam - panen)
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j41">Tanaman muda (0 - 10 hari setelah tanam)
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j42">Vegetatif (11 - 30 hari setelah tanam)
                                            </label>
                                            
                                </form>
                                        </div>
                                        </div>
                                    </div>
            </div>          

<?php } elseif ($tanya=="t26") {?>
 
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Ophiomyia phaseoli</p>
                    </div>
                    </div>
            </div>


<?php } elseif ($tanya=="t27") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Dimanakah telur serangga dapat ditemukan?</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j43">Atas daun
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j44">Bawah daun
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j45">Lainnya
                                            </label>
                                            
                                            
                                </form>
                                        </div>
                                        </div>
                                    </div>
            </div>          

<?php } 
    elseif ($tanya=="t28") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t29") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>
            

<?php } 
    elseif ($tanya=="t30") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Lamprosema indicata</p>
                    </div>
                    </div>
            </div>
            

<?php } 
    elseif ($tanya=="t31") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t32") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Chrysodeixis chalcites</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Jengkal</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t33") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Chrysodeixis chalcites</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Jengkal</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t34") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Chrysodeixis chalcites</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Jengkal</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t35") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Spodoptera litura</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat grayak</p>
                            <p>Jenis serangga : Ulatk</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t36") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Etiella Zinckenella</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Penggerek Polong</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Polong</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t37") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Helicoverpa armigera</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Heliothis / Ulat Buah</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t38") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Helicoverpa armigera</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Heliothis / Ulat Buah</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t39") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Melanagromyza sojae</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Lalat batang kacang</p>
                            <p>Jenis serangga : Lalat</p>
                            <p>Bagian tanaman yang diserang : Daun, Batang</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t40") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Melanagromyza sojae</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Lalat batang kacang</p>
                            <p>Jenis serangga : Lalat</p>
                            <p>Bagian tanaman yang diserang : Daun, Batang</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t41") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Melanagromyza sojae</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Lalat batang kacang</p>
                            <p>Jenis serangga : Lalat</p>
                            <p>Bagian tanaman yang diserang : Daun, Batang</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t42") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Melanagromyza sojae</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Lalat batang kacang</p>
                            <p>Jenis serangga : Lalat</p>
                            <p>Bagian tanaman yang diserang : Daun, Batang</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t43") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Melanagromyza sojae</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Lalat batang kacang</p>
                            <p>Jenis serangga : Lalat</p>
                            <p>Bagian tanaman yang diserang : Daun, Batang</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t44") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Lamprosema Indicata</p>
                    </div>
                    </div>
            </div>


<?php } 
    elseif ($tanya=="t45") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Chrysodeixis chalcites</p>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Nama lain : Ulat Jengkal</p>
                            <p>Jenis serangga : Ulat</p>
                            <p>Bagian tanaman yang diserang : Daun</p>
                    </div>
                    </div>
            </div>

<?php } 
    elseif ($tanya=="t46") { ?>
            <div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Lamprosema Indicata</p>
                    </div>
                    </div>
            </div>

<?php } ?>






<!---------------------------------------------------jangan dihapus dsini untuk batas if atas-->
<?php } else {?>
<div class="row">
                    <div class="col-lg-12">
                    <div class="panel-body">
                            <p>Apakah jenis metamorphosis yang dialami oleh hama?</p>
                    </div>
                    </div>
            </div>
                         
             <div class="row">
                                 <div class="col-lg-12">
                               <div class="panel-body">
                                  
                            <div class="form-group">
                                <form id="form_tanya" method="post" action=generator.php>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline1" value="j1">Paurometabola (Tidak Sempurna) : Telur > Nimfa > Imago
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline2" value="j2">Holometabola (Sempurna) : Telur > Larva > Pupa > Imago
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jawab" id="optionsRadiosInline3" value="j3">Parteogenesis (Melahirkan)
                                            </label>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                            </div>
<?php } ?>