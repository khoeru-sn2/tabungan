<h2>Edit Admin</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM penarikan WHERE id_penarikan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Tanggal</label>
    <input type="text" class="form-control" name="tanggal" value="<?php echo $pecah['tgl_penarikan'] ?>">
  </div>
  <div class="form-group">
    <label>Jumlah Penarikan</label>
    <input type="text" class="form-control" name="jumlah" value="<?php echo $pecah['jml_penarikan'] ?>">
  </div>
  <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $koneksi->query("UPDATE penarikan SET tgl_penarikan='$_POST[tanggal]',
            jml_penarikan='$_POST[jumlah]' WHERE id_penarikan='$_GET[id]'");
            
    echo "<div class='alert alert-info'>Data Berhasil di Ubah</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=penarikan'>";

}  
?>