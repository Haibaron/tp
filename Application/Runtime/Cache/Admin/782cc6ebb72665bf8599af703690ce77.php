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
  



     <base href="http://192.168.235.128/tp/">
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
                    <h2>商品展示</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Product</a>
                        </li>
                        <li class="active">
                            <strong>index</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                <a href="index.html" class="btn  pull-right">Home</a>
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
                                    
                                    <th>分类</th>
                                
                                 
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                               <?php if(is_array($level1)): $i = 0; $__LIST__ = $level1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l1): $mod = ($i % 2 );++$i;?><tr>
                                	<td><?php echo ($l1["id"]); ?></td>
                                	    <td><span class="pie"><?php echo ($l1["name"]); ?></span></td>
                                	   
                                	     <td > <a class="btn btn-success btn-sm" href="<?php echo U('Admin/Productcatalog/edit/id/'.$l1['id']);?>">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                	</tr>
                                    <?php $level2=M('product_catalog')->where('parent_id='.$l1['id'])->select() ?>   
                                    <?php if(is_array($level2)): $i = 0; $__LIST__ = $level2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l2): $mod = ($i % 2 );++$i;?><tr class="level2" id="level<?php echo ($l2["id"]); ?>">
                                        <td><?php echo ($l2["id"]); ?></td>
                                            <td ><span class="pie">└───<?php echo ($l2["name"]); ?></span></td>
                                           
                                             <td > <a class="btn btn-success btn-sm" href="<?php echo U('Admin/Productcatalog/edit/id/'.$l2['id']);?>">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                        </tr>
                                          <?php $level3=M('product_catalog')->where('parent_id='.$l2['id'])->select() ?>   
                                     <?php if(is_array($level3)): $i = 0; $__LIST__ = $level3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l3): $mod = ($i % 2 );++$i;?><tr class="level3 parentlevel<?php echo ($l2["id"]); ?>">
                                         <td><?php echo ($l3["id"]); ?></td>
                                             <td><span class="pie">└───┴───<?php echo ($l3["name"]); ?></span></td>
                                            
                                              <td > <a class="btn btn-success btn-sm" href="<?php echo U('Admin/Productcatalog/edit/id/'.$l3['id']);?>">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                         </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>   
                                    
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
   </div>
   <style type="text/css">
       .level3{
        display: none;
       }
   </style>
   <script type="text/javascript">
       $(function(){
          $('.level2 td').click(function(){
           var id=$(this).parents('tr').attr('id');
           var cls=".parent"+id;
        // console.log(id);
          console.log(cls);
         //return false;
           $(cls).toggle('slow');
        
          }) 
       });
   </script>
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