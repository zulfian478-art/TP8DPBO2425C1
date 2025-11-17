<?php
require_once __DIR__ . '/../models/Matakuliah.php';
require_once __DIR__ . '/../models/Lecturer.php';

class MatakuliahController
{
    private $model;
    private $lecturer;

    public function __construct()
    {
        $this->model = new Matakuliah();
        $this->lecturer = new Lecturer();
    }

    // Halaman utama
    public function index()
    {
        $data = $this->model->all();
        include __DIR__ . "/../views/matakuliah/index.php";
    }

    // Form create
    public function create()
    {
        $lecturers = $this->lecturer->all();
        include __DIR__ . "/../views/matakuliah/create.php";
    }

    // Simpan data
    public function store()
    {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $sks = $_POST['sks'];
        $lecturer_id = $_POST['lecturer_id'];

        $this->model->create($kode_mk, $nama_mk, $sks, $lecturer_id);

        header("Location: ../public/index.php?c=matakuliah");
    }

    // Form edit
    public function edit($id)
    {
        $data = $this->model->find($id);
        $lecturers = $this->lecturer->all();
        include __DIR__ . "/../views/matakuliah/edit.php";
    }

    // Update
    public function update($id)
    {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $sks = $_POST['sks'];
        $lecturer_id = $_POST['lecturer_id'];

        $this->model->update($id, $kode_mk, $nama_mk, $sks, $lecturer_id);

        header("Location: ../public/index.php?c=matakuliah");
    }

    // Hapus
    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: ../public/index.php?c=matakuliah");
    }
}
