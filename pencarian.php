<?php 
$koneksi = new mysqli("localhost","root","","tabungan");


$keyword = $_GET["keyword"];

$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM transaksi WHERE nama_siswa LIKE '%$keyword%' OR kelas_siswa LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc())
{
  $semuadata[]=$pecah;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pencarian</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link rel="stylesheet" href="style2.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="container">
  <h2 class="text-center">Hasil Pencarian : <?php echo $keyword; ?></h2>
    <a href="index.php" class="btn btn-primary btn-md mb-3">
    <i class="bi bi-plus-lg"></i>Kembali Ke Home</a>
    <br><br>
<table class="table table-bordered">
        <thead class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Setoran</th>
            <th>Penarikan</th>
            <th>Saldo</th>
            <th>Keterangan</th>
        </thead>
            <tbody>
            <tr>
              <?php $no=1; ?>
              <?php foreach ($semuadata as $key => $value):?>
                <td><?php echo $no;?></td>
                <td><?php echo $value['nama_siswa']; ?></td>
                <td><?php echo $value['kelas_siswa']; ?></td>
                <td><?php echo number_format($value['setoran_siswa']); ?></td>
                <td><?php echo number_format($value['penarikan_siswa']); ?></td>
                <td><?php echo number_format($value['saldo_siswa']); ?></td>
                <td><?php echo $value['keterangan']; ?></td>
            </tr>
            <?php endforeach ?>
            <?php $no++; ?>
        </div>
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>

