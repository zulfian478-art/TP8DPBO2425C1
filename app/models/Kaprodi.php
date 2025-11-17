<?php
require_once __DIR__ . '/../../config/Database.php';

class Kaprodi
{
    private $conn;
    private $table = "kaprodi";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    // Ambil semua data kaprodi
    public function all()
    {
        $sql = "SELECT * FROM $this->table ORDER BY id DESC";
        $result = $this->conn->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Ambil satu kaprodi berdasarkan ID
    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    // Tambah data baru
    public function create($nama, $nip, $periode)
    {
        $sql = "INSERT INTO $this->table (nama, nip, periode)
                VALUES ('$nama', '$nip', '$periode')";
        return $this->conn->query($sql);
    }

    // Update data kaprodi
    public function update($id, $nama, $nip, $periode)
    {
        $sql = "UPDATE $this->table 
                SET nama='$nama', nip='$nip', periode='$periode'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Hapus kaprodi
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($sql);
    }
}
