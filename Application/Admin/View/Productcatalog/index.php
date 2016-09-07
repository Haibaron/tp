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
                               <volist name="level1" id="l1">
                                	<tr>
                                	<td>{$l1.id}</td>
                                	    <td><span class="pie">{$l1.name}</span></td>
                                	   
                                	     <td > <a class="btn btn-success btn-sm" href="{:U('Admin/Productcatalog/edit/id/'.$l1['id'])}">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                	</tr>
                                    <?php $level2=M('product_catalog')->where('parent_id='.$l1['id'])->select()     ?>   
                                    <volist name="level2" id="l2">
                                        <tr class="level2" id="level{$l2.id}">
                                        <td>{$l2.id}</td>
                                            <td ><span class="pie">└───{$l2.name}</span></td>
                                           
                                             <td > <a class="btn btn-success btn-sm" href="{:U('Admin/Productcatalog/edit/id/'.$l2['id'])}">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                        </tr>
                                          <?php $level3=M('product_catalog')->where('parent_id='.$l2['id'])->select()     ?>   
                                     <volist name="level3" id="l3">
                                         <tr class="level3 parentlevel{$l2.id}">
                                         <td>{$l3.id}</td>
                                             <td><span class="pie">└───┴───{$l3.name}</span></td>
                                            
                                              <td > <a class="btn btn-success btn-sm" href="{:U('Admin/Productcatalog/edit/id/'.$l3['id'])}">编辑</a><a class="btn btn-primary btn-sm" href="">删除</a></td>
                                         </tr>
                                      </volist>              
                                     </volist>             
                                   
                                </volist>   
                                    
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