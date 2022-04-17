<h2 class="text-center">Data Siswa Kelas 1-6 MI Al-Islamiyah </h2>
<br><br>
<a href="index.php?halaman=tambahsiswa" class="btn btn-primary btn-md mb-3">
    <i class="bi bi-plus-lg"></i>Tambah Data</a>
<br><br>
<table class="table table-bordered">
        <thead class="table-dark">
            <th>No</th>
            <th>No Induk</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tahun Masuk</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
            <tbody>
            <tr>
            <?php $no=1; ?>
            <?php $am=$koneksi->query("SELECT * FROM siswa"); ?>
            <?php while($pec =$am->fetch_assoc()){ ?>

                <td><?php echo $no; ?></td>
                <td><?php echo $pec['no_induk']; ?></td>
                <td><?php echo $pec['nama_siswa']; ?></td>
                <td><?php echo ($pec['jk_siswa']); ?></td>
                <td><?php echo ($pec['tl_siswa']); ?></td>
                <td><?php echo ($pec['alamat_siswa']); ?></td>
                <td><?php echo ($pec['thn_masuk']); ?></td>
                <td>
                    <a href='index.php?halaman=editsiswa&id=<?php echo $pec['id_siswa'] ; ?>' class='btn btn-sm btn-warning'>edit</a></td>
                <td>
                    <a href='index.php?halaman=hapussiswa&id=<?php echo $pec['id_siswa'] ; ?>' class='btn btn-sm btn-danger'>hapus</a></td>
            </tr>
            <?php $no++; ?>
            <?php } ?>