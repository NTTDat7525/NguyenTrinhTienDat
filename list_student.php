<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f4f6f8;
        padding: 40px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .container {
        width: 450px;
        margin: auto;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }

    .success {
        text-align: center;
        color: green;
        margin-top: 15px;
        font-weight: bold;
    }

    /* TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        margin-top: 20px;
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    th {
        background: #007bff;
        color: white;
    }

    tr:hover {
        background: #f1f1f1;
    }

    .action a {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 14px;
    }

    .edit {
        background: #ffc107;
        color: black;
    }

    .delete {
        background: #dc3545;
        color: white;
    }
</style>

</head>
<body>

<h2>Danh sách sinh viên</h2>

<?php
require "db_connect.php";
$sql = "SELECT * FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $st): ?>
    <tr>
        <td><?= $st['id'] ?></td>
        <td><?= htmlspecialchars($st['fullname']) ?></td>
        <td><?= htmlspecialchars($st['student_code']) ?></td>
        <td><?= htmlspecialchars($st['email']) ?></td>
        <td class="action">
            <a href="#" class="edit">Sửa</a>
            <a href="#" class="delete">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
