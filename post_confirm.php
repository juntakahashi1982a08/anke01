<?php
include("funcs.php");

$name = $_POST["name"];
$mail = $_POST["mail"];
$naiyou = $_POST["naiyou"];
?>

<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?= h($name) ?>
EMAIL：<?= h($mail) ?>
内容：<?= h($naiyou) ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>