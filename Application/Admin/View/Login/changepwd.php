<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
</head>
<body>
	<h1>修改密码</h1>
	<form method="post" action="__SELF__">
		<p>
			用户名：
		</p>
		<p>
			<input type="text" name="username" value="<?=$userinfo['username']?>">
		</p>
		<p>
			 密码:
		</p>
		<p>
			<input type="password" name="password" value="">
		</p>
		<p>
			<input type="hidden" name="id" value="<?=$userinfo['id']?>">
		</p>
		<p>
			<button type="submit">提交</button>
		</p>
	</form>
</body>
</html>