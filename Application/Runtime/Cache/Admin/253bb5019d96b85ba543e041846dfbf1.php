<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
</head>
<body>
	<h1>找回密码</h1>
	<form method="post" action="/tpshop2/index.php/Admin/Login/find"> 
		<p>邮箱:</p>
		<p><input type="text" name="email"><span>*请输如注册时的邮箱 </span></p>
		<button type="submit">提交</button>
	</form>
</body>
</html>