
<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
</head>
<link rel="stylesheet" href="./css/style.css">
<body>

	<form action="write.php" method="post">
		<div>レストラン記録</div>
		店名: <input type="text" name="name"><br>
		場所: <input type="text" name="place"><br>
		日付: <input type="date" name="visitdate" id="visitdate"><br>
		<!-- 評価：<input type="text" name="rank" id="rank"> -->
		<div>評価: 
		<select name="rank">
		<option value="1">★</option>
		<option value="2">★★</option>
		<option value="3">★★★</option>
		</select>
		</div>
		
		<input type="submit" value="送信">
	</form>

</body>
</html>