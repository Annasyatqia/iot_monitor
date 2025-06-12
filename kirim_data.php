<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sensor_data";

$conn = new mysqli($host, $user, $pass, $db);

$gerakan = $_GET['gerakan'];
$cahaya = $_GET['cahaya'];
$waktu = date("Y-m-d H:i:s");

$sql = "INSERT INTO sensor_data (waktu, gerakan, cahaya) VALUES ('$waktu', '$gerakan', '$cahaya')";
$conn->query($sql);

echo "Data tersimpan";
?>
