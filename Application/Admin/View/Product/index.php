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
                                    <th>编号</th>
                                    <th>图片</th>
                                    <th>名称</th>
                                    <th>分类</th>
                                    <th>价格</th>
                                 
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                               <volist name="products" id="p">
                                	<tr>
                                     <td>{$p.id}</td>
                                	<td><a href="__ROOT__/{$p.img}" data-lightbox="light" data-title="{$p.title}" ><img style="height: 50px;" src="__ROOT__/{$p.img}"></a></td>
                                	    <td><span class="pie">{$p.title}</span></td>
                                	     <?php $data=M('Product_catalog')->where('id='.$p['id'])->find()?>
                                         <td>{$data.name}</td>
                                	    <td>￥:{$p.price}</td>
                                	  
                                	     <td > <a class="btn btn-success btn-sm" href="{:U('Admin/Product/edit/id/'.$p['id'])}">编辑</a><a class="btn btn-primary btn-sm" href="{:U('Admin/Product/del/id/'.$p['id'])}" onclick="return confirm('您确定要删除么？？')">删除</a></td>
                                	</tr>
                                </volist>                        
                                </tbody>
                            </table>
                           {$page}
                        </div>
                    </div>
   </div>
    <script  src="__PUBLIC__/Admin/lightbox/js/lightbox.js"></script>