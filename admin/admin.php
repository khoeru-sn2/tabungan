<h2 class="text-center">Data Admin MI Al-Islamiyah</h2>
<br>
<a href="index.php?halaman=tambahadmin" class="btn btn-primary btn-md mb-3">
<i class="bi bi-plus-lg"></i>Tambah Data</a>
<br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM admin"); ?>
        <?php while($pecah =$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['password']; ?></td>
            <td>
                <a href="index.php?halaman=editadmin&id=<?php echo $pecah['id_admin'] ; ?>" class="btn btn-sm btn-warning">edit</a></td>
            <td>
                <a href="index.php?halaman=hapusadmin&id=<?php echo $pecah['id_admin'] ; ?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>