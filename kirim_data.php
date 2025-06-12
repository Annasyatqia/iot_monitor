<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nama_database_kamu";

$conn = new mysqli($host, $user, $pass, $db);

$gerakan = $_GET['gerakan'];
$cahaya = $_GET['cahaya'];
$waktu = date("Y-m-d H:i:s");

$sql = "INSERT INTO sensor_data (waktu, gerakan, cahaya) VALUES ('$waktu', '$gerakan', '$cahaya')";
$conn->query($sql);

echo "Data tersimpan";
?>
