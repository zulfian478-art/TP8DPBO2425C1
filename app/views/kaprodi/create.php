<?php include __DIR__ . "/../layouts/header.php"; ?>



<div class="container mt-4">
    <h2>Tambah Kaprodi</h2>

    <form action="index.php?c=kaprodi&m=store" method="POST">
        <div class="form-group mb-3">
            <label>Nama Kaprodi</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Periode</label>
            <input type="text" name="periode" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="index.php?c=kaprodi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
