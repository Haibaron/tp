<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/nivo-slider.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/front.css" />
</head>
<body>
<div class="container">
 <include file="./Application/Home/View/Index/header.php" />
	
		<br />
		<div class="row">
			<div class="col-md-3">
				<div id="menu">
					<div id="menu_title">
						<i class="glyphicon glyphicon-menu-hamburger"></i>所有分类
					</div>	
					<ul>
						<?php foreach($catalogs as $c){?>
						<li>
						<a href="<?= U('Home/Detail/getlistone',array('id'=>$c['id'])) ?> ">
							<?php echo $c['name']?>	
						</a>
						</li>
						<?php }?>
					</ul>
				</div>
			</div>
		 	<div class="col-md-9">
		       <div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		                <a href="#"><img src="__PUBLIC__/upload/1.jpg"  /></a>
		                <a href="#"><img src="__PUBLIC__/upload/2.jpg"  /></a>
		                <a href="#"><img src="__PUBLIC__/upload/3.jpg"  /></a>
		                <a href="#"><img src="__PUBLIC__/upload/4.jpg"  /></a>
		            </div>
		        </div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-8">
			<form method="post" action="{:U('Home/Shopping/pay_order')}">
				<div  id="hot_sale">
				<?php foreach($products as $p){?>
				<div class="item clearfix">
					<a href="<?= U('Home/Detail/detail',array('id'=>$p['id'])) ?>"><img src="__ROOT__/<?php echo $p['img']?>"  style="width:150px;height:150px"/></a>
					<a href="<?= U('Home/Detail/detail',array('id'=>$p['id'])) ?>"><h5><?php echo $p['title']?></h5></a>
					<p ><?php echo $p['desc']?></p>
					<div class="price">
						¥<?php echo number_format($p['price'],2)?>
					</div>
					<button class="btn btn-danger buy_now" >立即抢购</button>
				</div>
				<?php }?>
			</div>
			<input type="hidden" name="img" value="<?= $p['img']?>">
			<input type="hidden" name="title" value="<?= $p['title']?>">
			<input type="hidden" name="price" value="<?= $p['price']?>">
			<input type="hidden" name="product_id" value="<?= $p['id']?>">
			
			</form>
			</div>
			<div class="col-md-4">
				<div style="background:url('http://placehold.it/293x170?text=广告位1') no-repeat;background-size:100% 100%;height:170px;width:100%;"></div>
				<div id="news">
				  <ul class="nav nav-tabs  nav-justified" role="tablist">
				    <li role="presentation" class="active"><a href="#notice" data-toggle="tab">公告</a></li>
				    <li role="presentation"><a href="#new" data-toggle="tab">新闻</a></li>
				  </ul>
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="notice">
				    	<ul>
				    		<?php foreach($notice as $n){?>
				    		<li><a href="#"><?php echo $n['title']?></a></li>
				    		<?php }?>
				    	</ul>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="new">
						<ul>
				    		<?php foreach($new as $n){?>
				    		<li><a href="#"><?php echo $n['title']?></a></li>
				    		<?php }?>
				    	</ul>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<?php
			$catalog_ids = array(100);
			$i = 1;
			foreach($catalog_ids as $ci){
				$f_recommend =M('product')->where('cata_id='.$ci.' and recommend=1')->find();
				$floor = M('product')->where('cata_id='.$ci.' and recommend=0')->limit(6)->select();
				$cata = M('product_catalog')->where('id='.$ci)->find();
		?>
		<br />
		<div class="row floor">
			<div class="col-md-12">
				<p class="title"><span><?php echo $i?>f</span><?php echo $cata['name']?></p>
				<div class="main clearfix">
					<div class="first clearfix">
						<img src="__ROOT__/<?php echo $f_recommend['img']?>" style="width:200px;height:200px" />
						<h5><?php echo $f_recommend['title']?></h5>
						<p><?php echo $f_recommend['desc']?></p>
						<div class="price">
							¥<?php echo $f_recommend['price']?>
						</div>
						<a href="#" class="btn btn-danger buy_now">立即抢购</a>
					</div>
					<?php foreach($floor as $f){?>
					<div class="item">
						<img src="__ROOT__/<?php echo $f['img']?>"  style="width:100px;height:100px"/>
						<div class="t"><?php echo $f['title']?></div>
						<div class="price">￥<?php echo $f['price']?></div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<?php $i++;
		}?>
		<br />
		
		<hr />
		<div id="links" class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="#">帮助中心</a></li>
					<li><a href="#">购物指南</a></li>
					<li><a href="#">配送方式</a></li>
					<li><a href="#">支付方式</a></li>
				</ul>
				<ul>
					<li><a href="#">技术支持</a></li>
					<li><a href="#">售后网点</a></li>
					<li><a href="#">常见问题</a></li>
				</ul>
				<ul>
					<li><a href="#">关于商城</a></li>
					<li><a href="#">公司介绍</a></li>
					<li><a href="#">商城简介</a></li>
					<li><a href="#">联系客服</a></li>
				</ul>
				<ul>
					<li><a href="#">关注我们</a></li>
					<li><a href="#">商城手机版</a></li>
				</ul>
				<ul>
					<li><a href="#">售后服务</a></li>
					<li><a href="#">保修政策</a></li>
					<li><a href="#">退换货政策</a></li>
					<li><a href="#">退换货流程</a></li>
				</ul>

			</div>
		</div>

		<hr />
	</div>
	
	<p id="copyright">
		未经goodjobs.cn同意，不得转载网站之所有招聘信息及作品 新安人才网版权所有&copy;2000-2016
		<br />皖ICP备12018891号 经营许可证：皖B2-20080016
	</p>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>	
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js "></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.nivo.slider.pack.js"></script>
			
    <script type="text/javascript">
	    $(function() {
	        $('#slider').nivoSlider({
	        	prevText: '<i class="glyphicon glyphicon-menu-left"></i>', 
    			nextText: '<i class="glyphicon glyphicon-menu-right"></i>', 
	        });
	    });


	    $('#checkout').click(function(){
		 var data=[];
       $('.is_select').each(function(i,item){       
              if($(item).prop('checked')){
					var element={
		             		'num':$(item).parents('.cartid').find('.inp').val(),
		             		'product_id':$(item).parents('.cartid').find('.product_id').val()
             	                }
					 data.push(element);     
                  }
       });
       		   
       		  	  $.post("<?=U("Shopping/order")?>",{"data":data},function(data){
       		  	  	 console.log(data);
       		  	  	  if(data=='ok'){
       		  	  	  window.location.href="<?=U('shopping/pay_order')?>"
       		  	  }
       		  	  });
       		  	  	
            
	});
    </script>



</body>
</html>