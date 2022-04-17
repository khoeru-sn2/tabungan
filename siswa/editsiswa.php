<h2>Edit Siswa</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM siswa WHERE id_siswa='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?php echo $pecah['id_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>No Induk</label>
    <input type="number" class="form-control" name="noinduk" value="<?php echo $pecah['no_induk'] ?>">
    </div>
    <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" class="form-control" name="jk" value="<?php echo $pecah['jk_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="text" class="form-control" name="tl" value="<?php echo $pecah['tl_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat_siswa'] ?>">
    </div>
    <div class="form-group">
    <label>Tahun Masuk</label>
    <input type="text" class="form-control" name="tm" value="<?php echo $pecah['thn_masuk'] ?>">
    </div>
  <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $koneksi->query("UPDATE siswa SET no_induk='$_POST[noinduk]',nama_siswa='$_POST[nama]',   
            jk_siswa='$_POST[jk]',tl_siswa='$_POST[tl]', alamat_siswa='$_POST[alamat]',thn_masuk='$_POST[tm]'
            WHERE id_siswa='$_GET[id]'");
            
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=siswa'>";

}  
?>