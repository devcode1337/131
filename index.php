<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 40px; }
        .box {
            background: white;
            padding: 25px;
            max-width: 450px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type=file] { padding: 12px; width: 90%; }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background: #0077ff;
            border: 0;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover { background: #005ccc; }
    </style>
</head>
<body>

<div class="box">
    <h2>Загрузка файла</h2>
    <p>Поддерживается: ZIP, RAR, PY, JPG, PNG, любые файлы</p>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required><br>
        <button type="submit">Загрузить</button>
    </form>
</div>

</body>
</html>
