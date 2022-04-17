<h2> Data transaksi berhasil terhapus!</h2>
<?php

$am = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$_GET[id]'");
$pec = $am->fetch_assoc();
$koneksi->query("DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'");

echo "<script>alert('data transaksi telah terhapus');<script>";
echo "<script>location='index.php?halaman=transaksi';</script>";

?>