<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap.min.css'?>" />
		<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap-theme.min.css'?>" />
		<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/nivo-slider.css'?>" />
		<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/login.css'?>" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="#"><img id="logo" src="<?='__PUBLIC__/img/logo.png'?>"</a>
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
				<form action="__SELF__" method="post" enctype="multipart/form-data" id="for1">
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
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jQuery-validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jQuery-validate/validate_zh_cn.js"></script>
<script type="text/javascript">
	
</script>
</html>