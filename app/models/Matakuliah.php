<?php
require_once __DIR__ . '/../../config/Database.php';

class Matakuliah
{
    private $conn;
    private $table = "matakuliah";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    // Ambil semua matakuliah + nama dosen
    public function all()
    {
        $sql = "SELECT matakuliah.*, lecturers.name AS dosen_nama
                FROM matakuliah
                LEFT JOIN lecturers ON matakuliah.lecturer_id = lecturers.id
                ORDER BY matakuliah.id DESC";

        $result = $this->conn->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Ambil satu data
    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    // Tambah data
    public function create($kode_mk, $nama_mk, $sks, $lecturer_id)
    {
        $sql = "INSERT INTO $this->table (kode_mk, nama_mk, sks, lecturer_id)
                VALUES ('$kode_mk', '$nama_mk', $sks, $lecturer_id)";
        return $this->conn->query($sql);
    }

    // Update data
    public function update($id, $kode_mk, $nama_mk, $sks, $lecturer_id)
    {
        $sql = "UPDATE $this->table 
                SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks=$sks, lecturer_id=$lecturer_id
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Hapus data
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($sql);
    }
}
