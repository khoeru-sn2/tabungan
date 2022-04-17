<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>No Induk</label>
    <input type="number" class="form-control" name="noinduk">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select class="form-control" name="jk">
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="text" class="form-control" name="tl">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="form-group">
    <label>Tahun Masuk</label>
    <input type="text" class="form-control" name="tm">
  </div>
  
  <button class="btn btn-primary" name="tambah">Tambah</button>
</form>

<?php
if (isset($_POST['tambah'])) {
  $koneksi->query("INSERT INTO siswa
        (no_induk,nama_siswa,jk_siswa,tl_siswa,alamat_siswa,thn_masuk)
        VALUES('$_POST[noinduk]','$_POST[nama]','$_POST[jk]','$_POST[tl]','$_POST[alamat]','$_POST[tm]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=siswa'>";

}  
?>