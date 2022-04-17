<h2 class="text-center">Data Tabungan Keluar di MI Al-Islamiyah</h2>
<br>
<a href="index.php?halaman=tambahpenarikan" class="btn btn-primary btn-md mb-3">
<i class="bi bi-plus-lg"></i>Tambah Data</a>
<br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Penarikan</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM penarikan"); ?>
        <?php $jumlah=0; ?>
        <?php while($pecah=mysqli_fetch_array($ambil)){ ?>
        <?php $jumlah += $pecah['jml_penarikan'];?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['tgl_penarikan']; ?></td>
            <td><?php echo number_format($pecah['jml_penarikan']); ?></td>
            <td>
                <a href="index.php?halaman=editpenarikan&id=<?php echo $pecah['id_penarikan'] ; ?>" class="btn btn-sm btn-warning">edit</a></td>
            <td>
                <a href="index.php?halaman=hapuspenarikan&id=<?php echo $pecah['id_penarikan'] ; ?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="2">Total Penarikan</th>
            <th>Rp. <?php echo number_format($jumlah); ?></th>
        </tr>
    </tfoot>
</table>