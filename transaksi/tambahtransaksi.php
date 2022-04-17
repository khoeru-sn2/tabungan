<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="number" class="form-control" name="kelas">
  </div>
  <div class="form-group">
    <label>Setoran</label>
    <input type="number" class="form-control" name="setoran">
  </div>
  <div class="form-group">
    <label>Penarikan</label>
    <input type="number" class="form-control" name="penarikan">
  </div>
  <div class="form-group">
    <label>Saldo</label>
    <input type="number" class="form-control" name="saldo">
  </div>
  <div class="form-group">
    <label>Keterangan</label>
    <input type="text" class="form-control" name="keterangan">
  </div>
  
  <button class="btn btn-primary" name="tambah">Tambah</button>
</form>

<?php
if (isset($_POST['tambah'])) {
  $koneksi->query("INSERT INTO transaksi
        (nama_siswa,kelas_siswa,setoran_siswa,penarikan_siswa,saldo_siswa,keterangan)
        VALUES('$_POST[nama]','$_POST[kelas]','$_POST[setoran]','$_POST[penarikan]','$_POST[saldo]','$_POST[keterangan]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=transaksi'>";

}  
?>