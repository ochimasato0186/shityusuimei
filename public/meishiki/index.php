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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="AC-12">干<br>支</td>
                </tr>
                <!-- 4行目 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="AD-12">通<br>運<br>星</td>
                </tr>
                <!-- 5行目 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="AE-12">十<br>二<br>運</td>
                </tr>
                <!-- 6行目 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                    <td>歳</td>
                </tr>
                <!-- 3行目 -->
                <tr class="BC">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="BC-12">干支<br>(納音)</td>
                </tr>
                <!-- 4行目 -->
                <tr class="BE">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="BE-12">通変星</td>
                </tr>
                <!-- 5行目 -->
                <tr class="BF">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="BF-12">十二運</td>
                </tr>
                <!-- 6行目 -->
                <tr class="BG">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="BG-12">特殊星</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>