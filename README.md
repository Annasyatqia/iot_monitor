# Project IoT Monitoring – Sensor PIR & LDR

Website ini dibuat untuk menampilkan data dari sensor **PIR** (gerakan) dan **LDR** (cahaya) yang dikirim dari Arduino + ESP8266.

## Fitur

- Menampilkan data sensor terbaru
- Data dikirim otomatis ke server lokal
- Tampilan sederhana dengan tema merah-pink
- Terhubung ke database MySQL via Laragon

## Struktur File

- `index.php` → Menampilkan data sensor
- `kirim_data.php` → Endpoint untuk menerima data dari ESP8266
- `db_config.php` → Koneksi ke database MySQL
- `style.css` → Tampilan website
- `README.md` → Dokumentasi project

## Database

Nama database: `iot_db`  
Tabel: `sensor_data`

| Field   | Type         |
|--------|--------------|
| id     | INT (AI, PK) |
| waktu  | DATETIME     |
| gerakan| VARCHAR(5)   |
| cahaya | VARCHAR(10)  |