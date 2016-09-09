
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

	                        <form  method="post" action="<?= U('Admin/Productcatalog/do_edit')?>"  class="form-horizontal">
                              <input type="hidden" name="id" value="{$thiscatalog['id']}">
	                          <div class="form-group">
                                 <label class="col-sm-2 control-label">分类名称:</label>
                                 <div class="col-sm-8"><input type="text" name="name" value="{$thiscatalog['name']}" class="form-control">
                                 </div>
                             </div>
	                          <div class="form-group">
	                              <label class="col-sm-2 control-label">分类选项:</label>
	                              <div class="col-sm-8">
	                              	<select name="parent_id">
	                              	 <option value="0">一级分类</option>
	                              	<volist name="level1" id="l1">
	                              	   <option <if condition="$l1.id eq $thiscatalog['parent_id'] ">selected="selected"  </if> value="{$l1.id}">{$l1.name}</option>
	                              	   <?php $level2=M('product_catalog')->where('parent_id='.$l1['id'])->select()     ?>   
	                              	   <volist name="level2" id="l2">
	                              	      <option <if condition="$l2.id eq $thiscatalog['parent_id'] ">selected="selected"  </if> value="{$l2.id}">└───{$l2.name}</option>
	                              	      
	                              	         <?php $level3=M('product_catalog')->where('parent_id='.$l2['id'])->select()     ?>   
			                              	    <volist name="level3" id="l3">
			                              	          <option value="{$l3.id}">└───┴───{$l3.name}</option>
			                              	     </volist>              
	                              	    </volist>             
	                              	</volist>              
	                              		
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