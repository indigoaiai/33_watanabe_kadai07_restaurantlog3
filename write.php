
<?php
// データをPOSTで受け取る
$name = $_POST['name'];
$place = $_POST['place'];
$visitdate = $_POST['visitdate'];
if(isset($_POST["rank"])) {
    // セレクトボックスで選択された値を受け取る
    $rank = $_POST["rank"];
    // 受け取った値を画面に出力
}

// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
};
// test

// 日時を取得
$time = date('Y/m/d');
//データを変数にまとめる
// $array = array($name , $mail , $birthday) ;
$array = $time .','. $name .','.  $place .','. $visitdate.','.$rank;
// ファイルに書き込み
$file = fopen('data/data.cvs', 'a');

fwrite($file, $array . "\n");
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
<link rel="stylesheet" href="./css/style2.css">
<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>