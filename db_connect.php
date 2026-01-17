<?php
$host = "localhost";
$dbname = "buoi2_php";
$username = "root";
$password = ""; //email đúng

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

} catch (PDOException $e) {
    die("Hệ thống đang bảo trì, vui lòng quay lại sau");
}
