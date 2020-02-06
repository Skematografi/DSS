<?php
	include "../config/database.php";

		if(isset($_POST['hitung'])){
			$m1 = $_POST['merk1'];
			$h1 = $_POST['harga1'];
			$u1 = $_POST['ukuran1'];
			$mo1 = $_POST['motif1'];
			$t1 = $_POST['type1'];

			$m2 = $_POST['merk2'];
			$h2 = $_POST['harga2'];
			$u2 = $_POST['ukuran2'];
			$mo2 = $_POST['motif2'];
			$t2 = $_POST['type2'];

			$m3 = $_POST['merk3'];
			$h3 = $_POST['harga3'];
			$u3 = $_POST['ukuran3'];
			$mo3 = $_POST['motif3'];
			$t3 = $_POST['type3'];

			$insert1=mysqli_query($mysql,"insert into data_trom value (NULL,'$m1','$h1','$u1','$mo1','$t1')");
			$insert2=mysqli_query($mysql,"insert into data_trom value (NULL,'$m2','$h2','$u2','$mo2','$t2')");
			$insert3=mysqli_query($mysql,"insert into data_trom value (NULL,'$m3','$h3','$u3','$mo3','$t3')");


			//normalisasi harga
			$min=mysqli_query($mysql,"select min(harga) as cost from data_trom");
			$cost=Mysqli_fetch_array($min);

			$r11= $cost['cost'] / $h1;
			$r21= $cost['cost'] / $h2;
			$r31= $cost['cost'] / $h3;

			//normalisasi model depan
			$maxu=mysqli_query($mysql,"select max(modelD) as maxu from data_trom");
			$maxukuran=Mysqli_fetch_array($maxu);

			$r12=$u1 / $maxukuran['maxu'];
			$r22=$u2 / $maxukuran['maxu'];
			$r32=$u3 / $maxukuran['maxu'];

            //normalisasi model belakang
			$maxmo=mysqli_query($mysql,"select max(modelB) as maxmo from data_trom");
			$maxmotif=Mysqli_fetch_array($maxmo);

			$r13=$mo1 / $maxmotif['maxmo'];
			$r23=$mo2 / $maxmotif['maxmo'];
			$r33=$mo3 / $maxmotif['maxmo'];

			//normalisasi warna
			$maxt=mysqli_query($mysql,"select max(warna) as maxt from data_trom");
			$maxtype=Mysqli_fetch_array($maxt);

			$r14=$t1 / $maxtype['maxt']; 
			$r24=$t2 / $maxtype['maxt']; 
			$r34=$t3 / $maxtype['maxt']; 

			//input table normalisasi tromol
			$n1=mysqli_query($mysql,"insert into nor_trom value (NULL,'$m1','$r11','$r12','$r13','$r14')");
			$n2=mysqli_query($mysql,"insert into nor_trom value (NULL,'$m2','$r21','$r22','$r23','$r24')");
			$n3=mysqli_query($mysql,"insert into nor_trom value (NULL,'$m3','$r31','$r32','$r33','$r34')");

			//hasil jumlah normalisasi
			$atribut=mysqli_query($mysql,"select * from atribut_trom");
			$bobot=Mysqli_fetch_array($atribut);

			$v1=($r11*$bobot['harga'])+($r12*$bobot['modelD'])+($r13*$bobot['modelB'])+($r14*$bobot['warna']);
			$v2=($r21*$bobot['harga'])+($r22*$bobot['modelD'])+($r23*$bobot['modelB'])+($r24*$bobot['warna']);
			$v3=($r31*$bobot['harga'])+($r32*$bobot['modelD'])+($r33*$bobot['modelB'])+($r34*$bobot['warna']);

			//input table rangking
			$a=mysqli_query($mysql,"insert into ranking_trom value (NULL,'$m1','$v1')");
			$b=mysqli_query($mysql,"insert into ranking_trom value (NULL,'$m2','$v2')");
			$c=mysqli_query($mysql,"insert into ranking_trom value (NULL,'$m3','$v3')");


			if($a){
				header ('Location: ../op_trom.php');
			}else{
				echo 'Data Gagal di Input';
			}
		}
	?>