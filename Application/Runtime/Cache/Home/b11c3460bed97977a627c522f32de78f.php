<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/bootstrap.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/bootstrap-theme.min.css'?>" />
</head>
<body>
	<h1>找回密码</h1>
	<form method="post" action="/TP/index.php/Home/Login/find"> 
		<p>邮箱:</p>
		<p><input type="text" name="email"><span>*请输如注册时的邮箱 </span></p>
		<p>电话号码:<span>*请输如注册时的号码 </span></p>
		<p><input type="text" name="telephone" id="telephone"><button type="button" id="btn" class="btn btn-success" >获取验证码</button></p>
		<button type="submit">提交</button>
	</form>
</body>
</html>
<script type="text/javascript" src="/TP/Public/js/jquery.js"></script>
<script type="text/javascript">
	$('#btn').click(function(){
		var telephone=$('#telephone').val();
		telephone=$.trim(telephone);

		$.get("/TP/message/message.php", {'telephone':telephone}, function(data){
             if (data=='ok') {
             	alert('发送成功')
             }else{
             	alert('发送失败')
             }
		})
	})
</script>