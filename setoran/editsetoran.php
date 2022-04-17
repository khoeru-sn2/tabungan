<h2>Edit Admin</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM setoran WHERE id_setoran='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Tanggal</label>
    <input type="text" class="form-control" name="tanggal" value="<?php echo $pecah['tgl_setoran'] ?>">
  </div>
  <div class="form-group">
    <label>Jumlah Setoran</label>
    <input type="text" class="form-control" name="jumlah" value="<?php echo $pecah['jml_setoran'] ?>">
  </div>
  <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $koneksi->query("UPDATE setoran SET tgl_setoran='$_POST[tanggal]',
            jml_setoran='$_POST[jumlah]' WHERE id_setoran='$_GET[id]'");
            
    echo "<div class='alert alert-info'>Data Berhasil di Ubah</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=setoran'>";

}  
?>