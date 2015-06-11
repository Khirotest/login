<html>
<head>
	<meta charset="utf-8">
	<title>ユーザ登録画面</title>
</head>
<body>
	<form name="user_form" method="post" action="">
		<table width="100%" border="1">
		<tr>
			<th colspan="2" scope="row">ユーザー登録</th>
		</tr>
		<tr>
			<th scope="row">ユーザー名</th>
			<td><label for="username"></label>
			<input type="text" name="username" id="username"></td>
		</tr>
		<tr>
			<th scope="row">メールアドレス</th>
			<td><label for="email"></label>
			<input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<th scope="row">パスワード</th>
			<td><label for="password"></label>
			<input type="password" name="password" id="password"></td>
		</tr>
		<tr>
			<th colspan="2" scope="row"><input type="submit" name="button" id="button" value="登録"></th>
		</tr>
	</table>
</form>
</body>
</html>
