<?php
	
$mysql = mysqli_connect("localhost", "root", "", "dbmothai");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>