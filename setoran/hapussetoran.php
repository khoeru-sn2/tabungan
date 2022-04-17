<h3> Data setoran berhasil terhapus!</h3>
<?php

$ambil = $koneksi->query("SELECT * FROM setoran WHERE id_setoran='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM setoran WHERE id_setoran='$_GET[id]'");

echo "<script>alert('data setoran telah terhapus');<script>";
echo "<script>location='index.php?halaman=setoran';</script>";

?>