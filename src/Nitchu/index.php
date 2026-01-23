<?php
$jsonPath = __DIR__ . '/../../data/data.json';
$data = json_decode(file_get_contents($jsonPath), true);

// ==============================
// 六十干支リスト
// ==============================
$tenkan = ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$chishi = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$eto_list = [];
for ($i = 0; $i < 60; $i++) {
    $eto_list[] = $tenkan[$i % 10] . $chishi[$i % 12];
}

// ==============================
// 日柱干支計算（泰山派・子刻23:00基準）
// ==============================
function calc_nichu_eto($birth_datetime, $eto_list) {

    if (strtotime($birth_datetime) === false) {
        return "";
    }

    // ★ 基準日：1984-02-02 甲子日（0:00基準）
    $base_date  = new DateTime("1984-02-02 00:00:00");
    $base_index = array_search("甲子", $eto_list);

    if ($base_index === false) {
        return "";
    }

    $birth = new DateTime($birth_datetime);

    // ★ 子刻補正（出生時のみ）
    if ((int)$birth->format("H") >= 23) {
        $birth->modify("+1 day");
    }

    // 日付差のみで計算
    $birth_date = new DateTime($birth->format("Y-m-d"));

    $diff_days = (int)$base_date->diff($birth_date)->format("%r%a");

    $index = ($base_index + $diff_days) % 60;
    if ($index < 0) {
        $index += 60;
    }

    return $eto_list[$index];
}

// ==============================
// 実行部
// ==============================
$birth_datetime = sprintf(
    '%04d-%02d-%02d %s:00',
    $data[0]['year'],
    $data[0]['month'],
    $data[0]['day'],
    $data[0]['time']
);

$nichu_eto = calc_nichu_eto($birth_datetime, $eto_list);

$data[1]['A3'] = $nichu_eto;

file_put_contents(
    $jsonPath,
    json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
);
?>