<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
	<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap.min.css'?>" />
	<link rel="stylesheet" href="<?php echo '__PUBLIC__/css/bootstrap-theme.min.css'?>" />
</head>
<body style="background: url(__PUBLIC__/img/1.jpg) no-repeat;background-size: 100% 600px;">
<div class="container " >
  <h3 style="border-bottom: 1px dashed;">密码管理　>>　找回密码</h3>
  <br>
  <br>
  <br>
  <br>
  <div style="margin-left: 150px">
  <form method="post" action="__SELF__"> 
    <table>
    <th colspan="2">通过已下方式找回您的密码</th>
      <tr>
        <td width="450">手机验证码找回密码</td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#iphone" >找回密码</button></td>
      </tr>
      <tr>
       <td>&nbsp;</td>
      </tr>
      <tr>
        <td>邮箱验证找回密码</td>
        <td><button class="btn btn-success" type="button"  data-toggle="modal" data-target="#email" >找回密码</button></td>
      </tr>
    </table>

    <div class="modal fade" id="iphone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>通过手机找回密码</h3>
        <p>电话号码:<span style="color: red;">(*请输如注册时的号码 )</span></p>
         <span><input type="text" name="telephone" id="telephone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="btn" class="btn btn-success" >获取验证码</button></span>
         <br>
          <p>验证码</p>
          <p><input type="text" name="Codes" id="Codes" placeholder="请输出验证码..."></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button  class="btn btn-primary">确定</button>
      </div>
    </div>
  </div>
</div>

<!-- email -->
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>邮箱验证找回密码</h3>
         <p>邮箱：<input type="email" name="email"><span style="color: red;">*请输如注册时的邮箱 </span></p>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">确定</button>
      </div>
    </div>
  </div>
</div>

  </form>
  </div>
</div>
	

<!-- iphone -->



</body>
</html>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
 <script src="__PUBLIC__/admin/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#btn').click(function(){
		var telephone=$('#telephone').val();
    $.get("__ROOT__/Message/message.php", {'telephone':telephone}, function(data){
      debugger;
             if (data=='ok') {
             	alert('发送成功');
             }else{
             	alert('发送失败');
             	return false;
             }
              /* console.log(data);
             return false;*/
		})
		
	})
</script>
