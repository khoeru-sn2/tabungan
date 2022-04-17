<h2 class="text-center">Data Tabungan Masuk di MI Al-Islamiyah</h2>
<br>
<a href="index.php?halaman=tambahsetoran" class="btn btn-primary btn-md mb-3">
<i class="bi bi-plus-lg"></i>Tambah Data</a>
<br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Setoran</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM setoran"); ?>
        <?php $jumlah=0; ?>
        <?php while($pecah=mysqli_fetch_array($ambil)){ ?>
        <?php $jumlah += $pecah['jml_setoran'];?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['tgl_setoran']; ?></td>
            <td><?php echo number_format($pecah['jml_setoran']); ?></td>
            <td>
                <a href="index.php?halaman=editsetoran&id=<?php echo $pecah['id_setoran'] ; ?>" class="btn btn-sm btn-warning">edit</a></td>
            <td>
                <a href="index.php?halaman=hapussetoran&id=<?php echo $pecah['id_setoran'] ; ?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
    <tfoot>
            <tr>
                <th colspan="2">Total Setoran</th>
                <th>Rp. <?php echo number_format($jumlah); ?></th>
            </tr>
            </tfoot>
</table>