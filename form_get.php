<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form GET</title>
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
    <h2>Tìm kiếm (GET)</h2>

    <form method="get">
        <label>Từ khóa</label>
        <input type="text" name="keyword" placeholder="Nhập từ khóa...">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if (isset($_GET['keyword'])): ?>
        <div class="result">
            Bạn đang tìm kiếm từ khóa: 
            <?= htmlspecialchars($_GET['keyword']) ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
