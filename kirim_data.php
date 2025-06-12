<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "iot_db";

$conn = new mysqli($host, $user, $pass, $db);

// Ambil data dari ESP8266
$gerakan = $_GET['gerakan'] ?? 'NULL';
$cahaya = $_GET['cahaya'] ?? 'NULL';
$waktu = date("Y-m-d H:i:s");

// Simpan ke database
$sql = "INSERT INTO sensor_data (waktu, gerakan, cahaya) VALUES ('$waktu', '$gerakan', '$cahaya')";
$conn->query($sql);

// Tampilkan data untuk debug
echo "Data tersimpan:<br>";
echo "Waktu: $waktu<br>";
echo "Gerakan: $gerakan<br>";
echo "Cahaya: $cahaya<br>";
?>
