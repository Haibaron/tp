<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= '/tp/Public/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/bootstrap-theme.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/nivo-slider.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/front.css'?>" />
</head>
<body id="product_detail">
	<div class="container">
		   <div class="row" id="header">
			<div class="col-md-3">
				<img id="logo" src="<?='/tp/Public/img/logo.png'?>" />
			</div>
			<div class="col-md-6">
				<p id="contact"><i class="glyphicon glyphicon-phone-alt"></i>400-12345678910 <i class="glyphicon glyphicon-envelope"></i>shop@goodjobs.cn</p>
				<div class="input-group">
			      <input type="text" class="form-control" placeholder="请输入商品名称或编号...">
			      <span class="input-group-btn">
			        <button class="btn btn-danger" type="button">搜索</button>
			      </span>
			    </div>
			</div>
			<div class="col-md-3">
			   
			   <?php if($_SESSION['is_login']){ echo "欢迎回来".$_SESSION['username'];?>
			   		  <a href="<?php echo U('Home/Login/sign_out') ?>">退出</a>
			   		 <?php  }else{ ?>
                     <a href="<?php echo U('Home/Login/user_login') ?>">欢迎登陆</a>
                     <a href="<?php echo U('Home/Login/user_regedit') ?>">快速注册</a>
			   		 
			  <?php
 } ?>
					<a id="shopcart" class="pull-right" href="<?php echo U('Home/Shopping/cart') ?>">
					<i class="glyphicon glyphicon-shopping-cart"></i>我的购物车
<?php if($_SESSION['is_login']){ ?>
					<span>
						<?=M('user_cart')->where('user_id='.$_SESSION['userid'])->count()?>
					</span>
					<?php } ?>
				</a>
			</div>

		</div>
	
		<br />
		<div class="row">
			<div class="col-md-6" id="product_imgs">
				<img id="product_main_img" src="<?='/tp'.$product['img']?>" />
				<ul class="clearfix">
				 	<?php foreach($imgs as $i){ ?>
		 			<li>
						<img  src="<?='/tp'.$i['url']?>">
					</li>
					<?php } ?>
				</ul>
				<span>商品编号：2131674</span><a href=""><i class="glyphicon glyphicon-share-alt"></i>分享</a>
				<i class="glyphicon glyphicon-heart"><a href="">关注商品</a></i>
			</div>
			<div class="col-md-6">
			<form method="post" action="<?=U('Home/Shopping/addcart')?>">
				<h3><?=$product['title']?></h3>
				<input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
				<table class="product_arg">
					<tr>
						<td class="l">价格：</td>
						<td class="price">￥<?=$product['price']?></td>
					</tr>
					<tr>
						<td class="l">商品评分：</td>
						<td class="star">
							<?php for($i=0;$i<5;$i++){?>
								<?php if($i < $product['star']){?>
								<i class="glyphicon glyphicon-star"></i>
								<?php }else{?>
								<i class="glyphicon glyphicon-star-empty"></i>
								<?php }?>
							<?php }?>
						</td>
					</tr>
					<tr>
						<td class="l">运费：</td>
						<td class="deliver_fee">满99免运费</td>
					</tr>
					<tr>
						<td class="l">购买数量：
							

						</td>
							<td class="num">
								<sapn class="reduce">-</sapn>
								 <input class="inp" type="text" name="num" value="1" />
								  <span class="add">+</span>
							</td>
					</tr>
					<tr>
						<td class="l">送货:</td>
						<td class="deliver">由仓库全国最近点 发货，并提供售后服务。如有问题咨询在线客服~!
                                         上午08:30前完成下单下午送达,下午下单隔日第二天送达.</td>
					</tr>
					<tr>
						<td class="l"><a href="#" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-shopping-cart"></i>立即购买</a></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><button type="submit" class="btn btn-danger btn-lg">购物车</button></a></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-9">
				<?php echo htmlspecialchars_decode($product['content']) ?>
			</div>
		</div>
	</div>

<script type="text/javascript" src="<?php echo '/tp/Public/js/jquery.js'?>"></script>	
<script type="text/javascript" src="<?php echo '/tp/Public/js/jquery.elevateZoom-3.0.8.min.js'?>"></script>
    <script type="text/javascript">
	    $(function(){
	    $("#product_imgs ul li").mouseover(function(){
	    	$("#product_imgs ul li").removeClass("hover");
	    	$(this).addClass("hover");
	    	var src=$(this).find('img').attr('src');
	    	$("#product_main_img").attr('src',src);
	    	});

	     $('.add').click(function(){

	     	var i=$('.inp').val();
	     	i++;
         $('.inp').val(i);
	     });

	      $('.reduce').click(function(){
	     	var i=$('.inp').val();
	     	if(i>0){
	     	i--;
         $('.inp').val(i);
              }
	     });
	     
	      $('#product_main_img').elevateZoom({
	      	zoomWindowWidth:300,
	      	zoomWindowHeight:300

	      });

	    });

    </script>

</body>
</html>