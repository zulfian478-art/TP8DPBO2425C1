<?php
require_once __DIR__ . '/../../config/Database.php';

class Lecturer
{
    private $conn;
    private $table = "lecturers";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    // Ambil semua dosen + nama kaprodi
    public function all()
    {
        $sql = "SELECT lecturers.*, kaprodi.nama AS kaprodi_nama
                FROM lecturers
                LEFT JOIN kaprodi ON lecturers.kaprodi_id = kaprodi.id
                ORDER BY lecturers.id DESC";

        $result = $this->conn->query($sql);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Ambil 1 dosen
    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $result = $this->conn->query($sql);

        return $result->fetch_assoc();
    }

    // Tambah dosen baru
    public function create($name, $nidn, $phone, $join_date, $kaprodi_id)
    {
        $sql = "INSERT INTO $this->table (name, nidn, phone, join_date, kaprodi_id)
                VALUES ('$name', '$nidn', '$phone', '$join_date', $kaprodi_id)";
        return $this->conn->query($sql);
    }

    // Update data dosen
    public function update($id, $name, $nidn, $phone, $join_date, $kaprodi_id)
    {
        $sql = "UPDATE $this->table 
                SET name='$name', nidn='$nidn', phone='$phone', join_date='$join_date', kaprodi_id=$kaprodi_id
                WHERE id = $id";
        return $this->conn->query($sql);
    }

    // Hapus dosen
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->conn->query($sql);
    }
}
