<?php include __DIR__ . "/../layouts/header.php"; ?>




<div class="container mt-4">
    <h2>Edit Dosen</h2>

    <form action="index.php?c=lecturers&m=update&id=<?= $data['id'] ?>" method="POST">

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>" required>
        </div>

        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="<?= $data['nidn'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= $data['phone'] ?>">
        </div>

        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="join_date" class="form-control" value="<?= $data['join_date'] ?>">
        </div>

        <div class="mb-3">
            <label>Kaprodi</label>
            <select name="kaprodi_id" class="form-control">
                <?php foreach ($kaprodi_list as $k): ?>
                <option value="<?= $k['id']; ?>" 
                        <?= $k['id'] == $data['kaprodi_id'] ? 'selected' : '' ?>>
                        <?= $k['nama']; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="btn btn-success" type="submit">Update</button>
        <a href="index.php?c=lecturers" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
