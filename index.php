<html>

<head>
	<meta charset="utf-8">
	<title>アンケートPOSTページ</title>
	<style>
#text{
    width: 170px;
	height: 100px;
}
</style></head>

<body>
	<h2>アンケート</h2>
	<form action="write.php" method="post">
		<table>
			<tr>
				<td>お名前</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>問い合わせ内容　　　</td>
				<td><input id="text" type="text" name="naiyou"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="送信">
	</form>
	<!-- jpgraph, GD ライブラリ, m MySQL -->
</body>

</html>