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
                <h2 class="intro-text text-center"><b>Masukan Nilai Atribut</b></h2>
				<hr class="tagline-divider">
            </div>
            <div class="text-center">
				<form action="controller/proses_trom.php" method="post" name="form" onSubmit="return validasi()">
					<label>Harga</label><br>
					<input type="number" max="50" name="harga" id="harga" onfocus="awal()" onblur="berhenti()" required/> %<br>
										
					<label>Model Depan</label><br>
					<input type="number" name="ukuran" id="ukuran" onfocus="awal()" onblur="berhenti()" required/> %<br>
					
					<label>Model Belakang</label><br>
					<input type="number" name="motif" id="motif" onfocus="awal()" onblur="berhenti()" required/> %<br>

					<label>Warna</label><br>
					<input type="number" max="50" name="type" id="type" onfocus="awal()" onblur="berhenti()" required/> %<br>

					<label>Total</label><br>
					<input style="background:  #349ddb; color: #fff;" type="text" name="total" id="total" onfocus="awal()" onblur="berhenti()" disabled/> %<br>
					<font size="1" color="red">* Jumlah Nilai Harus 100 %</font><br><br>
				
					<input type="submit" id="lanjut" name="lanjut" value="Lanjut" style="color: #000; width : 100px; height : 30px; font-size : 15px; font-family:Josefin Slab,Helvetica Neue,Helvetica,Arial,sans-serif; border-radius: 5px; "/>
				</form>
			</div>
        </div>
    </div>
</div>

<?php
	include "views/footer.php";
?>
