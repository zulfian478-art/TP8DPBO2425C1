<?php include __DIR__ . "/../layouts/header.php"; ?>




<div class="container mt-4">
    <h2>Data Dosen</h2>

    <a href="index.php?c=lecturers&m=create" class="btn btn-primary mb-3">Tambah Dosen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Phone</th>
                <th>Tanggal Masuk</th>
                <th>Kaprodi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['nidn']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['join_date']; ?></td>
                <td><?= $row['kaprodi_nama'] ?? '-'; ?></td>
                <td>
                    <a href="index.php?c=lecturers&m=edit&id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                    <a onclick="return confirm('Hapus dosen?')" 
                       href="index.php?c=lecturers&m=delete&id=<?= $row['id']; ?>" 
                       class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
