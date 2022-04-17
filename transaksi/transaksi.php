
<h2 class="text-center">Data Transaksi Siswa di MI Al-Islamiyah </h2>
<br><br>
<a href="index.php?halaman=tambahtransaksi" class="btn btn-primary btn-md mb-3">
    <i class="bi bi-plus-lg"></i>Tambah Data</a>
<br><br>
<table class="table table-bordered">
        <thead class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Setoran</th>
            <th>Penarikan</th>
            <th>Saldo</th>
            <th>Keterangan</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
            <tbody>
            <tr>
            <?php $no=1; ?>
            <?php $am=$koneksi->query("SELECT * FROM transaksi"); ?>
            <?php while($pec =$am->fetch_assoc()){ ?>

                <td><?php echo $no; ?></td>
                <td><?php echo $pec['nama_siswa']; ?></td>
                <td><?php echo $pec['kelas_siswa']; ?></td>
                <td><?php echo number_format($pec['setoran_siswa']); ?></td>
                <td><?php echo number_format($pec['penarikan_siswa']); ?></td>
                <td><?php echo number_format($pec['saldo_siswa']); ?></td>
                <td><?php echo $pec['keterangan']; ?></td>
                <td>
                    <a href='index.php?halaman=edittransaksi&id=<?php echo $pec['id_transaksi'] ; ?>' class='btn btn-sm btn-warning'>edit</a></td>
                <td>
                    <a href='index.php?halaman=hapustransaksi&id=<?php echo $pec['id_transaksi'] ; ?>' class='btn btn-sm btn-danger'>hapus</a></td>
            </tr>
            <?php $no++; ?>
            <?php } ?>