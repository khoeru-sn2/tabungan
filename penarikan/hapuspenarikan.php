<h3> Data penarikan berhasil terhapus!</h3>
<?php

$ambil = $koneksi->query("SELECT * FROM penarikan WHERE id_penarikan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM penarikan WHERE id_penarikan='$_GET[id]'");

echo "<script>alert('data penarikan telah terhapus');<script>";
echo "<script>location='index.php?halaman=penarikan';</script>";

?>