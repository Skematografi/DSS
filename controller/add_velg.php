<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title>MoThai Style</title>
	
	<link rel="icon" type="image/icon" href="../assets/img/icon.ico">
	
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/business-casual.css" rel="stylesheet">
	<link href="../assets/css/modal.css" rel="stylesheet">
	<script src="../assets/js/atribut_ban.js"></script>
	
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="logo1">
		<img class="logo1" src="../assets/img/logo1.png" >
	</div>
	<div class="logo2">
		<img class="logo2" src="../assets/img/logo2.png" >
	</div>
    <div class="brand">MoThai Style</div>
    <div class="address-bar">Temanmu memilih spare part thailook terbaik.</div>
	<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand  -->
                <a class="navbar-brand" href="../index.php">Mothai Style</a>
            </div>
            <!-- Navbar-Button -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.php">Dashboard</a>
                    </li>
					<li>
                        <a href="../sparepart.php">Spare Part</a>
                    </li>
					<li>
                        <a href="../about.php">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
				
                <h1 class="intro-text text-center"><b>Form Penilaian</b></h1>
				<hr class="tagline-divider">
            </div>
            <div class="atribut">
				<form action="DB_velg.php" method="post">
				<div class="col-sm-4 text-center">
					<label>Merk</label><br>
					<input type="text" name="merk1" maxlength="15" required/><br>

					<label>Harga</label><br>
					<input type="number" name="harga1" required/><br>
										
					<label>Diameter</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="ukuran1" required/>
						<option selected disabled> </option>
						<option value="20">Ring 14</option>
						<option value="30">Ring 16</option>
						<option value="40">Ring 17</option>
						<option value="10">Lain-lain</option>
					</select><br>

					<label>Type</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="type1" required/>
						<option selected disabled> </option>
						<option value="15">Racing</option>
						<option value="30">Jari-jari</option>
					</select><br>

					<label>Model</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="motif1" required/>
						<option selected disabled> </option>
						<option value="30">Catur</option>
						<option value="20">Tapak Lebar</option>
						<option value="10">Standar</option>
						<option value="5">Lain-lain</option>
					</select><br>

					<font size="1" color="red">* Alternatif 1</font><br>
				</div>

				<div class="col-sm-4 text-center">
					<label>Merk</label><br>
					<input type="text" name="merk2" maxlength="15" required/><br>

					<label>Harga</label><br>
					<input type="number" name="harga2" required/><br>
										
					<label>Diameter</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="ukuran2" required/>
						<option selected disabled> </option>
						<option value="20">Ring 14</option>
						<option value="30">Ring 16</option>
						<option value="40">Ring 17</option>
						<option value="10">Lain-lain</option>
					</select><br>

					<label>Type</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="type2" required/>
						<option selected disabled> </option>
						<option value="15">Racing</option>
						<option value="30">Jari-jari</option>
					</select><br>

					<label>Model</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="motif2" required/>
						<option selected disabled> </option>
						<option value="30">Catur</option>
						<option value="20">Tapak Lebar</option>
						<option value="10">Standar</option>
						<option value="5">Lain-lain</option>
					</select><br>

					<font size="1" color="red">* Alternatif 2</font><br><br>
				
					<button name="hitung" style="color: #000; width : 100px; height : 30px; font-size : 15px; font-family:Josefin Slab,Helvetica Neue,Helvetica,Arial,sans-serif; border-radius: 5px; ">Submit</button>
				</div>

				<div class="col-sm-4 text-center">
					<label>Merk</label><br>
					<input type="text" name="merk3" maxlength="15" required/><br>

					<label>Harga</label><br>
					<input type="number" name="harga3" required/><br>
										
					<label>Diameter</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="ukuran3" required/>
						<option selected disabled> </option>
						<option value="20">Ring 14</option>
						<option value="30">Ring 16</option>
						<option value="40">Ring 17</option>
						<option value="10">Lain-lain</option>
					</select><br>

					<label>Type</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="type3" required/>
						<option selected disabled> </option>
						<option value="15">Racing</option>
						<option value="30">Jari-jari</option>
					</select><br>

					<label>Model</label><br>
					<select style="width:200px; height : 30px; border : 50px 5px; background-color : #efeeef;" name="motif3" required/>
						<option selected disabled> </option>
						<option value="30">Catur</option>
						<option value="20">Tapak Lebar</option>
						<option value="10">Standar</option>
						<option value="5">Lain-lain</option>
					</select><br>

					<font size="1" color="red">* Alternatif 3</font>
				</div>
				</form>
			</div>
        </div>
    </div>
</div>

	<footer>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <p>Copyright &copy; <a href='http://Mothai.xyz'target="_blank">MoThai Style</a> 2017<br>
						<small><a href="http://stmik.ipem.ac.id">STMIK Insan Pembangunan Bitung</a> | Sistem Informasi 5 D | <a href="https://id.wikipedia.org/wiki/Sistem_pendukung_keputusan">Decision Support System</a></small>
					</p>
                </div>
            </div>
        </div>
    </footer>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
    </script>
</body>
</html>
