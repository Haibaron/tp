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
                  <style type="text/css">.fileUpload {
  position: relative;
  overflow: hidden;
  margin: 0px;
}

.fileUpload input.upload {  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
#uploadBtn{
  width: 70px;
  }</style>
   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>商品添加</h2>
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

                           <form action="<?= U('Admin/Product/do_add')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品分类:</label>
                                 <div class="col-sm-2">
                                 <select name='product_id'  id="level1" class="form-control" >
                                      <option >请选择分类</option>
                                     <?php if(is_array($level1)): $i = 0; $__LIST__ = $level1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($l1["id"]); ?>">
                                            <?php echo ($l1["name"]); ?>
                                        </option><?php endforeach; endif; else: echo "" ;endif; ?>   
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='cata_id' id="level2" class="form-control">
                                      <option  >请选择分类</option>
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level3" class="form-control">
                                      <option >请选择分类</option>
                                 </select>  
                                 </div>
                                 
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品名称:</label>
                                 <div class="col-sm-8"><input type="text" name="title" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">价格:</label>
                                 <div class="col-sm-2"><input type="text" name="price" class="form-control"></div>
                                 <label class="col-sm-2 control-label">库存:</label>
                                 <div class="col-sm-2"><input type="text" name="" class="form-control"></div>   
                             </div>
                             <div class="form-group  ">
                            <label class="col-sm-2 control-label">商品图片:</label>
                             <div class="col-md-4 ">
                                <input id="uploadFile" type="text" placeholder="Choose File" class="form-control" disabled="disabled" /> 
                                
                              </div>
                                <div class="fileUpload btn btn-primary">
                                    <span>Upload</span>
                                    <input id="uploadBtn" type="file" name="img" class="col-md-4 upload" />
                                </div>
                               
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品描述:</label>
                                 <div class="col-sm-8"><input type="text" name="desc" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品内容:</label>
                                 <div class="col-sm-8"><textarea name="content" id="content" rows="8" class="form-control"></textarea></div>
                                 
                             </div>
                             <div class="form-group ">
                             <div class="col-sm-10">
                                <button class="btn btn-primary  pull-right">提交商品</button>
                                </div>
                             </div>
                        
                            </form>

                        </div>
                    </div>
   </div>

   <script charset="utf-8" src="/tp/Public/Admin/js/editor/kindeditor-all.js"></script>
   <script charset="utf-8" src="/tp/Public/Admin/js/editor/lang/zh-CN.js"></script>

   <script type="text/javascript"> 
        $('#level1').change(function(){
            var id=$(this).val();
          // console.log($(this).val());
           $.get("<?php echo U('Admin/Product/getcatalog');?>",{id:id},function(data){
              var str="";
               for (var i = 0;i<data.length;i++) {
                str+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                  //  console.log(data[i]);
               }
            
               $('#level2').html(str);
           })
        })

        $('#level2').change(function(){
            var id=$(this).val();
           console.log($(this).val());
             $.get("<?php echo U('Admin/Product/getcatalog');?>",{id:id},function(data){
              var str="";
               for (var i = 0;i<data.length;i++) {
                str+='<option value="'+data[i].id+'">'+data[i].name+'</option>'
                    console.log(data[i]);
               }
               $('#level3').html(str);
           })
        })
    document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

        KindEditor.ready(function(K) {
                K.create('#content');
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