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
   <script  src="/tp/Public/Admin/lightbox/js/lightbox.js"></script>



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
                    <li><a href="">用户列表</a></li>
                    
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
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    
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
                 
	<div class="row wrapper border-bottom white-bg page-heading">
	             <div class="col-lg-10">
	                 <h2>商品展示</h2>
	                 <ol class="breadcrumb">
	                     <li>
	                         <a href="index.html">Home</a>
	                     </li>
	                     <li>
	                         <a>Product</a>
	                     </li>
	                     <li class="active">
	                         <strong>Form</strong>
	                     </li>
	                 </ol>
	             </div>
	             <div class="col-lg-2">
	           
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

	                        <form  method="post" action="<?=U('Admin/Productcatalog/do_edit')?>"  class="form-horizontal">
                              <input type="hidden" name="id" value="<?php echo ($thiscatalog['id']); ?>">
	                          <div class="form-group">
                                 <label class="col-sm-2 control-label">分类名称:</label>
                                 <div class="col-sm-8"><input type="text" name="name" value="<?php echo ($thiscatalog['name']); ?>" class="form-control">
                                 </div>
                             </div>
	                          <div class="form-group">
	                              <label class="col-sm-2 control-label">分类选项:</label>
	                              <div class="col-sm-8">
	                              	<select name="parent_id">
	                              	 <option value="0">一级分类</option>
	                              	<?php if(is_array($level1)): $i = 0; $__LIST__ = $level1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l1): $mod = ($i % 2 );++$i;?><option <?php if($l1["id"] == $thiscatalog['parent_id'] ): ?>selected="selected"<?php endif; ?> value="<?php echo ($l1["id"]); ?>"><?php echo ($l1["name"]); ?></option>
	                              	   <?php $level2=M('product_catalog')->where('parent_id='.$l1['id'])->select() ?>   
	                              	   <?php if(is_array($level2)): $i = 0; $__LIST__ = $level2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l2): $mod = ($i % 2 );++$i;?><option <?php if($l2["id"] == $thiscatalog['parent_id'] ): ?>selected="selected"<?php endif; ?> value="<?php echo ($l2["id"]); ?>">└───<?php echo ($l2["name"]); ?></option>
	                              	      
	                              	         <?php $level3=M('product_catalog')->where('parent_id='.$l2['id'])->select() ?>   
			                              	    <?php if(is_array($level3)): $i = 0; $__LIST__ = $level3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($l3["id"]); ?>">└───┴───<?php echo ($l3["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>              
	                              		
	                              	</select>
	                              </div>
	                          </div>
	                        
	                          <div class="form-group ">
	                          <div class="col-sm-10">
	                             <button class="btn btn-primary  pull-right">提交分类</button>
	                             </div>
	                          </div>
	                     
	                         </form>

	                     </div>
	                 </div>
	</div>
</body>
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