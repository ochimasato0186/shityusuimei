<?php
// ==============================
// 四柱推命 時柱干支算出ロジック（PHP版）
// ==============================

// --- 十干・十二支 ---
$tenkan = ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$chishi = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

// --- 日干を基準とした時干表（固定） ---
$jikkan_table = [
    "甲" => ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸","甲","乙"],
    "乙" => ["丙","丁","戊","己","庚","辛","壬","癸","甲","乙","丙","丁"],
    "丙" => ["戊","己","庚","辛","壬","癸","甲","乙","丙","丁","戊","己"],
    "丁" => ["庚","辛","壬","癸","甲","乙","丙","丁","戊","己","庚","辛"],
    "戊" => ["壬","癸","甲","乙","丙","丁","戊","己","庚","辛","壬","癸"],
    "己" => ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸","甲","乙"],
    "庚" => ["丙","丁","戊","己","庚","辛","壬","癸","甲","乙","丙","丁"],
    "辛" => ["戊","己","庚","辛","壬","癸","甲","乙","丙","丁","戊","己"],
    "壬" => ["庚","辛","壬","癸","甲","乙","丙","丁","戊","己","庚","辛"],
    "癸" => ["壬","癸","甲","乙","丙","丁","戊","己","庚","辛","壬","癸"]
];

// --- 時刻を十二支に変換する表（2時間刻み） ---
$jikan_to_shi = [
    ["start" => 23, "end" => 1,  "shi" => "子"],
    ["start" => 1,  "end" => 3,  "shi" => "丑"],
    ["start" => 3,  "end" => 5,  "shi" => "寅"],
    ["start" => 5,  "end" => 7,  "shi" => "卯"],
    ["start" => 7,  "end" => 9,  "shi" => "辰"],
    ["start" => 9,  "end" => 11, "shi" => "巳"],
    ["start" => 11, "end" => 13, "shi" => "午"],
    ["start" => 13, "end" => 15, "shi" => "未"],
    ["start" => 15, "end" => 17, "shi" => "申"],
    ["start" => 17, "end" => 19, "shi" => "酉"],
    ["start" => 19, "end" => 21, "shi" => "戌"],
    ["start" => 21, "end" => 23, "shi" => "亥"]
];

// --- 時支を求める関数 ---
function get_shishi_by_time($hour, $jikan_to_shi) {
    foreach ($jikan_to_shi as $row) {
        $start = $row["start"];
        $end = $row["end"];
        if ($start <= $end) {
            if ($hour >= $start && $hour < $end) return $row["shi"];
        } else {
            // 23〜翌1時（子刻）の処理
            if ($hour >= $start || $hour < $end) return $row["shi"];
        }
    }
    return "子";
}

// --- 時柱干支を求める関数 ---
function calc_jikan($day_kan, $hour, $chishi, $jikkan_table, $jikan_to_shi) {
    $shishi = get_shishi_by_time($hour, $jikan_to_shi);
    $index = array_search($shishi, $chishi);
    if ($index === false) return "Error: 時支が見つかりません。";
    $jikkan = $jikkan_table[$day_kan][$index];
    return $jikkan . $shishi;
}

// --- data.jsonから日干・時刻を取得しA1に保存 ---
$jsonPath = __DIR__ . '/../../data/data.json';
$data = json_decode(file_get_contents($jsonPath), true);

// 日干取得（A3の1文字目）
$day_kan = isset($data[1]['A3']) ? mb_substr($data[1]['A3'], 0, 1) : '';
// 時刻（hour）取得
$hour = 0;
if (!empty($data[0]['time'])) {
    $time_parts = explode(':', $data[0]['time']);
    $hour = (int)$time_parts[0];
}
$jikan_eto = ($day_kan !== '') ? calc_jikan($day_kan, $hour, $chishi, $jikkan_table, $jikan_to_shi) : '';
$data[1]['A1'] = $jikan_eto;
file_put_contents($jsonPath, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
