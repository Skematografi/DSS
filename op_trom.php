<?php
	include "config/database.php";
	include "views/header.php";
	include "views/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="box">
        	<h3 class="text-center">Record Data</h3>
			<table class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>Merk</th>
					<th>Harga</th>
					<th>Model Depan</th>
					<th>Model Belakang</th>
					<th>Warna</th>
                </tr>
            </thead>
				<tbody>
					<?php
						$query = mysqli_query($mysql,"select * from data_trom") or die (mysqli_error());
						if(mysqli_num_rows($query) == 0)
						{
							echo "<b>Data Not Avaible</b>";
						}
						else
						{
							while($result = mysqli_fetch_array($query)):
					?>			
					<tr>
						<td><?php echo $result['merk']; ?></td>
						<td><?php echo $result['harga']; ?></td>
						<td><?php echo $result['modelD']; ?></td>
						<td><?php echo $result['modelB']; ?></td>
						<td><?php echo $result['warna']; ?></td>
					</tr>
					<?php
						endwhile;
						}
					?>
                </tbody>
			</table><br>
			<h3 class="text-center">Nilai Atribut</h3>
			<table class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>Harga</th>
				    <th>Model Depan</th>
					<th>Model Belakang</th>
					<th>Warna</th>
                </tr>
            </thead>
				<tbody>
					<?php
						$query = mysqli_query($mysql,"select * from atribut_trom") or die (mysqli_error());
						if(mysqli_num_rows($query) == 0)
						{
							echo "<b>Data Not Avaible</b>";
						}
						else
						{
							while($result = mysqli_fetch_array($query)):
					?>			
					<tr>
						<td><?php echo $result['harga']; ?></td>
						<td><?php echo $result['modelD']; ?></td>
						<td><?php echo $result['modelB']; ?></td>
						<td><?php echo $result['warna']; ?></td>
					</tr>
					<?php
						endwhile;
						}
					?>
                </tbody>
			</table><br>
			<h3 class="text-center">Normalisasi Data</h3>
			<table class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>Merk</th>
					<th>Harga</th>
					<th>Model Depan</th>
					<th>Model Belakang</th>
					<th>Warna</th>
                </tr>
            </thead>
				<tbody>
					<?php
						$query = mysqli_query($mysql,"select * from nor_trom") or die (mysqli_error());
						if(mysqli_num_rows($query) == 0)
						{
							echo "<b>Data Not Avaible</b>";
						}
						else
						{
							while($result = mysqli_fetch_array($query)):
					?>			
					<tr>
						<td><?php echo $result['merk']; ?></td>
						<td><?php echo number_format($result['harga'],2); ?></td>
						<td><?php echo number_format($result['modelD'],2); ?></td>
						<td><?php echo number_format($result['modelB'],2); ?></td>
						<td><?php echo number_format($result['warna'],2); ?></td>
					</tr>
					<?php
						endwhile;
						}
					?>
                </tbody>
			</table><br>
			<h3 class="text-center">Rekomendasi Sistem</h3>
			<table class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>Merk</th>
					<th>Point</th>
                </tr>
            </thead>
				<tbody>
					<?php
						$query = mysqli_query($mysql,"select * from ranking_trom order by point desc") or die (mysqli_error());
						if(mysqli_num_rows($query) == 0)
						{
							echo "<b>Data Not Avaible</b>";
						}
						else
						{
							while($result = mysqli_fetch_array($query)):
					?>			
					<tr>
						<td><?php echo $result['merk']; ?></td>
						<td><?php echo number_format($result['point'],2); ?></td>
					</tr>
					<?php
						endwhile;
						}
					?>
                </tbody>
			</table><br>
		</div>
	</div>
</div>
<?php
	include "views/footer.php";
?>
