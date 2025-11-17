<?php include __DIR__ . "/../layouts/header.php"; ?>




<div class="container mt-4">
    <h2>Edit Matakuliah</h2>

    <form action="index.php?c=matakuliah&m=update&id=<?= $data['id'] ?>" method="POST">

        <div class="mb-3">
            <label>Kode MK</label>
            <input type="text" name="kode_mk" class="form-control" value="<?= $data['kode_mk'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Nama Matakuliah</label>
            <input type="text" name="nama_mk" class="form-control" value="<?= $data['nama_mk'] ?>" required>
        </div>

        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="<?= $data['sks'] ?>" required min="1">
        </div>

        <div class="mb-3">
            <label>Dosen Pengampu</label>
            <select name="lecturer_id" class="form-control">
                <?php foreach ($lecturers as $d): ?>
                <option value="<?= $d['id']; ?>"
                    <?= $d['id'] == $data['lecturer_id'] ? 'selected' : '' ?>>
                    <?= $d['name']; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="index.php?c=matakuliah" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
