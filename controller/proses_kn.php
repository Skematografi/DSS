<?php
	include "../config/database.php";

	if(isset($_POST['lanjut'])){
		$harga = $_POST['harga'];
		$ukuran = $_POST['ukuran'];
		$type = $_POST['type'];
		$motif = $_POST['motif'];

		$result=mysqli_query($mysql,"insert into atribut_kn value (NULL,'$harga','$ukuran','$type','$motif')");

		if($result){
			header('Location: add_kn.php');
		}else {
			echo 'Nilai Atribut Gagal Disimpan!';
		}
	}
?>