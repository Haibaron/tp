<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo '/tpshop2/Public/css/bootstrap.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '/tpshop2/Public/css/bootstrap-theme.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '/tpshop2/Public/css/nivo-slider.css'?>" />
	<link rel="stylesheet" href="<?php echo '/tpshop2/Public/css/login.css'?>" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="#"><img id="logo" src="<?='/tpshop2/Public/img/logo.png'?>" /></a>
			</div>
		</div>
		<br />
	</div>
	<div id="login_wrapper">
	<div class="container">
		<div id="login">
			<div class="panel panel-default" >
				<div class="panel-heading" ">
					欢迎登录
				</div>
				<div class="panel-body">
					<form method="post" action="" id="for1">
						<div class="form-group">
							<label>账户名</label>
							<input type="text" class="form-control" name="username" value="" placeholder="请输入账户名...">
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" name="password" value="" placeholder="请输入密码...">
							
						</div>
						<div><label>验证码</label></div>
						<div style="float: left">

							<input  type="text" class="form-control" style="width:115px;" name="captcha" value="" placeholder="请输入验证码...">
						</div>
						<div style="float: left">	<img  src="/tpshop2/index.php/Admin/Login/vrifyimg" onclick="this.src='/tpshop2/index.php/Admin/Login/vrifyimg/'+Math.random()"></div>
						<div class="form-group">
							<button type="sub method="post" action=""mit" class="btn btn-block btn-danger">登录</button>
							<a  type="sub method="post" href="<?php echo U('Login/user_regedit')?>" class="btn btn-block btn-success">注册</a>	
						</div>
                  
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>
<script type="text/javascript" src="/tpshop2/Public/js/jquery.js"></script>
<script type="text/javascript" src="/tpshop2/Public/js/jQuery-validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="/tpshop2/Public/js/jQuery-validate/validate_zh_cn.js"></script>
<script type="text/javascript">
	$("#for1").validate({
		rules:{
			username:{
				required:true,
				rangelength:[3,10],
				
					},

			password:{
				required:true,
				rangelength:[3,10]
			},
			
		}

		});
</script>
</html>