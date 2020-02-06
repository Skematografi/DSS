<?php
	include "../config/database.php";

	if(isset($_POST['lanjut'])){
		$harga = $_POST['harga'];
		$ukuran = $_POST['ukuran'];
		$type = $_POST['type'];
		$motif = $_POST['motif'];

		$result=mysqli_query($mysql,"insert into atribut_trom value (NULL,'$harga','$ukuran','$motif','$type')");

		if($result){
			header('Location: add_trom.php');
		}else {
			echo 'Nilai Atribut Gagal Disimpan!';
		}
	}
?>