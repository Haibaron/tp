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
                    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>商品编辑</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Product</a>
                        </li>
                        <li class="active">
                            <strong>edit</strong>
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

                           <form action="<?=U('Admin/Product/do_edit')?>" method="post" enctype="multipart/form-data"      class="form-horizontal">

                           <div class="form-group">
                               <label class="col-sm-2 control-label">商品名称:</label>
                               <div class="col-sm-8"><input type="text" name="title" value="<?php echo ($data["title"]); ?>" class="form-control">
                               </div>
                           </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品分类:</label>
                                 <div class="col-sm-2">
                                 <select name='product_id'  id="level1" class="form-control" >
                                      <option >请选择分类</option>
                                     <?php if(is_array($level1_data)): $i = 0; $__LIST__ = $level1_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($l1["id"]); ?>"<?php if($level1==$l1['id']){?> selected='selected' <?php } ?>>
                                       
                                            <?php echo ($l1["name"]); ?>
                                        </option><?php endforeach; endif; else: echo "" ;endif; ?>   
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level2"  class="form-control">
                                  <input type="hidden" name="level2" id="level2_default" value="<?php echo ($level2); ?>">
                                    
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level3" class="form-control">
                                  <input type="hidden" name="level3" id="level3_default" value="<?php echo ($level3); ?>">
                                      <option >请选择分类</option>
                                 </select>  
                                 </div>
                                 
                             </div>
                            
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">价格:</label>
                                 <div class="col-sm-2"><input type="text" name="price" value="<?php echo ($data["price"]); ?>" class="form-control"></div>
                                 <label class="col-sm-2 control-label">库存:</label>
                                 <div class="col-sm-2"><input type="text" name="stock" value="<?php echo ($data["stock"]); ?>" class="form-control"></div>   
                             </div>
                             <div class="form-group">
                                 
                                 <label class="col-sm-2 control-label">商品图片:</label>
                                 <div class="col-sm-4"><input type="text" value="<?php echo ($data["img"]); ?>" class="form-control" name="img" id="img" />
                                 </div>
                                  <div class="col-sm-2"><a id="upload"class="btn btn-primary">上传</a>
                                 </div>
                                  
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品描述:</label>
                                 <div class="col-sm-8"><input type="text" name="desc" value="<?php echo ($data["desc"]); ?>" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品内容:</label>
                                 <div class="col-sm-8"><textarea name="content" id="content" rows="8"  class="form-control"><?php echo ($data["content"]); ?></textarea></div>
                                 
                             </div>
                             <div class="form-group ">
                             <div class="col-sm-10">
                             <input type="hidden" name="id" value="<?php echo ($p["id"]); ?>">
                                <button class="btn btn-primary  pull-right">提交商品</button>
                                </div>
                             </div>
                        
                            </form>

                        </div>
                    </div>
   </div>

   <script charset="utf-8" src="/tp/Public/Admin/js/editor/kindeditor-all.js"></script>
   <script charset="utf-8" src="/tp/Public/Admin/js/editor/lang/zh-CN.js"></script>
   <script charset="utf-8" src="/tp/Public/Admin/js/jquery.upload.js"></script>
   


   <script type="text/javascript"> 

         editor= KindEditor.create('#content',{ 
                uploadJson:'<?php echo U('');?>',
                allowFlashUpload:false,
                formatUploadUrl:false,
              });
        

            function levelchange1(){
                    var id=$('#level1').val();
                  //console.log($(this).val());
                   $.get("<?php echo U('Admin/Product/getcatalog');?>",{id:id},function(data){
                      var str="";
                      var level2_default=$('#level2_default').val();
                      console.log(level2_default);
                      
                       for (var i = 0;i<data.length;i++) {
                        
                        isSelected = data[i].id==level2_default?'selected="selected"' :"";
                        str+='<option '+isSelected+' value="'+data[i].id+'">'+data[i].name+'</option>';
                            console.log(data[i].id);
                       }
                    
                       $('#level2').html(str);
                       levelchange2();
                   });
                }

                function levelchange2(){
                    var id=$('#level2').val();
                //   console.log($(this).val());
                 var level3_default=$('#level3_default').val();
                     $.get("<?php echo U('Admin/Product/getcatalog');?>",{id:id},function(data){
                      var str="";
                    
                       for (var i = 0;i<data.length;i++) {
                           isSelected = data[i].id==level3_default?'selected="selected"' :"";
                        str+='<option '+isSelected+' value="'+data[i].id+'">'+data[i].name+'</option>'
                            // console.log(data[i]);
                       }
                       $('#level3').html(str);
                   });
                }

                $('#level1').change(levelchange1);
                $('#level2').change(levelchange2);
   levelchange1();


   $("#upload").click(function(){
    $.upload({
           url: '<?php echo U("admin/Product/do_edit");?>', 
           fileName: 'file', 
           dataType: 'text',
           onSend: function() {
               return true;
           },
           onComplate: function(data) {
            if(data.indexOf('uploads')>=0){
            $("#img").val(data);
            $("#preview").html('<img style="height:80px;" src="<?php U()?>'+data+'" />')
           }else{
            alert(data);
                }
           }
    });
   })
      

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