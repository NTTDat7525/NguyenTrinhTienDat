<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        width: 400px;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 8px 0 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #4a69bd;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #1e3799;
    }

    .result {
        margin-top: 15px;
        padding: 10px;
        background: #f1f2f6;
        border-left: 5px solid #4a69bd;
        font-weight: bold;
    }

</style>

</head>
<body>

<div class="box">
    <h2>Đăng ký (POST)</h2>

    <form method="post">
        <label>Tên</label>
        <input type="text" name="name" placeholder="Nhập tên" required>

        <label>Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu" required>

        <button type="submit">Gửi thông tin</button>
    </form>

    <?php if (isset($_POST['name'])): ?>
        <div class="result">
            Đã nhận thông tin của <b><?= htmlspecialchars($_POST['name']) ?></b>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
