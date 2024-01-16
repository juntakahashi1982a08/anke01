<html>
<title>集計データ</title>
<body>
  <h2>集計データ</h2>
  <table border="1">

    <tr>
      <th>時間</th>
      <th>名前</th>
      <th>メール</th>
      <th>内容</th>
    </tr>

    <?php

    $file = fopen("data/data.txt", "r");

    $filedata = '';

    // ファイル内容を1行ずつ読み込んで出力、繰り返す
    while ($str = fgets($file)) {
      // 要素に分割
      $exstr = explode(",", $str);
      // 表に出力
      $filedata = $filedata .
        '<tr><td>' . $exstr[0] . '</td>
        <td>' . $exstr[1] . '</td>
        <td>' . $exstr[2] . '</td>
        <td>' . $exstr[3] . '</td></tr>';
    }

    // htmlに表示
    echo $filedata;

    fclose($file);

    ?>

  </table>

</body>

</html>

<!-- file関数で配列化？
$hairetsu = "data/data.txt";
var_dump(file($hairetsu)); -->
<!-- var_dump($file);
echo nl2br($str);
var_dump(explode(",", $str)); -->
<!-- array_column($str, 'date') -->
<!-- 『explode不要？カンマ区切りの各コラムをそのまま取得？でもvar_dumpじゃだめ OR $nameなどをそのまま表示？』 -->
<!-- <td><?php echo substr($str, 0, 16); ?> </td> -->
<!-- <tr>
        <td><?php echo $str[0]; ?> </td>
        <td><?php echo $str[1]; ?> </td>
        <td><?php echo $str[2]; ?> </td>
        <td><?php echo $str[3]; ?> </td>
  </tr> -->
<!-- <tr>
  <td><?php echo $date; ?> </td>
  <td><?php echo $name; ?> </td>
  <td><?php echo $mail; ?> </td>
  <td><?php echo $naiyou; ?> </td>
 </tr> -->
<!-- <tr>
  <td><?php echo ($str['date']); ?> </td>
  <td><?php echo ($str['name']); ?> </td>
  <td><?php echo ($str['naiyou']); ?> </td>
 </tr> -->
<!-- csvへの書き込み、読み込み？ -->
<!-- 集計（goodの合計） -->