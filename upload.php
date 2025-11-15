<?php

if (!isset($_FILES["file"])) {
    exit("❌ Файл не найден");
}

$upload_dir = "uploads/";

if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$new_name = uniqid() . "." . $ext;

$target = $upload_dir . $new_name;

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
    echo "✅ Файл успешно загружен!<br><br>";
    echo "🔗 Ссылка на скачивание:<br>";
    echo "<a href='" . $target . "'>" . $target . "</a><br><br>";
    echo "Имя файла: <b>" . $new_name . "</b>";
} else {
    echo "❌ Ошибка загрузки файла";
}
?>
