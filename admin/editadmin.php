<h2>Edit Setoran</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $pecah['username'] ?>">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password" value="<?php echo $pecah['password'] ?>">
  </div>
  <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $koneksi->query("UPDATE admin SET username='$_POST[username]',
            password='$_POST[password]' WHERE id_admin='$_GET[id]'");
            
    echo "<div class='alert alert-info'>Data Berhasil di Ubah</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=admin'>";

}  
?>