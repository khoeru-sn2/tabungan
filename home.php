<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Home</title>
</head>
<body>
  <div class="container-dua">
		<div class="layanan satu">
			<h4>Total Siswa</h4>
			<p>200 Siswa</p>
		</div>

		<div class="layanan dua">
			<h4>Total Tabungan Masuk</h4>
        <?php $ambil=$koneksi->query("SELECT * FROM setoran"); ?>
        <?php $jumlah=0; ?>
        <?php while($pecah=mysqli_fetch_array($ambil)){ ?>
        <?php $jumlah += $pecah['jml_setoran'];?>
        <?php } ?>
			<p><?php echo number_format($jumlah); ?></p>
		</div>

		<div class="layanan tiga">
			<h4>Total Tabungan Keluar</h4>
				<?php $ambil=$koneksi->query("SELECT * FROM penarikan"); ?>
        <?php $jumlah=0; ?>
        <?php while($pecah=mysqli_fetch_array($ambil)){ ?>
        <?php $jumlah += $pecah['jml_penarikan'];?>
        <?php } ?>
			<p><?php echo number_format($jumlah); ?></p>
		</div>
	</div>	
</body>
</html>