<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo '/tp/Public/css/bootstrap.min.css'?>" />
		<link rel="stylesheet" href="<?php echo '/tp/Public/css/bootstrap-theme.min.css'?>" />
		<link rel="stylesheet" href="<?php echo '/tp/Public/css/nivo-slider.css'?>" />
		<link rel="stylesheet" href="<?php echo '/tp/Public/css/login.css'?>" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="#"><img id="logo" src="<?='/tp/Public/img/logo.png'?>"</a>
			</div>
		</div>
		<br />
	</div>
	<div id="regedit_wrapper">
	<div class="container">
		<div id="regedit">
			<div class="panel panel-default">
				
				<div class="panel-heading">
					用户注册
				</div>
				<div class="panel-body">
				<form action="/tp/index.php/Home/Login/user_regedit" method="post" enctype="multipart/form-data" id="for1">
						<div class="form-group">
							<label>账户名</label>
							<input type="text" class="form-control" name="username" placeholder="请输入账户名...">
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" name="password" id="pwd"  placeholder="请输入密码...">
						</div>
						<div class="form-group">
							<label>再次输入密码</label>
							<input type="password" class="form-control" name="password2"  placeholder="请再次输入密码...">
							
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="请输入邮箱">
						</div>
						<div class="form-group">

							<button type="submit" class="btn btn-block btn-success">注册</button>	
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>
<script type="text/javascript" src="/tp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/tp/Public/js/jQuery-validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="/tp/Public/js/jQuery-validate/validate_zh_cn.js"></script>
<script type="text/javascript">
	
</script>
</html>