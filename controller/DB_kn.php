<?php
	include "../config/database.php";

		if(isset($_POST['hitung'])){
			$m1 = $_POST['merk1'];
			$h1 = $_POST['harga1'];
			$u1 = $_POST['ukuran1'];
			$t1 = $_POST['type1'];
			$mo1 = $_POST['motif1'];

			$m2 = $_POST['merk2'];
			$h2 = $_POST['harga2'];
			$u2 = $_POST['ukuran2'];
			$t2 = $_POST['type2'];
			$mo2 = $_POST['motif2'];

			$m3 = $_POST['merk3'];
			$h3 = $_POST['harga3'];
			$u3 = $_POST['ukuran3'];
			$t3 = $_POST['type3'];
			$mo3 = $_POST['motif3'];

			$insert1=mysqli_query($mysql,"insert into data_kn value (NULL,'$m1','$h1','$u1','$t1','$mo1')");
			$insert2=mysqli_query($mysql,"insert into data_kn value (NULL,'$m2','$h2','$u2','$t2','$mo2')");
			$insert3=mysqli_query($mysql,"insert into data_kn value (NULL,'$m3','$h3','$u3','$t3','$mo3')");


			//normalisasi harga
			$min=mysqli_query($mysql,"select min(harga) as cost from data_kn");
			$cost=Mysqli_fetch_array($min);

			$r11= $cost['cost'] / $h1;
			$r21= $cost['cost'] / $h2;
			$r31= $cost['cost'] / $h3;

			//normalisasi model
			$maxu=mysqli_query($mysql,"select max(model) as maxu from data_kn");
			$maxukuran=Mysqli_fetch_array($maxu);

			$r12=$u1 / $maxukuran['maxu'];
			$r22=$u2 / $maxukuran['maxu'];
			$r32=$u3 / $maxukuran['maxu'];


			//normalisasi type
			$maxt=mysqli_query($mysql,"select max(type) as maxt from data_kn");
			$maxtype=Mysqli_fetch_array($maxt);

			$r13=$t1 / $maxtype['maxt']; 
			$r23=$t2 / $maxtype['maxt']; 
			$r33=$t3 / $maxtype['maxt']; 

			//normalisasi warna
			$maxmo=mysqli_query($mysql,"select max(warna) as maxmo from data_kn");
			$maxmotif=Mysqli_fetch_array($maxmo);

			$r14=$mo1 / $maxmotif['maxmo'];
			$r24=$mo2 / $maxmotif['maxmo'];
			$r34=$mo3 / $maxmotif['maxmo'];

			//input table normalisasi kn
			$n1=mysqli_query($mysql,"insert into nor_kn value (NULL,'$m1','$r11','$r12','$r13','$r14')");
			$n2=mysqli_query($mysql,"insert into nor_kn value (NULL,'$m2','$r21','$r22','$r23','$r24')");
			$n3=mysqli_query($mysql,"insert into nor_kn value (NULL,'$m3','$r31','$r32','$r33','$r34')");

			//hasil jumlah normalisasi
			$atribut=mysqli_query($mysql,"select * from atribut_kn");
			$bobot=Mysqli_fetch_array($atribut);

			$v1=($r11*$bobot['harga'])+($r12*$bobot['model'])+($r13*$bobot['type'])+($r14*$bobot['warna']);
			$v2=($r21*$bobot['harga'])+($r22*$bobot['model'])+($r23*$bobot['type'])+($r24*$bobot['warna']);
			$v3=($r31*$bobot['harga'])+($r32*$bobot['model'])+($r33*$bobot['type'])+($r34*$bobot['warna']);

			//input table rangking
			$a=mysqli_query($mysql,"insert into ranking_kn value (NULL,'$m1','$v1')");
			$b=mysqli_query($mysql,"insert into ranking_kn value (NULL,'$m2','$v2')");
			$c=mysqli_query($mysql,"insert into ranking_kn value (NULL,'$m3','$v3')");


			if($a){
				header ('Location: ../op_kn.php');
			}else{
				echo 'Data Gagal di Input';
			}
		}
	?>