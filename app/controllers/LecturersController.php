<?php
require_once __DIR__ . '/../models/Lecturer.php';
require_once __DIR__ . '/../models/Kaprodi.php';

class LecturersController
{
    private $model;
    private $kaprodi;

    public function __construct()
    {
        $this->model = new Lecturer();
        $this->kaprodi = new Kaprodi();
    }

    // Halaman daftar dosen
    public function index()
    {
        $data = $this->model->all();
        include __DIR__ . "/../views/lecturers/index.php";
    }

    // Form tambah dosen
    public function create()
    {
        $kaprodi_list = $this->kaprodi->all();
        include __DIR__ . "/../views/lecturers/create.php";
    }

    // Simpan dosen baru
    public function store()
    {
        $name = $_POST['name'];
        $nidn = $_POST['nidn'];
        $phone = $_POST['phone'];
        $join_date = $_POST['join_date'];
        $kaprodi_id = $_POST['kaprodi_id'];

        $this->model->create($name, $nidn, $phone, $join_date, $kaprodi_id);

        header("Location: ../public/index.php?c=lecturers");
    }

    // Form edit dosen
    public function edit($id)
    {
        $data = $this->model->find($id);
        $kaprodi_list = $this->kaprodi->all();
        include __DIR__ . "/../views/lecturers/edit.php";
    }

    // Update dosen
    public function update($id)
    {
        $name = $_POST['name'];
        $nidn = $_POST['nidn'];
        $phone = $_POST['phone'];
        $join_date = $_POST['join_date'];
        $kaprodi_id = $_POST['kaprodi_id'];

        $this->model->update($id, $name, $nidn, $phone, $join_date, $kaprodi_id);

        header("Location: ../public/index.php?c=lecturers");
    }

    // Hapus dosen
    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: ../public/index.php?c=lecturers");
    }
}
