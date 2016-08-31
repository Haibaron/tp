<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= '/tpshop2/Public/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tpshop2/Public/css/bootstrap-theme.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tpshop2/Public/css/nivo-slider.css' ?>" />
	<link rel="stylesheet" href="<?= '/tpshop2/Public/css/front.css'?>" />
</head>
<body>
<div class="container">
    <div class="row" id="header">
			<div class="col-md-3">
				<img id="logo" src="<?='/tpshop2/Public/img/logo.png'?>" />
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
			   		  <a href="<?php echo U('Admin/Login/sign_out') ?>">退出</a>
			   		 <?php  }else{ ?>
                     <a href="<?php echo U('Admin/Login/user_login') ?>">欢迎登陆</a>
                     <a href="<?php echo U('Admin/Login/user_regedit') ?>">快速注册</a>
			   		 
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
			<div class="col-md-3">
				<div id="menu">
					<div id="menu_title">
						<i class="glyphicon glyphicon-menu-hamburger"></i>所有分类
					</div>	
					<ul>
						<?php foreach($catalogs as $c){?>
						<li><a href="<?=U('Home/Detail/getlistone',array('id'=>$c['id'])) ?>"><?=$c['name']?></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		 	<div class="col-md-9">
		       <div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		                <a href="#"><img src="<?= '/tpshop2/Public/upload/1.jpg'?>"  /></a>
		                <a href="#"><img src="<?php echo '/tpshop2/Public/upload/2.jpg'?>"  /></a>
		                <a href="#"><img src="<?php echo '/tpshop2/Public/upload/3.jpg'?>"  /></a>
		                <a href="#"><img src="<?php echo '/tpshop2/Public/upload/4.jpg'?>"  /></a>
		            </div>
		        </div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-8">
				<div  id="hot_sale">
				<?php foreach($products as $p){?>
				<div class="item clearfix">
					<a href="<?php echo U('Home/Detail/detail',array('id'=>$p['id'])) ?>"><img src="<?=$p['img']?>"  style="width:150px;height:150px"/></a>
					<a href="<?php echo U('Home/Detail/detail',array('id'=>$p['id'])) ?>"><h5><?=$p['title']?></h5></a>
					<p ><?=$p['desc']?></p>
					<div class="price">
						¥<?=number_format($p['price'],2)?>
					</div>
					<a href="#" class="btn btn-danger buy_now">立即抢购</a>
				</div>
				<?php }?>
			</div>
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
				    		<li><a href="#"><?=$n['title']?></a></li>
				    		<?php }?>
				    	</ul>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="new">
						<ul>
				    		<?php foreach($new as $n){?>
				    		<li><a href="#"><?=$n['title']?></a></li>
				    		<?php }?>
				    	</ul>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<?php
 $catalog_ids = array(100); $i = 1; foreach($catalog_ids as $ci){ $f_recommend =M('product')->where('cata_id='.$ci.' and recommend=1')->find(); $floor = M('product')->where('cata_id='.$ci.' and recommend=0')->limit(6)->select(); $cata = M('product_catalog')->where('id='.$ci)->find(); ?>
		<br />
		<div class="row floor">
			<div class="col-md-12">
				<p class="title"><span><?=$i?>f</span><?=$cata['name']?></p>
				<div class="main clearfix">
					<div class="first clearfix">
						<img src="<?=$f_recommend['img']?>" style="width:200px;height:200px" />
						<h5><?=$f_recommend['title']?></h5>
						<p><?=$f_recommend['desc']?></p>
						<div class="price">
							¥<?=$f_recommend['price']?>
						</div>
						<a href="#" class="btn btn-danger buy_now">立即抢购</a>
					</div>
					<?php foreach($floor as $f){?>
					<div class="item">
						<img src="<?=$f['img']?>"  style="width:100px;height:100px"/>
						<div class="t"><?=$f['title']?></div>
						<div class="price">￥<?=$f['price']?></div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<?php $i++; }?>
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
	<script type="text/javascript" src="/tpshop2/Public/js/jquery.js"></script>	
	<script type="text/javascript" src="/tpshop2/Public/js/bootstrap.min.js "></script>
	<script type="text/javascript" src="/tpshop2/Public/js/jquery.nivo.slider.pack.js"></script>
			
    <script type="text/javascript">
	    $(function() {
	        $('#slider').nivoSlider({
	        	prevText: '<i class="glyphicon glyphicon-menu-left"></i>', 
    			nextText: '<i class="glyphicon glyphicon-menu-right"></i>', 
	        });
	    });
    </script>

</body>
</html>