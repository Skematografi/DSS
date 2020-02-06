<?php
	include "config/database.php";
	include "views/header.php";
	include "views/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
				<hr class="tagline-divider">
                <h2 class="intro-text text-center">Kategori</h2>
				<hr class="tagline-divider">
            </div>
                <div class="col-sm-4 text-center">
						<img class="img-responsive" src="assets/img/sparepart/ban_luar.jpg" alt="">
						<h2>Ban Luar</h2>
						<a href="atribut_ban.php" toggle-target="#trunc_ban" class="btn btn-default btn-lg">Pilih</a>
					
						<br><br>
						<img class="img-responsive" src="assets/img/sparepart/sd.jpg" alt="">
						<h2>Shock Depan</h2>
						<a href="atribut_sd.php" toggle-target="#trunc_sd" class="btn btn-default btn-lg">Pilih</a>
				</div>
					<br>
				<div class="col-sm-4 text-center">
						<img class="img-responsive" src="assets/img/sparepart/velg.jpg" alt="">
						<h2>Velg</h2>
						<a href="atribut_velg.php" toggle-target="#trunc_velg" class="btn btn-default btn-lg">Pilih</a>
						
						<br><br>
						<img class="img-responsive" src="assets/img/sparepart/sb.jpg" alt="">
						<h2>Shock Belakang</h2> 
						<a href="atribut_sb.php" toggle-target="#trunc_sb" class="btn btn-default btn-lg" >Pilih</a>
				</div>
					<br>
				<div class="col-sm-4 text-center">
						<img class="img-responsive" src="assets/img/sparepart/tromol.jpg" alt="">
						<h2>Tromol</h2>
						<a href="atribut_trom.php" toggle-target="#trunc_trom" class="btn btn-default btn-lg">Pilih</a>
						
						<br><br>
						<img class="img-responsive" src="assets/img/sparepart/kn.jpg" alt="">
						<h2>Knalpot</h2>
						<a href="atribut_kn.php" toggle-target="#trunc_kn" class="btn btn-default btn-lg">Pilih</a>
				</div>
        </div>
    </div>
</div>
<div id="trunc_ban">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_ban");
 	$data_ban=mysqli_query($mysql, "Truncate table data_ban");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_ban");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_ban");
 ?>
</div>
<div id="trunc_velg">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_velg");
 	$data_ban=mysqli_query($mysql, "Truncate table data_velg");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_velg");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_velg");
 ?>
</div>
<div id="trunc_kn">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_kn");
 	$data_ban=mysqli_query($mysql, "Truncate table data_kn");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_kn");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_kn");
 ?>
</div>
<div id="trunc_trom">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_trom");
 	$data_ban=mysqli_query($mysql, "Truncate table data_trom");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_trom");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_trom");
 ?>
</div>
<div id="trunc_sd">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_sd");
 	$data_ban=mysqli_query($mysql, "Truncate table data_sd");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_sd");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_sd");
 ?>
</div>
<div id="trunc_sb">
<?php
 	$atribut_ban=mysqli_query($mysql, "Truncate table atribut_sb");
 	$data_ban=mysqli_query($mysql, "Truncate table data_sb");
 	$normalisasi_ban=mysqli_query($mysql, "Truncate table nor_sb");
 	$ranking_ban=mysqli_query($mysql, "Truncate table ranking_sb");
 ?>
</div>
<?php
	include "views/footer.php";
?>
