<h2> Data siswa berhasil terhapus!</h2>
<?php

$am = $koneksi->query("SELECT * FROM siswa WHERE id_siswa='$_GET[id]'");
$pec = $am->fetch_assoc();
$koneksi->query("DELETE FROM siswa WHERE id_siswa='$_GET[id]'");

echo "<script>alert('data siswa telah terhapus');<script>";
echo "<script>location='index.php?halaman=siswa';</script>";

?>