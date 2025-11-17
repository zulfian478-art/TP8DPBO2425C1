<?php include __DIR__ . "/../layouts/header.php"; ?>



<div class="container mt-4">
    <h2>Edit Kaprodi</h2>

    <form action="index.php?c=kaprodi&m=update&id=<?= $data['id'] ?>" method="POST">
        
        <div class="form-group mb-3">
            <label>Nama Kaprodi</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="<?= $data['nip'] ?>">
        </div>

        <div class="form-group mb-3">
            <label>Periode</label>
            <input type="text" name="periode" class="form-control" value="<?= $data['periode'] ?>">
        </div>

        <button class="btn btn-success" type="submit">Update</button>
        <a href="index.php?c=kaprodi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
