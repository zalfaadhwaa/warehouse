<?php
class ConnectionDatabase {
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_pass = "";
    private $db_name = "wap";
    public $connection;

    function __construct() {
        // Membuat koneksi ke database
        $this->connection = new mysqli(
            $this->db_host,
            $this->db_username,
            $this->db_pass,
            $this->db_name
        );

        // Cek jika terjadi error saat koneksi
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Fungsi untuk mendapatkan koneksi
    public function getConnection() {
        return $this->connection;
    }

    // Menutup koneksi secara eksplisit
    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    // Menutup koneksi saat objek dihapus
    function __destruct() {
        $this->closeConnection();
    }
}
?>
