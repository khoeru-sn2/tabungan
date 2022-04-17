<h2>Tambah Setoran</h2>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" name="tanggal">
  </div>
  <div class="form-group">
    <label>Jumlah Setoran</label>
    <input type="text" class="form-control" name="jumlah">
  </div>
  <button class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php 
if (isset($_POST['simpan']))
{
  $koneksi->query("INSERT INTO setoran (tgl_setoran,jml_setoran) 
  VALUES('$_POST[tanggal]','$_POST[jumlah]')");
  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=setoran'>";
} 
?>
