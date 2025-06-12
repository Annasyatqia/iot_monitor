<?php
include "db_config.php";

$gerakan = $_GET['gerakan'];
$cahaya  = $_GET['cahaya'];

$sql = "INSERT INTO sensor_data (waktu, gerakan, cahaya) 
        VALUES (NOW(), '$gerakan', '$cahaya')";

if ($conn->query($sql) === TRUE) {
    echo "Data masuk!";
} else {
    echo "Error: " . $conn->error;
}
?>