<?php
require_once __DIR__ . '/../models/Kaprodi.php';

class KaprodiController
{
    private $model;

    public function __construct()
    {
        $this->model = new Kaprodi();
    }

    // Halaman daftar kaprodi
    public function index()
    {
        $data = $this->model->all();
        include __DIR__ . "/../views/kaprodi/index.php";
    }

    // Form tambah data
    public function create()
    {
        include __DIR__ . "/../views/kaprodi/create.php";
    }

    // Simpan data baru
    public function store()
    {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $periode = $_POST['periode'];

        $this->model->create($nama, $nip, $periode);

        header("Location: ../public/index.php?c=kaprodi");
    }

    // Form edit
    public function edit($id)
    {
        $data = $this->model->find($id);
        include __DIR__ . "/../views/kaprodi/edit.php";
    }

    // Update data
    public function update($id)
    {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $periode = $_POST['periode'];

        $this->model->update($id, $nama, $nip, $periode);

        header("Location: ../public/index.php?c=kaprodi");
    }

    // Hapus data
    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: ../public/index.php?c=kaprodi");
    }
}
