<?php
session_start();
$servername = "localhost";
$dbusername = "root";      // ตรวจสอบว่าตรงกับ MySQL ของคุณ
$dbpassword = "az0957281702"; // ตรวจสอบว่าตรงกับ MySQL ของคุณ
$dbname = "webfood";

// เชื่อมต่อ
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// ตรวจสอบ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

function client_ip()
{
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}
// else {
//     echo "Connected successfully"; // ปิดตอนใช้งานจริง
// }
?>