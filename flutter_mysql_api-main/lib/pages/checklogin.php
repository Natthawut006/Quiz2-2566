<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost"; // เชื่อมต่อกับ MySQL ที่อยู่ในเครื่องเดียวกับเว็บแอปพลิเคชัน
$username = "root"; // ชื่อผู้ใช้ของ MySQL
$password = ""; // รหัสผ่านของ MySQL
$dbname = "ชื่อฐานข้อมูลของคุณ"; // ชื่อฐานข้อมูลที่คุณใช้

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากแอปพลิเคชัน
$username = $_POST['username'];
$password = $_POST['password'];

// สร้างคำสั่ง SQL เพื่อตรวจสอบการเข้าสู่ระบบ
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// ตรวจสอบผลลัพธ์
if ($result->num_rows > 0) {
    // ถ้าพบผู้ใช้ที่ตรงกับชื่อผู้ใช้และรหัสผ่านที่ส่งมา
    echo 'Completed'; // ส่งข้อความ "Completed" กลับไปยังแอปพลิเคชัน
} else {
    // ถ้าไม่พบผู้ใช้
    echo 'Failed'; // ส่งข้อความ "Failed" กลับไปยังแอปพลิเคชัน
}

// ปิดการเชื่อมต่อกับฐานข้อมูล
$conn->close();
?>
