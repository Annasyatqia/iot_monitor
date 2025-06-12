<?php
include "db_config.php";
$data = $conn->query("SELECT * FROM sensor_data ORDER BY waktu DESC LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Monitor Sensor</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>Data Sensor Terbaru</h2>
    <table>
        <tr><th>Waktu</th><th>Gerakan</th><th>Cahaya</th></tr>
        <?php while($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['waktu'] ?></td>
            <td><?= $row['gerakan'] ?></td>
            <td><?= $row['cahaya'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
