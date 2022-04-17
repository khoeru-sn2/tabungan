<h2>Edit Transaksi</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $pecah['id_transaksi'] ?>">
    </div>
    <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Kelas</label>
    <input type="number" class="form-control" name="kelas" value="<?php echo $pecah['kelas_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Setoran</label>
    <input type="number" class="form-control" name="setoran" value="<?php echo $pecah['setoran_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Penarikan</label>
    <input type="number" class="form-control" name="penarikan" value="<?php echo $pecah['penarikan_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Saldo</label>
    <input type="number" class="form-control" name="saldo" value="<?php echo $pecah['saldo_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Keterangan</label>
    <input type="text" class="form-control" name="keterangan" value="<?php echo $pecah['keterangan'] ?>">
    </div>
  <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $koneksi->query("UPDATE transaksi SET nama_siswa='$_POST[nama]',kelas_siswa='$_POST[kelas]',
            setoran_siswa='$_POST[setoran]',penarikan_siswa='$_POST[penarikan]',saldo_siswa='$_POST[saldo]', keterangan='$_POST[keterangan]' WHERE id_transaksi='$_GET[id]'");
            
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=transaksi'>";

}  
?>