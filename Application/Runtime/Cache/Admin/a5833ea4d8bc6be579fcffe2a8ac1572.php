<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>后台管理</title>
     <link href="/TP/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TP/Public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="/TP/Public/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="/TP/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/TP/Public/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/TP/Public/Admin/lightbox/css/lightbox.css">
       <script src="/TP/Public/admin/js/jquery-2.1.1.js"></script>
  <script src="/TP/Public/admin/js/bootstrap.min.js"></script>
  <script src="/TP/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="/TP/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  
<!--   Custom and plugin javascript -->
  <script src="/TP/Public/admin/js/inspinia.js"></script>
  <script src="/TP/Public/admin/js/plugins/pace/pace.min.js"></script>
<!--jQuery UI -->
  <script src="/TP/Public/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script> 
  



     <base href="http://localhost/tp/">
</head>
<body>
    <div id="wrapper">
       <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center"> <span>
                        <img alt="image" class="img-circle" src="/TP/Public/admin/img/profile_small.jpg"  />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo session("admin_name");?></strong>

                        </span></span>  </a>
                 
                </div>
                <div class="logo-element">
                   <?php echo session("admin_name");?>
                </div>


            </li>
            <li <?php if(CONTROLLER_NAME == 'Order'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-newspaper-o"></i> <span class="nav-label">订单管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="">订单展示</a>
                    </li>
                        
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Productcatalog'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-align-justify"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?=U('Productcatalog/index')?>">分类展示</a></li>
                     <li><a href="<?=U('Productcatalog/add')?>">分类添加</a></li>
                    
                </ul>
            </li >
            <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-apple"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?=U('Product/index')?>">商品展示</a></li>
                    <li><a href="<?=U('Product/add')?>">商品添加</a></li>
                  
                    
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'User'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-group"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?=U('User/index')?>">用户列表</a></li>
                    
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'web'): ?>class="active"<?php endif; ?>>
                <a href="<?=U('Product/index')?>"> <i class="fa fa-wrench"></i> <span class="nav-label">网站设置</span> </a>
            </li>
         
        </ul>

    </div>
</nav>
        <!--right-->
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
           <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " ><i class="fa fa-bars"></i> </a>
    
</div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">欢迎来到你的月亮我的心后台管理</span>
        </li>

        <li>
            <a href="<?=U('Admin/AuthLogin/login_out') ?>">
                <i class="fa fa-sign-out"></i> 退出
            </a>
        </li>
        <li>
            <a class="right-sidebar-toggle">
                <i class="fa fa-tasks"></i>
            </a>
        </li>
    </ul>
</nav>
            </div>
             <!--中间内容 -->
            <div class="wrapper wrapper-content">
                 <!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/bootstrap.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/bootstrap-theme.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/nivo-slider.css'?>" />
	<link rel="stylesheet" href="<?php echo '/TP/Public/css/login.css'?>" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="#"><img id="logo" src="<?='/TP/Public/img/logo.png'?>" /></a>
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
						<div style="float: left">	<img  src="/TP/index.php/Admin/Login/vrifyimg" onclick="this.src='/TP/index.php/Admin/Login/vrifyimg/'+Math.random()"></div>
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
<script type="text/javascript" src="/TP/Public/js/jquery.js"></script>
<script type="text/javascript" src="/TP/Public/js/jQuery-validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="/TP/Public/js/jQuery-validate/validate_zh_cn.js"></script>
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
            </div>
            <div class="footer">
    <div class="pull-right">
       <strong>欢迎光临</strong> 
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2016-2017
    </div>
</div>
        </div>

    </div>
 

</body>
</html>