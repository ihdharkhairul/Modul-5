<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');   // sesuaikan
define('DB_PASS', '');       // sesuaikan
define('DB_NAME', 'gaiacity_db');

function getConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Koneksi database gagal: ' . $conn->connect_error);
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}
