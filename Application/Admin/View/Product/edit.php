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

                           <form action="<?php U('Admin/Product/do_edit')?>" method="post" enctype="multipart/form-data"      class="form-horizontal">

                           <div class="form-group">
                               <label class="col-sm-2 control-label">商品名称:</label>
                               <div class="col-sm-8"><input type="text" name="title" value="{$data.title}" class="form-control">
                               </div>
                           </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品分类:</label>
                                 <div class="col-sm-2">
                                 <select name='product_id'  id="level1" class="form-control" >
                                      <option >请选择分类</option>
                                     <volist name="level1_data" id="l1">

                                        <option value="{$l1.id}"<?php if($level1==$l1['id']){?> selected='selected' <?php } ?>>
                                       
                                            {$l1.name}
                                        </option>
                                     </volist>   
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level2"  class="form-control">
                                  <input type="hidden" name="level2" id="level2_default" value="{$level2}">
                                    
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level3" class="form-control">
                                  <input type="hidden" name="level3" id="level3_default" value="{$level3}">
                                      <option >请选择分类</option>
                                 </select>  
                                 </div>
                                 
                             </div>
                            
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">价格:</label>
                                 <div class="col-sm-2"><input type="text" name="price" value="{$data.price}" class="form-control"></div>
                                 <label class="col-sm-2 control-label">库存:</label>
                                 <div class="col-sm-2"><input type="text" name="stock" value="{$data.stock}" class="form-control"></div>   
                             </div>
                             <div class="form-group">
                                 
                                 <label class="col-sm-2 control-label">商品图片:</label>
                                 <div class="col-sm-4"><input type="text" value="{$data.img}" class="form-control" name="img" id="img" />
                                 </div>
                                  <div class="col-sm-2"><a id="upload"class="btn btn-primary">上传</a>
                                 </div>
                                  
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品描述:</label>
                                 <div class="col-sm-8"><input type="text" name="desc" value="{$data.desc}" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品内容:</label>
                                 <div class="col-sm-8"><textarea name="content" id="content" rows="8"  class="form-control">{$data.content}</textarea></div>
                                 
                             </div>
                             <div class="form-group ">
                             <div class="col-sm-10">
                             <input type="hidden" name="id" value="{$p.id}">
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
                uploadJson:'{:U('')}',
                allowFlashUpload:false,
                formatUploadUrl:false,
              });
        

            function levelchange1(){
                    var id=$('#level1').val();
                  //console.log($(this).val());
                   $.get("{:U('Admin/Product/getcatalog')}",{id:id},function(data){
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
                     $.get("{:U('Admin/Product/getcatalog')}",{id:id},function(data){
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
           url: '{:U("admin/Product/do_edit")}', 
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