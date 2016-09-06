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

                           <form action="<?=U('Admin/Product/do_add')?>" method="post" enctype="multipart/form-data"      class="form-horizontal">
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品分类:</label>
                                 <div class="col-sm-2">
                                 <select name='product_id'  id="level1" class="form-control" >
                                      <option >请选择分类</option>
                                     <volist name="level1" id="l1">
                                        <option value="{$l1.id}">
                                            {$l1.name}
                                        </option>
                                     </volist>   
                                 </select>  
                                 </div>
                                 <div class="col-sm-2"  >
                                 <select name='product_id' id="level2" class="form-control">
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
                                <input id="uploadFile" placeholder="Choose File" class="form-control" disabled="disabled" /> 
                                
                              </div>
                                <div class="fileUpload btn btn-primary">
                                    <span>Upload</span>
                                    <input id="uploadBtn" type="file" class="col-md-4 upload" />
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
           $.get("{:U('Admin/Product/getcatalog')}",{id:id},function(data){
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
             $.get("{:U('Admin/Product/getcatalog')}",{id:id},function(data){
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