<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fenye</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/tp/Public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="/tp/Public/css/list.css" />
	<link rel="stylesheet" href="/tp/Public/css/front.css" />
	<link rel="stylesheet" href="/tp/Public/css/nivo-slider.css" />
	
	

</head>
<body>

	<div class="container">
		
		<br>
		<div class="row" id="hello">
		<div class="col-md-3">
			<div id="list_menu">
					<div id="menu_title" >
						<?php echo $listname['name'] ?>
					</div>	
					<ul>

					<?php foreach ($data as $value): ?>
						  <li <?php if($value['id']==$val['id']){ ?> class="active"  <?php } ?>><a href="<?= U('Detail/getlistone/',array('id'=>$value['id']))?>">
						 	<?php echo $value['name'] ?>
						 </a></li>
					<?php endforeach ?>
					</ul>
		    </div>
	    </div>
	    <div class="col-md-9">
			<table class="navname">
				<tr>
					<td class="num">品牌</td>
					<td class="two">佳能 尼康 索尼</td>
				</tr>
				<tr>
					<td class="num">单反级别</td>
					<td class="two">入门级 中级 高级</td>
				</tr>
				<tr>
					<td class="num">屏幕尺寸</td>
					<td class="two">3英寸 3.2英寸</td>
				</tr>
				<tr>
					<td class="num">价格</td>
					<td class="two">1360以下元 1360-2720元 2720-4080元 6800以上元</td>
				</tr>
			</table>
			<br>
			<?php foreach ($h as $key => $valu) { ?>
				 <a  href="<?= U('Home/Detail/getlistone',array('id'=>$val['id'])).'?brand_id='.$valu['id'] ?>" <?php if($valu['id']==$v[0]['brand_id']){ ?> class="active"  <?php } ?> ><?php echo $valu['name'] ?></a>
		<?php	} ?>
		
		<br>
		
		<div class="row">
			<?php foreach ($v as $p) { ?> 
			 		<div class="col-md-3 product_item" >
					<img class="product_item_img" src="/tp<?php echo ($p['img']) ?>" />
					<ul class="clearfix">
    					<?php $imgs=M('product_img')->where("product_id=".$p['id'])->limit(4)->select(); foreach ($imgs as $i) { ?>
     				<li>
     					<img  src="/tp<?php echo ($i['url'])?>" />
     				</li>
     			<?php
 } ?>
    			    </ul>	
    			    <h5><?php echo $p['title'] ?></h5>
    			    <p><?php echo $p['price'] ?></p>
    			    <a href="<?= U("Product/detail/".$p->id)?>" class="btn btn-danger">立即购买</a>
			    </div>    			
			<?php  } ?> 			
		</div>
	 </div>
</body>
<script type="text/javascript" src="<?php echo '/tp/Public/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo '/tp/Public/js/bootstrap.min.js'?>"></script>
<script type="text/javascript">
$(function(){
	$('.product_item ul li').mouseover(function(){
		$(this).parents('.product_item').find('ul li').removeClass('hhh');
		$(this).addClass('hhh');
		var src=$(this).find('img').attr('src'); 
		$(this).parents('.product_item').find('.product_item_img').attr('src',src);	
	});

});
	
</script>
</html>