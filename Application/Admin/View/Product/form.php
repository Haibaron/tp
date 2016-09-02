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

                           <form action="<?=U('Product/do_add')?>" method="post" class="form-horizontal">
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
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">商品图片:</label>
                                 <div class="col-sm-8"><input type="file" name="phone">
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

   <script charset="utf-8" src="/tp/Public/Admin/js/editor/kindeditor.js"></script>
   <script charset="utf-8" src="/tp/Public/Admin/js/editor/lang/zh_CN.js"></script>

   <script type="text/javascript"> 
        KindEditor.ready(function(K) {
                K.create('#content');
            });
   </script>
   </html>