<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>四柱推命</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <h2>四柱推命システム</h2>
</header>


<form id="myForm">
    <div class="input-row">
        <input type="text" placeholder="年" name="year" class="year" required>
        <input type="text" placeholder="月" name="month" class="month" required>
        <input type="text" placeholder="日" name="day" class="day" required>
        <input type="text" placeholder="時" name="time" class="time" required>
    </div>
    <div class="submit-row">
        <button type="submit" class="submit-btn">送信</button>
    </div>
</form>

<div id="resultJichu"></div>
<div id="resultNitchu"></div>

<script src="script.js"></script>
</body>
</html>

<?php
// JSで処理するため、サーバー側POST処理はコメントアウト
// $jsonPath = __DIR__ . '/../../data/data.json';
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $year  = $_POST['year'] ?? '';
//     $month = $_POST['month'] ?? '';
//     $day   = $_POST['day'] ?? '';
//     $time  = $_POST['time'] ?? '';
//     $data = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
//     $data[0] = [
//         'year' => $year,
//         'month' => $month,
//         'day' => $day,
//         'time' => $time
//     ];
//     file_put_contents($jsonPath, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//     // 干支計算・A3自動更新
//     include __DIR__ . '/../../src/Nitchu/index.php';
//     // 時柱干支計算・A1自動更新
//     include __DIR__ . '/../../src/jichu/index.php';
//     header('Location: ../../public/meishiki/index.php');
//     exit;
// }
?>
