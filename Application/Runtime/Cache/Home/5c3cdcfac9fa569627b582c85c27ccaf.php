<?php if (!defined('THINK_PATH')) exit();?>   <div class="row" id="header">
			<div class="col-md-3">
				<img id="logo" src="/tp/Public/img/logo.png" />
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
						<?php M('user_cart')->where('user_id='.$_SESSION['userid'])->count()?>
					</span>
					<?php } ?>
				</a>
			</div>

		</div>