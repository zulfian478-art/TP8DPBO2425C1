<?php include __DIR__ . "/../layouts/header.php";
 ?>

<div class="container mt-4">
    <h2>Data Kaprodi</h2>
    <a href="index.php?c=kaprodi&m=create" class="btn btn-primary mb-3">Tambah Kaprodi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Periode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nip'] ?></td>
                <td><?= $row['periode'] ?></td>
                <td>
                    <a href="index.php?c=kaprodi&m=edit&id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="index.php?c=kaprodi&m=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
