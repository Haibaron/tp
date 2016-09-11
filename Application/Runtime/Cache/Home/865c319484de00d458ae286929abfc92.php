<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?= '/tp/Public/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/bootstrap-theme.min.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/nivo-slider.css' ?>" />
	<link rel="stylesheet" href="<?= '/tp/Public/css/front.css'?>" />


</head>
<body>
<div class="container">
	<div class="row" id="header">
				<div class="col-md-3">
					<img id="logo" src="/tp/Public/img/logo.png" />
				</div>
				<div class="col-md-9">		
				  <img style="width:100%;" src="/tp/Public/img/shop_step_2.jpg" />	  
				</div>
			</div>
	<br>
	<div>
	<form method="post" action="<?php echo U('Home/Shopping/do_pay_order');?>">
	  <div>
	  	<h3>收货地址 <a href="" class="btn btn-success pull-right" id="myModal">添加</a></h3>
		
	  </div>
		
		<table class="table table-bordered">
			<?php  foreach($addr as $a){ ?>
					<tr align="center">
					    <td width="20"><input type="radio" name="address_id" class="is_select" value="<?=$a['id'] ?>"</td>
						<td>收件人:<?=$a['name']?></td>
						<td>收货地址:<?=$a['addr']?></td>
						<td>联系方式:<?=$a['iphone']?></td>
						<td><a href="">编辑</a>　<a href="">删除</a></td>
					</tr>
			<?php  }?>					
		</table>
		<table  class="table">
			<th width="550">商品</th>
			<th width="100">数量</th>
			<th width="100">单价</th>
			<th width="100">总额</th>			
				<?php $sum=0; foreach ($carts as $c) { $data=M('Product')->where('id='.$c['product_id'])->find(); ?>
				<tr  class="cartid">				
					<td>
					<a href="<?php echo U('Product/detail/id/'.$c['product_id'])?>">					
					<img style="width:60px;" src="<?=$data['img']?>"  />
					<?=$data['title']?>
					</a>	
					</td>					
					<td class="t" width="200">
						<sapn class="reduce">-</sapn>
						 <input class="inp" type="text" name="num" value="<?=$c['num']?>" />
						  <span class="add">+</span>
					</td>
					<td>
						<?=$data['price']?>						
					</td>
					<td>
						<?= $p=intval($c['num'])*intval($data['price'])?>
						<?php $sum =$sum +$p; ?>
					</td>					
				</tr>
				
		<?php	} ?>
		<tr align="" >
					<td colspan="3" > </td>
			    <td> 总价：<?=$sum ?></td>
			    <input type="hidden" name="sum" value="<?=$sum ?>">
				</tr>
				<tr align="" >
					<td colspan="3" > </td>
			    <td><button class="btn btn-danger">提交订单</button></td>
				</tr> 
		</table>
</div>
</form>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/tp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/tp/Public/js/bootstrap.min.js "></script>
<script type="text/javascript">
	
		//$('#myModal').modal('show');

	

</script>
</html>