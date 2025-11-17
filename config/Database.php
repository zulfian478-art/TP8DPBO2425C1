<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "mvc_dosen";
    public $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    public function connect() {
        try {
            $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        } catch (Exception $e) {
            die("DB Error: " . $e->getMessage());
        }
    }
}
