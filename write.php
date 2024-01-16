<?php
include("funcs.php");

// postページでpostされたデータ
$name = $_POST["name"];
$mail = $_POST["mail"];
$naiyou = $_POST["naiyou"];

//文字列作成
$str = date("Y-m-d H:i:s") . "," . $name . "," . $mail . "," . $naiyou;
//File書き込み
$file = fopen("data/data.txt", "a");    // ファイル読み込み
fwrite($file, $str . "\n");
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>書き込みしました。</title>
</head>

<body>
    <h2>書き込みしました。</h2>
    <h2>ありがとうございます。</h2>
    <h2><a href="index.php">戻る</a></h2><br><br>
    <h2>管理者ページ</h2>
    <h2><a href="read.php">集計データ</a></h2>
</body>

</html>

<!-- txt格納が改行が？
dataとして蓄積するには一旦カンマ区切り行にする必要？
include funcsはして、post_confirmにあったh func=specialcharaは -->
