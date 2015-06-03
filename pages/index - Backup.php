<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/css/over.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Sistem Pakar <br>Tanaman Kedelai</h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        <?php 
                        require 'pertanyaan.php';
                        ?>    
                            
                            
                            
                       
                            
                            
                        </div>
                        <a>
                            <div class="panel-footer">
                                 <?php if (isset($_SESSION['akhir'])){?>
                                <a href="destroy.php"><button type="button" class="btn btn-outline btn-success btn-block">reset</button></a>
                                 <?php } else {?>
                                <button form="form_tanya" type="submit" class="btn btn-outline btn-success btn-block">Submit</button>
                                 <?php }?>
                            </div
                        </a>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">
                        <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-outline btn-success btn-sm">Kepik Coklat</button>
						<button data-toggle="modal" data-target="#kepikHijau" type="button" class="btn btn-outline btn-success btn-sm">Kepik Hijau</button>
                        <button data-toggle="modal" data-target="#myModal2" type="button" class="btn btn-outline btn-success btn-sm">Kepik Piezodorus</button>
                        <button data-toggle="modal" data-target="#kumbangKedelai" type="button" class="btn btn-outline btn-success btn-sm">Kumbang Kedelai</button>
						<button data-toggle="modal" data-target="#kutuDaun" type="button" class="btn btn-outline btn-success btn-sm">Kutu Daun</button>
						<button data-toggle="modal" data-target="#kutuKebul" type="button" class="btn btn-outline btn-success btn-sm">Kutu Kebul</button>
						<button data-toggle="modal" data-target="#lalatBatang" type="button" class="btn btn-outline btn-success btn-sm">Lalat Batang</button>
						<button data-toggle="modal" data-target="#lalatPucuk" type="button" class="btn btn-outline btn-success btn-sm">Lalat Pucuk</button>
						<button data-toggle="modal" data-target="#tungauMerah" type="button" class="btn btn-outline btn-success btn-sm">Tungau Merah</button>
						<button data-toggle="modal" data-target="#ulatBibit" type="button" class="btn btn-outline btn-success btn-sm">Lalat Bibit</button>
						<button data-toggle="modal" data-target="#ulatGrayak" type="button" class="btn btn-outline btn-success btn-sm">Ulat Grayak</button>
						<button data-toggle="modal" data-target="#ulatHeliothis" type="button" class="btn btn-outline btn-success btn-sm">Ulat Heliothis</button>
						<button data-toggle="modal" data-target="#ulatJengkal" type="button" class="btn btn-outline btn-success btn-sm">Ulat Jengkal</button>
						<button data-toggle="modal" data-target="#ulatPenggerek" type="button" class="btn btn-outline btn-success btn-sm">Ulat Penggerek</button>
						<button data-toggle="modal" data-target="#ulatPenggulung" type="button" class="btn btn-outline btn-success btn-sm">Ulat Penggulung</button>
                    </p>
                    
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kepik Polong</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kepik.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
                                            Jenis serangga : Kepik<br>
                                            Bagian tanaman yang diserang : Polong<br>
                                            Fase tanaman yang diserang : Berbunga (31 - 50 hari setelah tanam), Pertumbuhan polong (51 - 70 hari setelah tanam), Pemasakan polong (71 hari setelah tanam - panen)<br>
                                            Tempat peletakan telur : Atas daun dan Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 2.6 - 9.9 mm<br>
                                            Ukuran tubuh imago : 11- 14 mm<br>
                                            Warna tubuh imago : Kuning dan Coklat<br>
                                            Fase metamorfosis : Tidak Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Polong dan biji kempis, polong mengering, kulit polong menjadi coklat, ada bintik hitam di polong, penurunan kualitas biji
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Tanam tanaman perangkap Sesbania rostrata</li>
                                            <li>Semprot insektisida bila mencapai ambang kendali (1 pasang imago/20 rumpun)</li>
                                            
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
							
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kepik Hijau Pucat</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kepik_piezodorus.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <i>Piezodorus hybneri</i><br>
                                            Jenis serangga : Kepik<br>
                                            Bagian tanaman yang diserang : Polong<br>
                                            Fase tanaman yang diserang : Berbunga (31 - 50 hari setelah tanam), Pertumbuhan polong (51 - 70 hari setelah tanam), Pemasakan polong (71 hari setelah tanam - panen)<br>
                                            Tempat peletakan telur : Atas daun, bawah daun, batang dan rumput<br>
                                            Ukuran tubuh nimfa / larva : 1.1 - 8.59 mm<br>
                                            Ukuran tubuh imago : 8.8 - 12 mm<br>
                                            Warna tubuh imago : Hijau pucat<br>
                                            Fase metamorfosis : Tidak Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Polong dan biji kempis, polong mengering, ada bintik hitam di polong, dan penurunan kualitas biji
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
											<li>Pergiliran tanaman</li>
                                            <li>Tanam tanaman perangkap <em>Sesbania rostrata</em></li>
                                            <li>Semprot insektisida</li>
                                            </ul>
											<p> </p> 
											Jenis Insektisida :<br> 
											<ul>
											<li>Atabron 50 EC</li>
											<li>Ambush 2 EC</li>
											<li>Bassa 500 EC</li>
											<li>Corsair 100 C</li>
											<li>Decis 2.5 EC</li>
											<li>Matador 25 EC</li>
											<li>Larvin 75 WP</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                    
					<div class="modal fade" id="kumbangKedelai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kumbang Kedelai</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kumbang_kedelai.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Phaedonia inclusa</em><br>
                                            Jenis serangga : Kumbang<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Tanaman muda (0 - 10 hari setelah tanam), Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : < 4 mm<br>
                                            Ukuran tubuh imago : 4 - 6 mm<br>
                                            Warna tubuh imago : Hitam<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Muncul bercak dan daun menguning<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Pemantauan secara rutin, semprot insektisida apabila telah mencapai ambang kendali (2 ekor/8 tanaman)</li>
                                              
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Ambush 2 EC</li>
											<li>Bayrusil 250 EC</li>
											<li>Buldok 25 EC</li>
											<li>Corsair 100 EC</li>
											<li>Cymbush 50 EC</li>
											<li>Decis 2.5 EC</li>
											<li>Karphos 25 EC</li>
											<li>Kiltop 500 EC</li>
											<li>Matador 25 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                
					<div class="modal fade" id="kepikHijau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kepik Hijau</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kepik_hijau.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Nezara viridula</em></br>
                                            Jenis serangga : Kepik<br>
                                            Bagian tanaman yang diserang : Polong<br>
                                            Fase tanaman yang diserang : Berbunga (31 - 50 hari setelah tanam), Pertumbuhan polong (51 - 70 hari setelah tanam), Pemasakan polong (71 hari setelah tanam - panen)<br>
                                            Tempat peletakan telur : Atas daun dan Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 1.2 - 10.2 mm<br>
                                            Ukuran tubuh imago : 1.4 - 1.6 mm<br>
                                            Warna tubuh imago : Hijau<br>
                                            Fase metamorfosis : Tidak Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Polong dan biji kempis, polong mengering, ada bintik hitam di polong, dan penurunan kualitas biji<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
											<li>Pergiliran tanaman</li>
                                            <li>Tanam tanaman perangkap <em>Sesbania rostrata</em></li>
                                            <li>Semprot insektisida</li>
                                            
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Atabron 50 EC</li>
											<li>Ambush 2 EC</li>
											<li>Bassa 500 EC</li>
											<li>Corsair 100 C</li>
											<li>Decis 2.5 EC</li>
											<li>Matador 25 EC</li>
											<li>Larvin 75 WP</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>	
				
					<div class="modal fade" id="kutuDaun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kutu Daun Kedelai</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kutu_daun.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Aphis glycines</em><br>
                                            Jenis serangga : Kutu<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Tanaman muda (0 - 10 hari setelah tanam), Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 0.1 - 0.8 mm<br>
                                            Ukuran tubuh imago : 0.8 - 1.6 cm<br>
                                            Warna tubuh imago : Hijau dan kuning<br>
                                            Fase metamorfosis : Parteogenesis<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Tanaman kerdil, daun menguning dan gugur<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Pemantauan secara rutin, apabila populasi tinggi semprot dengan insektisida</li>
                                              
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Nissuron 50 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="kutuKebul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Kutu Kebul</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/kutu_kebul.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Bemisia tabaci</em><br>
                                            Jenis serangga : Kutu<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Tanaman muda (0 - 10 hari setelah tanam), Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 0.23 - 0.5 mm<br>
                                            Ukuran tubuh imago : 1 mm<br>
                                            Warna tubuh imago : Kuning<br>
                                            Fase metamorfosis : Tidak Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Muncul bercak dan daun menguning<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Pemantauan secara rutin, apabila populasi tinggi semprot dengan insektisida</li>
                                              
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Mitac 200 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="lalatBatang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Lalat Batang Kacang</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/lalat_batang.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Melanagromyza sojae</em><br>
                                            Jenis serangga : Lalat<br>
                                            Bagian tanaman yang diserang : Daun dan batang<br>
                                            Fase tanaman yang diserang : Tanaman Muda (0 - 10 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : < 10 mm<br>
                                            Ukuran tubuh imago : 188 - 3.90 mm<br>
                                            Warna tubuh imago : Hitam<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Daun berbintik, tanaman mengering, dan layu<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Mulsa Jerami</li>
											<li>Perlakuan benih (pada daerah endemik)</li>
											<li>Semprot insektisida saat tanaman berumur 12 hari, bila popilasi mencapai ambang kendali (1 imago/50 rumpun)</li>
                                            
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Furadan 3 G</li>
							
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="lalatPucuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Lalat Pucuk Kacang</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/lalat_pucuk.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Melanagromyza dolicostigma</em><br>
                                            Jenis serangga : Lalat<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Tanaman Muda (0 - 10 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 3.30 - 3.70 mm<br>
                                            Ukuran tubuh imago : 2.25 - 5.65 mm<br>
                                            Warna tubuh imago : Hitam<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Daun layu<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
											<li>Menanam varietas toleran</li>
                                            <li>Mulsa Jerami</li>
											<li>Perlakuan benih (pada daerah endemik)</li>
											<li>Semprot insektisida saat tanaman berumur 18 hari, bila popilasi mencapai ambang kendali (1 imago/50 rumpun)</li>
                                            
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Petrofur 3 G</li>
											<li>Larvin 75 WP</li>
											<li>Decis 2.5 EC</li>
											<li>Bassa 5 EC</li>
											<li>Ripcord 5 EC</li>
											<li>Regent 50 EC</li>
							
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>		
					<div class="modal fade" id="tungauMerah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tungau Merah</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/tungau_merah.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Tetranychus cinnabarinus</em><br>
                                            Jenis serangga : Tungau<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Tanaman muda (0 - 10 hari setelah tanam), Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 0.1 - 0.4 mm<br>
                                            Ukuran tubuh imago : 0.5 mm<br>
                                            Warna tubuh imago : Merah<br>
                                            Fase metamorfosis : Tidak Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Muncul bercak dan daun menguning<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Pemantauan secara rutin, apabila populasi tinggi semprot dengan akarisida</li>
                                              
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Kelthene 200 EC</li>
											<li>Omite</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>		
					<div class="modal fade" id="ulatBibit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Lalat Bibit Kacang</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/lalat_bibit.png" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Ophiomyia phaseoli</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Daun, batang dan polong<br>
                                            Fase tanaman yang diserang : Tanaman Muda (0 - 10 hari setelah tanam)<br>
                                            Tempat peletakan telur : Tusukan antara epidermis atas dan bawah<br>
                                            Ukuran tubuh nimfa / larva : 3.75 mm<br>
                                            Ukuran tubuh imago : 1.9 - 2.2 mm<br>
                                            Warna tubuh imago : Hitam<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Imago dan Nimfa / Larva<br>
                                            Gejala : Muncul bercak, tanaman kerdil, dan layu<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Mulsa Jerami</li>
											<li>Perlakuan benih (pada daerah endemik)</li>
											<li>Semprot insektisida saat tanaman berumur 7 hari, bila popilasi mencapai ambang kendali (1 imago/50 rumpun)</li>
                                            
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Marshal 25 ST</li>
							
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="ulatGrayak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ulat Grayak</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/ulat_grayak.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Spodoptera litura</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Vegetatif (11 - 30 hari setelah tanam), Berbunga (31 - 50 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 1 - 50 mm<br>
                                            Ukuran tubuh imago : 16 - 17 mm<br>
                                            Warna tubuh imago : Abu - abu<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Nimfa / Larva<br>
                                            Gejala : Daun transparan, daun keputihan, dan sisa tulang daun<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
											<li>Penanaman varietas toleran (ijen)</li>
											<li>Pemberian Spodoptera litura Nuclear Virus (SIPNV)</li>
                                            <li>Semprot insektisida bila mencapai ambang kendali (kerusakan daun 12.5%)</li>
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Ambush 2 EC</li>
											<li>Trebon 95 EC</li>
											<li>Buldok 25 EC</li>
											<li>Atabron 50 EC</li>
											<li>Cascade 50 EC</li>
											<li>Decis 2.5 EC</li>
											<li>Karphos 25 EC</li>
											<li>Matador 25 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="ulatHeliothis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ulat Heliothis</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/ulat_heliothis.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Helicoverpa armigera</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 2.8 - 40 mm<br>
                                            Ukuran tubuh imago : 2 cm<br>
                                            Warna tubuh imago : Sawo Matang<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Nimfa / Larva<br>
                                            Gejala : Muncul bercak puth, daun berlubang tidak beraturan, dan sisa tulang daun<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
											<li>Tanam tanaman perangkap (jagung) di pematang</li>
											<li>Semprot Heliothis armigera Nuclear Polyhedrosis Virus (HaNPV)</li>
                                            <li>Semprot insektisida bila mencapai ambang kendali</li>
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Ambush 2 EC</li>
											<li>Cymbush 50 EC</li>
											<li>Corsair 100 EC</li>
											<li>Decis 2.5 EC</li>
											<li>Fastac 15 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="ulatJengkal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ulat Jengkal</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/ulat_jengkal.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Chrysodeixis chalcites</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 30 - 40 mm<br>
                                            Ukuran tubuh imago : > 1 cm<br>
                                            Warna tubuh imago : Hitam dan Coklat<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Nimfa / Larva<br>
                                            Gejala : Muncul bercak putih dan sisa tulang daun<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Semprot insektisida bila mencapai ambang kendali (kerusakan daun 12.5%)</li>
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Ambush 2 EC</li>
											<li>Atabron 50 EC</li>
											<li>Cascade 50 EC</li>
											<li>Cymbush 50 EC</li>
											<li>Decis 2.5 EC</li>
											<li>Matador 25 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="ulatPenggerek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ulat Penggerek Polong</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/ulat_penggerek.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Etiella zinckenella</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Polong<br>
                                            Fase tanaman yang diserang : Berbunga (31 - 50 hari setelah tanam), Pertumbuhan polong (51 - 70 hari setelah tanam), Pemasakan polong (71 hari setelah tanam - panen)<br>
                                            Tempat peletakan telur : Atas daun dan bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 13 - 15 mm<br>
                                            Ukuran tubuh imago : 1 - 1.2 cm<br>
                                            Warna tubuh imago : Abu - abu<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Nimfa / Larva<br>
                                            Gejala : Polong berlubang bulat dan penurunan kualitas biji<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Tanam tanaman perangkap <em>Sesbania rostrata</em></li>
                                            <li>Semprot insektisida</li>
                                            
                                            </ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Atabron 50 EC</li>
											<li>Buldok 25 EC</li>
											<li>Cymbush 50 EC</li>
											<li>Fastac 15 C</li>
											<li>Marshall 200 EC</li>
											<li>Matador 25 EC</li>
											<li>Ripcord 5 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					<div class="modal fade" id="ulatPenggulung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ulat Penggulung Daun</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../image/ulat_penggulung.jpg" style='width:100%;' height="250" border="0" />
                                            <p> </p>
											Nama latin : <em>Lamprosema indicata</em><br>
                                            Jenis serangga : Ulat<br>
                                            Bagian tanaman yang diserang : Daun<br>
                                            Fase tanaman yang diserang : Vegetatif (11 - 30 hari setelah tanam)<br>
                                            Tempat peletakan telur : Bawah daun<br>
                                            Ukuran tubuh nimfa / larva : 20 mm<br>
                                            Ukuran tubuh imago : > 20 mm<br>
                                            Warna tubuh imago : Coklat dan Kuning<br>
                                            Fase metamorfosis : Sempurna<br>
                                            Fase hama yang menyerang tanaman : Nimfa / Larva<br>
                                            Gejala : Ada gulungan daun, ada kotoran berwarna coklat hitam, dan sisa tulang daun<br>
                                            <p> </p>
                                            Cara Pengendalian :<br>
                                            <ul>
                                            <li>Tanam serempak</li>
                                            <li>Semprot insektisida bila mencapai ambang kendali (kerusakan daun 12.5%)</li>
											</ul>
											<p> </p>
											Jenis Insektisida :<br> 
											<ul>
											<li>Ambush 2 EC</li>
											<li>Cymbush 50 EC</li>
											<li>Corsair 100 EC</li>
											<li>Decis 2.5 EC</li>
											<li>Fastac 15 EC</li>
											</ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
					
					
					
				</div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                    <div class="well well-sm">
                        <h4 class="text-center">Pakar</h4>
                        <p class="text-center">Kak Lutfi Afifah, Mahasiswa lulusan S2 PTN IPB, Penelitian : Hama pada kacang kedelai.</p>
                        <p class="text-center">Bu Nina, Dosen Proteksi Tanaman Ahli Hama.</p>
                        <br>
                         <h4 class="text-center">Referensi</h4>
                        <p class="text-center">Marwoto, Hardaningsih S., Taufiq A. (2011). Masalah Hama, Penyakit, dan Hara pada Tanaman Kedelai Identifikasi dan Pengendaliannya. Jakarta : Kementerian Pertanian Badan Penelitian dan Pengembangan Pertanian Pusat Penelitian dan Pengembangan Tanaman Pangan.</p>
                        <p class="text-center">Lanya H. (2007). Pengenalan, Pengendalian, dan Aplikasi Peramalan Opt Utama Kedelai. http://diperta.ntbprov.go.id/artikel/opt_kedelai.htm, 28 Mei 2015.</p>
                        <p class="text-center">Anonim. (2015). Bemisia tabaci (tobaco whitefly). http://www.cabi.org/isc/datasheet/8927, 24 Mei 2015.</p>
                        <p class="text-center">Anonim. (2015). Spodoptera litura (taro caterpillar). http://www.cabi.org/isc/datasheet/44520, 24 Mei 2015.</p>
                    </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
