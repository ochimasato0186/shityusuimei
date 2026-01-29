<?php
$jsonPath = __DIR__ . '/../../data/data.json';
$data = json_decode(file_get_contents($jsonPath), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四柱推命</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h2>四柱推命システム</h2>
    </header>

    <main>

        <!-- 四柱 -->
        <table class="nine-table">
            <tbody>
                <tr>
                    <td colspan="2" class="karamu">生時</td>
                    <td colspan="2" class="karamu">生日</td>
                    <td colspan="2" class="karamu">生月</td>
                    <td colspan="2" class="karamu">生年</td>
                    <td rowspan="2" class="karamu">四<br>柱</td>
                </tr>
                <tr>
                    <td colspan="2" class="sityu">
                        <?= isset($data[0]['time']) ? htmlspecialchars($data[0]['time']) : '④' ?>
                    </td>
                    <td colspan="2" class="sityu">
                        <?= isset($data[0]['day']) ? htmlspecialchars($data[0]['day']) : '③' ?>
                    </td>
                    <td colspan="2" class="sityu">
                        <?= isset($data[0]['month']) ? htmlspecialchars($data[0]['month']) : '②' ?>
                    </td>
                    <td colspan="2" class="sityu">
                        <?= isset($data[0]['year']) ? htmlspecialchars($data[0]['year']) : '①' ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="group-8">
                        <!-- 生時の干支 -->
                        <?= isset($data[1]['A1']) ? htmlspecialchars($data[1]['A1']) : '' ?>
                    </td>
                    <td class="group-8-1">
                        <?= isset($data[1]['A2']) ? htmlspecialchars($data[1]['A2']) : '⑤' ?>
                    </td>
                    <td rowspan="2" class="group-7">
                        <!-- 生日の干支 -->
                        <?= isset($data[1]['A3']) ? htmlspecialchars($data[1]['A3']) : '⑧' ?>
                    </td>
                    </td>
                    <td class="group-7-1">
                        <?= isset($data[1]['A4']) ? htmlspecialchars($data[1]['A4']) : '⑤' ?>
                    </td>
                    <td rowspan="2" class="group-6">
                        <!--  生月の干支 -->
                        <?= isset($data[1]['A5']) ? htmlspecialchars($data[1]['A5']) : '⑥' ?>
                    </td>
                    <td class="group-6-1">
                        <?= isset($data[1]['A6']) ? htmlspecialchars($data[1]['A6']) : '⑤' ?>
                    </td>
                    <td rowspan="2" class="group-5">
                        <!--  生年の干支 -->
                        <?= isset($data[1]['A7']) ? htmlspecialchars($data[1]['A7']) : '⑤' ?>
                    </td>
                    <td class="group-5-1">
                        <?= isset($data[1]['A8']) ? htmlspecialchars($data[1]['A8']) : '⑤' ?>
                    </td>
                    <td rowspan="2" class="karamu">干<br>支</td>
                </tr>
                <tr>    
                    <td class="group-8-2">
                        <?= isset($data[1]['B2']) ? htmlspecialchars($data[1]['B2']) : 'B2' ?>
                    </td>
                    <td class="group-7-2">
                        <?= isset($data[1]['B4']) ? htmlspecialchars($data[1]['B4']) : 'B4' ?>
                    </td>
                    <td class="group-6-2">
                        <?= isset($data[1]['B6']) ? htmlspecialchars($data[1]['B6']) : 'B6' ?>
                    </td>
                    <td class="group-5-2">
                        <?= isset($data[1]['B8']) ? htmlspecialchars($data[1]['B8']) : 'B8' ?>
                    </td>
                </tr>
                <tr>
                    <td class="C1">
                        <?= isset($data[2]['C1']) ? htmlspecialchars($data[2]['C1']) : '' ?>
                    </td>
                    <td class="C2">
                        <?= isset($data[2]['C2']) ? htmlspecialchars($data[2]['C2']) : '' ?>
                    </td>
                    <td class="C3">
                        <?= isset($data[2]['C3']) ? htmlspecialchars($data[2]['C3']) : '' ?>
                    </td>
                    <td class="C4">
                        <?= isset($data[2]['C4']) ? htmlspecialchars($data[2]['C4']) : '' ?>
                    </td>
                    <td class="C5">
                        <?= isset($data[2]['C5']) ? htmlspecialchars($data[2]['C5']) : '' ?>
                    </td>
                    <td class="C6">
                        <?= isset($data[2]['C6']) ? htmlspecialchars($data[2]['C6']) : '' ?>
                    </td>
                    <td class="C7">
                        <?= isset($data[2]['C7']) ? htmlspecialchars($data[2]['C7']) : '' ?>
                    </td>
                    <td class="C8">
                        <?= isset($data[2]['C8']) ? htmlspecialchars($data[2]['C8']) : '' ?>
                    </td>
                    <td class="karamu">蔵<br>干</td>
                </tr>
                <tr>
                    <td class="D1">
                        <?= isset($data[3]['D1']) ? htmlspecialchars($data[3]['D1']) : '' ?>
                    </td>
                    <td class="D2">(
                        <?= isset($data[3]['D2']) ? htmlspecialchars($data[3]['D2']) : '' ?>
                    )</td>
                    <td class="D3"></td>       
                    <td class="D4"></td>
                    <td class="D5">
                        <?= isset($data[3]['D5']) ? htmlspecialchars($data[3]['D5']) : '' ?>
                    </td>
                    <td class="D6">(
                        <?= isset($data[3]['D6']) ? htmlspecialchars($data[3]['D6']) : '' ?>
                    )</td>
                    <td class="D7">
                        <?= isset($data[3]['D7']) ? htmlspecialchars($data[3]['D7']) : '' ?>
                    </td>
                    <td class="D8">(
                        <?= isset($data[3]['D8']) ? htmlspecialchars($data[3]['D8']) : '' ?>
                    )</td>
                    <td class="karamu">天<br>星</td>
                </tr>
                <tr>
                    <td class="E1">
                        <?= isset($data[4]['E1']) ? htmlspecialchars($data[4]['E1']) : '' ?>
                    </td>
                    <td class="E2">(
                        <?= isset($data[4]['E2']) ? htmlspecialchars($data[4]['E2']) : '' ?>
                    )</td>
                    <td class="E3">
                        <?= isset($data[4]['E3']) ? htmlspecialchars($data[4]['E3']) : '' ?>
                    </td>
                    <td class="E4">(
                        <?= isset($data[4]['E4']) ? htmlspecialchars($data[4]['E4']) : '' ?>
                    )</td>
                    <td class="E5">
                        <?= isset($data[4]['E5']) ? htmlspecialchars($data[4]['E5']) : '' ?>
                    </td>
                    <td class="E6">(
                        <?= isset($data[4]['E6']) ? htmlspecialchars($data[4]['E6']) : '' ?>
                    )</td>
                    <td class="E7">
                        <?= isset($data[4]['E7']) ? htmlspecialchars($data[4]['E7']) : '' ?>
                    </td>
                    <td class="E8">(
                        <?= isset($data[4]['E8']) ? htmlspecialchars($data[4]['E8']) : '' ?>
                    )</td>
                    <td class="karamu">地<br>星</td>
                </tr>
                <tr>
                    <td colspan="2" class="F1">
                        <?= isset($data[5]['F1']) ? htmlspecialchars($data[5]['F1']) : '' ?>
                    </td>
                    <td colspan="2" class="F3">
                        <?= isset($data[5]['F3']) ? htmlspecialchars($data[5]['F3']) : '' ?>
                    </td>
                    <td colspan="2" class="F5">
                        <?= isset($data[5]['F5']) ? htmlspecialchars($data[5]['F5']) : '' ?>
                    </td>
                    <td colspan="2" class="F7">
                        <?= isset($data[5]['F7']) ? htmlspecialchars($data[5]['F7']) : '' ?>
                    </td>
                    <td class="karamu">運十<br>星二</td>
                </tr>
                <tr class="group-G">
                    <td colspan="2" class="G1">
                        <?= isset($data[6]['G1']) ? htmlspecialchars($data[6]['G1']) : '' ?>
                    </td>
                    <td colspan="2" class="G3">
                        <?= isset($data[6]['G3']) ? htmlspecialchars($data[6]['G3']) : '' ?>
                    </td>
                    <td colspan="2" class="G5">
                        <?= isset($data[6]['G5']) ? htmlspecialchars($data[6]['G5']) : '' ?>
                    </td>
                    <td colspan="2" class="G7">
                        <?= isset($data[6]['G7']) ? htmlspecialchars($data[6]['G7']) : '' ?>
                    </td>
                    <td class="karamu">特<br>殊<br>星</td>
                </tr>
            </tbody>
        </table>
        <br>
        <!-- 大運 -->
        <table class="six-twelve-table">
            <tbody>
                <tr class="group-AA">
                    <td>十</td>
                    <td>九</td>
                    <td class="AA8">八</td>
                    <td>七</td>
                    <td>六</td>
                    <td class="AA5">五</td>
                    <td>四</td>
                    <td>三</td>
                    <td class="AA2">二</td>
                    <td>一</td>
                    <td>初運</td>
                    <td>大運</td>
                </tr>
                <!-- 2行目 -->
                <tr class="AB">
                    <td class="AB-1">～</td>
                    <td class="AB-2">～</td>
                    <td class="AB-3">～</td>
                    <td class="AB-4">～</td>
                    <td class="AB-5">～</td>
                    <td class="AB-6">～</td>
                    <td class="AB-7">～</td>
                    <td class="AB-8">～</td>
                    <td class="AB-9">～</td>
                    <td class="AB-10">～</td>
                    <td class="AB-11">～</td>
                    <td class="AB-12">立<br>運</td>
                </tr>
                <!-- 3行目 -->
                <tr>
                    <td class="AC-1">
                        <?= isset($hyou2[1]['AC-1']) ? htmlspecialchars($hyou2[1]['AC-1']) : '' ?>
                    </td>
                    <td class="AC-2">
                        <?= isset($hyou2[1]['AC-2']) ? htmlspecialchars($hyou2[1]['AC-2']) : '' ?>
                    </td>
                    <td class="AC-3">
                        <?= isset($hyou2[1]['AC-3']) ? htmlspecialchars($hyou2[1]['AC-3']) : '' ?>
                    </td>
                    <td class="AC-4">
                        <?= isset($hyou2[1]['AC-4']) ? htmlspecialchars($hyou2[1]['AC-4']) : '' ?>
                    </td>
                    <td class="AC-5">
                        <?= isset($hyou2[1]['AC-5']) ? htmlspecialchars($hyou2[1]['AC-5']) : '' ?>
                    </td>
                    <td class="AC-6">
                        <?= isset($hyou2[1]['AC-6']) ? htmlspecialchars($hyou2[1]['AC-6']) : '' ?>
                    </td>
                    <td class="AC-7">
                        <?= isset($hyou2[1]['AC-7']) ? htmlspecialchars($hyou2[1]['AC-7']) : '' ?>
                    </td>
                    <td class="AC-8">
                        <?= isset($hyou2[1]['AC-8']) ? htmlspecialchars($hyou2[1]['AC-8']) : '' ?>
                    </td>
                    <td class="AC-9">
                        <?= isset($hyou2[1]['AC-9']) ? htmlspecialchars($hyou2[1]['AC-9']) : '' ?>
                    </td>
                    <td class="AC-10">
                        <?= isset($hyou2[1]['AC-10']) ? htmlspecialchars($hyou2[1]['AC-10']) : '' ?>
                    </td>
                    <td class="AC-11">
                        <?= isset($hyou2[1]['AC-11']) ? htmlspecialchars($hyou2[1]['AC-11']) : '' ?>
                    </td>
                    <td class="AC-12">干<br>支</td>
                </tr>
                <!-- 4行目 -->
                <tr>
                    <td class="AD-1">
                        <?= isset($hyou2[2]['AD-1']) ? htmlspecialchars($hyou2[2]['AD-1']) : '' ?>
                    </td>
                    <td class="AD-2">
                        <?= isset($hyou2[2]['AD-2']) ? htmlspecialchars($hyou2[2]['AD-2']) : '' ?>
                    </td>
                    <td class="AD-3">
                        <?= isset($hyou2[2]['AD-3']) ? htmlspecialchars($hyou2[2]['AD-3']) : '' ?>
                    </td>
                    <td class="AD-4">
                        <?= isset($hyou2[2]['AD-4']) ? htmlspecialchars($hyou2[2]['AD-4']) : '' ?>
                    </td>
                    <td class="AD-5">
                        <?= isset($hyou2[2]['AD-5']) ? htmlspecialchars($hyou2[2]['AD-5']) : '' ?>
                    </td>
                    <td class="AD-6">
                        <?= isset($hyou2[2]['AD-6']) ? htmlspecialchars($hyou2[2]['AD-6']) : '' ?>
                    </td>
                    <td class="AD-7">
                        <?= isset($hyou2[2]['AD-7']) ? htmlspecialchars($hyou2[2]['AD-7']) : '' ?>
                    </td>
                    <td class="AD-8">
                        <?= isset($hyou2[2]['AD-8']) ? htmlspecialchars($hyou2[2]['AD-8']) : '' ?>
                    </td>
                    <td class="AD-9">
                        <?= isset($hyou2[2]['AD-9']) ? htmlspecialchars($hyou2[2]['AD-9']) : '' ?>
                    </td>
                    <td class="AD-10">
                        <?= isset($hyou2[2]['AD-10']) ? htmlspecialchars($hyou2[2]['AD-10']) : '' ?>
                    </td>
                    <td class="AD-11">
                        <?= isset($hyou2[2]['AD-11']) ? htmlspecialchars($hyou2[2]['AD-11']) : '' ?>
                    </td>
                    <td class="AD-12">通<br>運<br>星</td>
                </tr>
                <!-- 5行目 -->
                <tr>
                    <td class="AE-1">
                        <?= isset($hyou2[3]['AE-1']) ? htmlspecialchars($hyou2[3]['AE-1']) : '' ?>
                    </td>
                    <td class="AE-2">
                        <?= isset($hyou2[3]['AE-2']) ? htmlspecialchars($hyou2[3]['AE-2']) : '' ?>
                    </td>
                    <td class="AE-3">
                        <?= isset($hyou2[3]['AE-3']) ? htmlspecialchars($hyou2[3]['AE-3']) : '' ?>
                    </td>
                    <td class="AE-4">
                        <?= isset($hyou2[3]['AE-4']) ? htmlspecialchars($hyou2[3]['AE-4']) : '' ?>
                    </td>
                    <td class="AE-5">
                        <?= isset($hyou2[3]['AE-5']) ? htmlspecialchars($hyou2[3]['AE-5']) : '' ?>
                    </td>
                    <td class="AE-6">
                        <?= isset($hyou2[3]['AE-6']) ? htmlspecialchars($hyou2[3]['AE-6']) : '' ?>
                    </td>
                    <td class="AE-7">
                        <?= isset($hyou2[3]['AE-7']) ? htmlspecialchars($hyou2[3]['AE-7']) : '' ?>
                    </td>
                    <td class="AE-8">
                        <?= isset($hyou2[3]['AE-8']) ? htmlspecialchars($hyou2[3]['AE-8']) : '' ?>
                    </td>
                    <td class="AE-9">
                        <?= isset($hyou2[3]['AE-9']) ? htmlspecialchars($hyou2[3]['AE-9']) : '' ?>
                    </td>
                    <td class="AE-10">
                        <?= isset($hyou2[3]['AE-10']) ? htmlspecialchars($hyou2[3]['AE-10']) : '' ?>
                    </td>
                    <td class="AE-11">
                        <?= isset($hyou2[3]['AE-11']) ? htmlspecialchars($hyou2[3]['AE-11']) : '' ?>
                    </td>
                    <td class="AE-12">十<br>二<br>運</td>
                </tr>
                <!-- 6行目 -->
                <tr>
                    <td class="AF-1">
                        <?= isset($hyou2[4]['AF-1']) ? htmlspecialchars($hyou2[4]['AF-1']) : '' ?>
                    </td>
                    <td class="AF-2">
                        <?= isset($hyou2[4]['AF-2']) ? htmlspecialchars($hyou2[4]['AF-2']) : '' ?>
                    </td>
                    <td class="AF-3">
                        <?= isset($hyou2[4]['AF-3']) ? htmlspecialchars($hyou2[4]['AF-3']) : '' ?>
                    </td>
                    <td class="AF-4">
                        <?= isset($hyou2[4]['AF-4']) ? htmlspecialchars($hyou2[4]['AF-4']) : '' ?>
                    </td>
                    <td class="AF-5">
                        <?= isset($hyou2[4]['AF-5']) ? htmlspecialchars($hyou2[4]['AF-5']) : '' ?>
                    </td>
                    <td class="AF-6">
                        <?= isset($hyou2[4]['AF-6']) ? htmlspecialchars($hyou2[4]['AF-6']) : '' ?>
                    </td>
                    <td class="AF-7">
                        <?= isset($hyou2[4]['AF-7']) ? htmlspecialchars($hyou2[4]['AF-7']) : '' ?>
                    </td>
                    <td class="AF-8">
                        <?= isset($hyou2[4]['AF-8']) ? htmlspecialchars($hyou2[4]['AF-8']) : '' ?>
                    </td>
                    <td class="AF-9">
                        <?= isset($hyou2[4]['AF-9']) ? htmlspecialchars($hyou2[4]['AF-9']) : '' ?>
                    </td>
                    <td class="AF-10">
                        <?= isset($hyou2[4]['AF-10']) ? htmlspecialchars($hyou2[4]['AF-10']) : '' ?>
                    </td>
                    <td class="AF-11">
                        <?= isset($hyou2[4]['AF-11']) ? htmlspecialchars($hyou2[4]['AF-11']) : '' ?>
                    </td>
                    <td class="AF-12">特<br>殊<br>星</td>
                </tr>
            </tbody>
        </table>
        <br>

         <table class="six-twelve-table-2">
            <tbody>
                <!-- 1行目 -->
                <tr>
                    <td class="BA-1">2034年</td>
                    <td class="BA-2">2033年</td>
                    <td class="BA-3">2032年</td>
                    <td class="BA-4">2031年</td>
                    <td class="BA-5">2030年</td>
                    <td class="BA-6">2029年</td>
                    <td class="BA-7">2028年</td>
                    <td class="BA-8">2027年</td>
                    <td class="BA-9">2026年</td>
                    <td class="BA-10">2025年</td>
                    <td class="BA-11">2024年</td>
                    <td rowspan="2" class="karamu">年<br>歳</td>
                </tr>
                <!-- 2行目 -->
                <tr>
                    <td class="BB-1">
                        <?= isset($hyou3[0]['BB-1']) ? htmlspecialchars($hyou3[0]['BB-1']) : '' ?>
                    歳</td>
                    <td class="BB-2">
                        <?= isset($hyou3[0]['BB-2']) ? htmlspecialchars($hyou3[0]['BB-2']) : '' ?>
                    歳</td>
                    <td class="BB-3">
                        <?= isset($hyou3[0]['BB-3']) ? htmlspecialchars($hyou3[0]['BB-3']) : '' ?>
                    歳</td>
                    <td class="BB-4">
                        <?= isset($hyou3[0]['BB-4']) ? htmlspecialchars($hyou3[0]['BB-4']) : '' ?>
                    歳</td>
                    <td class="BB-5">
                        <?= isset($hyou3[0]['BB-5']) ? htmlspecialchars($hyou3[0]['BB-5']) : '' ?>
                    歳</td>
                    <td class="BB-6">
                        <?= isset($hyou3[0]['BB-6']) ? htmlspecialchars($hyou3[0]['BB-6']) : '' ?>
                    歳</td>
                    <td class="BB-7">
                        <?= isset($hyou3[0]['BB-7']) ? htmlspecialchars($hyou3[0]['BB-7']) : '' ?>
                    歳</td>
                    <td class="BB-8">
                        <?= isset($hyou3[0]['BB-8']) ? htmlspecialchars($hyou3[0]['BB-8']) : '' ?>
                    歳</td>
                    <td class="BB-9">
                        <?= isset($hyou3[0]['BB-9']) ? htmlspecialchars($hyou3[0]['BB-9']) : '' ?>
                    歳</td>
                    <td class="BB-10">
                        <?= isset($hyou3[0]['BB-10']) ? htmlspecialchars($hyou3[0]['BB-10']) : '' ?>
                    歳</td>
                    <td class="BB-11">
                        <?= isset($hyou3[0]['BB-11']) ? htmlspecialchars($hyou3[0]['BB-11']) : '' ?>
                    歳</td>
                </tr>
                <!-- 3行目 -->
                <tr class="BC">
                    <td class="BC-1">
                        <?= isset($hyou3[1]['BC-1']) ? htmlspecialchars($hyou3[1]['BC-1']) : '' ?>
                    </td>
                    <td class="BC-2">
                        <?= isset($hyou3[1]['BC-2']) ? htmlspecialchars($hyou3[1]['BC-2']) : '' ?>
                    </td>
                    <td class="BC-3">
                        <?= isset($hyou3[1]['BC-3']) ? htmlspecialchars($hyou3[1]['BC-3']) : '' ?>
                    </td>
                    <td class="BC-4">
                        <?= isset($hyou3[1]['BC-4']) ? htmlspecialchars($hyou3[1]['BC-4']) : '' ?>
                    </td>
                    <td class="BC-5">
                        <?= isset($hyou3[1]['BC-5']) ? htmlspecialchars($hyou3[1]['BC-5']) : '' ?>
                    </td>
                    <td class="BC-6">
                        <?= isset($hyou3[1]['BC-6']) ? htmlspecialchars($hyou3[1]['BC-6']) : '' ?>
                    </td>
                    <td class="BC-7">
                        <?= isset($hyou3[1]['BC-7']) ? htmlspecialchars($hyou3[1]['BC-7']) : '' ?>
                    </td>
                    <td class="BC-8">
                        <?= isset($hyou3[1]['BC-8']) ? htmlspecialchars($hyou3[1]['BC-8']) : '' ?>
                    </td>
                    <td class="BC-9">
                        <?= isset($hyou3[1]['BC-9']) ? htmlspecialchars($hyou3[1]['BC-9']) : '' ?>
                    </td>
                    <td class="BC-10">
                        <?= isset($hyou3[1]['BC-10']) ? htmlspecialchars($hyou3[1]['BC-10']) : '' ?>
                    </td>
                    <td class="BC-11">
                        <?= isset($hyou3[1]['BC-11']) ? htmlspecialchars($hyou3[1]['BC-11']) : '' ?>
                    </td>
                    <td class="BC-12">干支<br>(納音)</td>
                </tr>
                <!-- 4行目 -->
                <tr class="BE">
                    <td class="BE-1">
                        <?= isset($hyou3[2]['BE-1']) ? htmlspecialchars($hyou3[2]['BE-1']) : '' ?>
                    </td>
                    <td class="BE-2">
                        <?= isset($hyou3[2]['BE-2']) ? htmlspecialchars($hyou3[2]['BE-2']) : '' ?>
                    </td>
                    <td class="BE-3">
                        <?= isset($hyou3[2]['BE-3']) ? htmlspecialchars($hyou3[2]['BE-3']) : '' ?>
                    </td>
                    <td class="BE-4">
                        <?= isset($hyou3[2]['BE-4']) ? htmlspecialchars($hyou3[2]['BE-4']) : '' ?>
                    </td>
                    <td class="BE-5">
                        <?= isset($hyou3[2]['BE-5']) ? htmlspecialchars($hyou3[2]['BE-5']) : '' ?>
                    </td>
                    <td class="BE-6">
                        <?= isset($hyou3[2]['BE-6']) ? htmlspecialchars($hyou3[2]['BE-6']) : '' ?>
                    </td>
                    <td class="BE-7">
                        <?= isset($hyou3[2]['BE-7']) ? htmlspecialchars($hyou3[2]['BE-7']) : '' ?>
                    </td>
                    <td class="BE-8">
                        <?= isset($hyou3[2]['BE-8']) ? htmlspecialchars($hyou3[2]['BE-8']) : '' ?>
                    </td>
                    <td class="BE-9">
                        <?= isset($hyou3[2]['BE-9']) ? htmlspecialchars($hyou3[2]['BE-9']) : '' ?>
                    </td>
                    <td class="BE-10">
                        <?= isset($hyou3[2]['BE-10']) ? htmlspecialchars($hyou3[2]['BE-10']) : '' ?>
                    </td>
                    <td class="BE-11">
                        <?= isset($hyou3[2]['BE-11']) ? htmlspecialchars($hyou3[2]['BE-11']) : '' ?>
                    </td>
                    <td class="BE-12">通変星</td>
                </tr>
                <!-- 5行目 -->
                <tr class="BF">
                    <td class="BF-1">
                        <?= isset($hyou3[3]['BF-1']) ? htmlspecialchars($hyou3[3]['BF-1']) : '' ?>
                    </td>
                    <td class="BF-2">
                        <?= isset($hyou3[3]['BF-2']) ? htmlspecialchars($hyou3[3]['BF-2']) : '' ?>
                    </td>
                    <td class="BF-3">
                        <?= isset($hyou3[3]['BF-3']) ? htmlspecialchars($hyou3[3]['BF-3']) : '' ?>
                    </td>
                    <td class="BF-4">
                        <?= isset($hyou3[3]['BF-4']) ? htmlspecialchars($hyou3[3]['BF-4']) : '' ?>
                    </td>
                    <td class="BF-5">
                        <?= isset($hyou3[3]['BF-5']) ? htmlspecialchars($hyou3[3]['BF-5']) : '' ?>
                    </td>
                    <td class="BF-6">
                        <?= isset($hyou3[3]['BF-6']) ? htmlspecialchars($hyou3[3]['BF-6']) : '' ?>
                    </td>
                    <td class="BF-7">
                        <?= isset($hyou3[3]['BF-7']) ? htmlspecialchars($hyou3[3]['BF-7']) : '' ?>
                    </td>
                    <td class="BF-8">
                        <?= isset($hyou3[3]['BF-8']) ? htmlspecialchars($hyou3[3]['BF-8']) : '' ?>
                    </td>
                    <td class="BF-9">
                        <?= isset($hyou3[3]['BF-9']) ? htmlspecialchars($hyou3[3]['BF-9']) : '' ?>
                    </td>
                    <td class="BF-10">
                        <?= isset($hyou3[3]['BF-10']) ? htmlspecialchars($hyou3[3]['BF-10']) : '' ?>
                    </td>
                    <td class="BF-11">
                        <?= isset($hyou3[3]['BF-11']) ? htmlspecialchars($hyou3[3]['BF-11']) : '' ?>
                    </td>
                    <td class="BF-12">十二運</td>
                </tr>
                <!-- 6行目 -->
                <tr class="BG">
                    <td class="BG-1">
                        <?= isset($hyou3[4]['BG-1']) ? htmlspecialchars($hyou3[4]['BG-1']) : '' ?>
                    </td>
                    <td class="BG-2">
                        <?= isset($hyou3[4]['BG-2']) ? htmlspecialchars($hyou3[4]['BG-2']) : '' ?>
                    </td>
                    <td class="BG-3">
                        <?= isset($hyou3[4]['BG-3']) ? htmlspecialchars($hyou3[4]['BG-3']) : '' ?>
                    </td>
                    <td class="BG-4">
                        <?= isset($hyou3[4]['BG-4']) ? htmlspecialchars($hyou3[4]['BG-4']) : '' ?>
                    </td>
                    <td class="BG-5">
                        <?= isset($hyou3[4]['BG-5']) ? htmlspecialchars($hyou3[4]['BG-5']) : '' ?>
                    </td>
                    <td class="BG-6">
                        <?= isset($hyou3[4]['BG-6']) ? htmlspecialchars($hyou3[4]['BG-6']) : '' ?>
                    </td>
                    <td class="BG-7">
                        <?= isset($hyou3[4]['BG-7']) ? htmlspecialchars($hyou3[4]['BG-7']) : '' ?>
                    </td>
                    <td class="BG-8">
                        <?= isset($hyou3[4]['BG-8']) ? htmlspecialchars($hyou3[4]['BG-8']) : '' ?>
                    </td>
                    <td class="BG-9">
                        <?= isset($hyou3[4]['BG-9']) ? htmlspecialchars($hyou3[4]['BG-9']) : '' ?>
                    </td>
                    <td class="BG-10">
                        <?= isset($hyou3[4]['BG-10']) ? htmlspecialchars($hyou3[4]['BG-10']) : '' ?>
                    </td>
                    <td class="BG-11">
                        
                    </td>
                    <td class="BG-12">特殊星</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>