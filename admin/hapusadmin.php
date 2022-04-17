<h3> Data admin berhasil terhapus!</h3>
<?php

$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");

echo "<script>alert('data admin telah terhapus');<script>";
echo "<script>location='index.php?halaman=admin';</script>";

?>