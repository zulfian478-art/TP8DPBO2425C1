<?php include __DIR__ . "/../layouts/header.php"; ?>




<div class="container mt-4">
    <h2>Data Matakuliah</h2>

    <a href="index.php?c=matakuliah&m=create" class="btn btn-primary mb-3">Tambah Matakuliah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode MK</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Dosen Pengampu</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['kode_mk'] ?></td>
                <td><?= $row['nama_mk'] ?></td>
                <td><?= $row['sks'] ?></td>
                <td><?= $row['dosen_nama'] ?? '-' ?></td>
                <td>
                    <a href="index.php?c=matakuliah&m=edit&id=<?= $row['id'] ?>" 
                       class="btn btn-success btn-sm">Edit</a>
                    <a onclick="return confirm('Hapus matakuliah?')"
                       href="index.php?c=matakuliah&m=delete&id=<?= $row['id'] ?>" 
                       class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
