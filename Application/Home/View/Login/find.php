<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
	<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap-theme.min.css'?>" />
</head>
<body>
	<h1>找回密码</h1>
	<form method="post" action="__SELF__"> 
		<p>邮箱:</p>
		<p><input type="text" name="email"><span>*请输如注册时的邮箱 </span></p>
		<p>电话号码:<span>*请输如注册时的号码 </span></p>
		<p><input type="text" name="telephone" id="telephone"><button type="button" id="btn" class="btn btn-success" >获取验证码</button></p>
		<button type="submit">提交</button>
	</form>
</body>
</html>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
	$('#btn').click(function(){
		var telephone=$('#telephone').val();
		telephone=$.trim(telephone);

		$.get("__ROOT__/Message/message.php", {'telephone':telephone}, function(data){
			debugger;
             if (data=='ok') {
             	alert('发送成功');
             }else{
             	alert('发送失败');
             }
              /* console.log(data);
             return false;*/
		})
	})
</script>
