<?php
include "db_config.php";
$data = $conn->query("SELECT * FROM sensor_data ORDER BY waktu DESC LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Monitor Sensor</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background: linear-gradient(to right, #ffe6e6, #fff0f5);
            padding: 40px;
            color: #550000;
        }

        h2 {
            color: #c2185b;
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 20px rgba(255, 105, 180, 0.2);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 20px;
            text-align: center;
            border-bottom: 1px solid #ffcdd2;
        }

        th {
            background-color: #f06292;
            color: white;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #fff5f7;
        }

        tr:hover {
            background-color: #ffeef0;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #888;
        }
    </style>
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

    <footer>
        &copy; <?= date("Y") ?> IOT Sensor Monitor | By Annasya
    </footer>
</body>
</html>
