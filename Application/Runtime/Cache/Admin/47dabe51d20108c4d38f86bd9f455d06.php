<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>后台管理</title>
     <link href="/tp/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tp/Public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="/tp/Public/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="/tp/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/tp/Public/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/tp/Public/Admin/lightbox/css/lightbox.css">
       <script src="/tp/Public/admin/js/jquery-2.1.1.js"></script>
  <script src="/tp/Public/admin/js/bootstrap.min.js"></script>
  <script src="/tp/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="/tp/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  
<!--   Custom and plugin javascript -->
  <script src="/tp/Public/admin/js/inspinia.js"></script>
  <script src="/tp/Public/admin/js/plugins/pace/pace.min.js"></script>
<!--jQuery UI -->
  <script src="/tp/Public/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script> 
  



     <base href="http://localhost/tp/">
</head>
<body>
    <div id="wrapper">
       <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center"> <span>
                        <img alt="image" class="img-circle" src="/tp/Public/admin/img/profile_small.jpg"  />
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
                    <li><a href="<?php echo U('Admin/Order/index');?>">订单展示</a>
                    </li>
                        
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'Productcatalog'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-align-justify"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= U('Admin/Productcatalog/index')?>">分类展示</a></li>
                     <li><a href="<?= U('Admin/Productcatalog/add')?>">分类添加</a></li>
                    
                </ul>
            </li >
            <li <?php if(CONTROLLER_NAME == 'Product'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-apple"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= U('Admin/Product/index')?>">商品展示</a></li>
                    <li><a href="<?= U('Admin/Product/add')?>">商品添加</a></li>
                  
                    
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'User'): ?>class="active"<?php endif; ?>>
                <a><i class="fa fa-group"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= U('Admin/User/index')?>">用户列表</a></li>
                    
                </ul>
            </li>
            <li <?php if(CONTROLLER_NAME == 'web'): ?>class="active"<?php endif; ?>>
                <a href="<?= U('Admin/Product/index')?>"> <i class="fa fa-wrench"></i> <span class="nav-label">网站设置</span> </a>
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
            <a href="<?= U('Admin/AuthLogin/login_out') ?>">
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
                    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>用户列表</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Admin</a>
                        </li>
                        <li>
                            <a>User</a>
                        </li>
                        <li class="active">
                            <strong>index</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                <a href="index.html" class="btn  pull-right">User</a>
                </div>
            </div>

   <div class="wrapper wrapper-content">
         
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-hover" width="800px">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>用户</th>
                                    <th>邮箱地址</th>
                                    <th>创建时间</th>
                                    <th>是否激活</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                               <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><tr>
                                	<td><?php echo ($p["id"]); ?></td>
                                	    <td><span class="pie"><?php echo ($p["username"]); ?></span></td>
                                      
                                	   <td><span class="pie"><?php echo ($p["email"]); ?></span></td>
                                	 
                                        <td><span class="pie"><?php echo date('Y-m-d H:i:s',$p['create_time'])?></span></td>
                                          <td><?php if($p["actived"] == 1): ?><button class="btn btn-primary btn-xs">已激活 </button><?php else: ?>未激活<?php endif; ?></td>
                                          <td><span class="pie"><?php echo (user_stauts($p["stauts"])); ?></span></td>
                                	     <td > 
                                          <?php if($p["stauts"] == '-1'): ?><a class="btn btn-success btn-sm" href="<?php echo U('Admin/User/enable/id/'.$p['id']);?>">启用</a>
                                          <?php else: ?> 
                                               <a class="btn btn-success btn-sm" href="<?php echo U('Admin/User/disable/id/'.$p['id']);?>">禁用</a><?php endif; ?> 
                                           <a class="btn btn-primary btn-sm" href="">删除</a>
                                           </td>
                                	</tr><?php endforeach; endif; else: echo "" ;endif; ?>                        
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
   </div>
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