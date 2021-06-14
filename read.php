<?php

// ファイルを開く
$rank1 = null;

$file = fopen('data/data.cvs','r');
// $lines = file($array);
// echo $lines;
// テーブルタグを作成し、テーブルヘッダーで見出しを作る
echo '<table border="1">
      <tr>
      <th>記入日</th>
      <th>店名</th>
      <th>場所</th>
      <th>行った日</th>
      <th>評価</th>
      </tr>';
// ファイル内容を1行ずつ読み込んで出力
// echo $array;
// while($array = fgets($file)){
while($array = fgetcsv($file)){
    // echo nl2br($array);

    // echo $array[3];
if($array[4] == 1){
    $rank1 = "★";
}else if($array[4] == 2){
    $rank1 = "★★";
}else if($array[4] == 3){
    $rank1 = "★★★";
};
// echo $rank1;
    // echo $array[1];
// 
// テーブルセルに配列の値を格納
  echo '<tr>';
  echo '<td>'.$array[0].'</td>';
  echo '<td>'.$array[1].'</td>';
  echo '<td>'.$array[2].'</td>';
  echo '<td>'.$array[3].'</td>';
  echo '<td>'.$rank1.'</td>';
  echo '</tr>';
// 
}
// 
// テーブルの閉じタグ
echo '</table>';
// 
// ファイルを閉じる

fclose($file);
?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<link rel="stylesheet" href="./css/style3.css">
<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>