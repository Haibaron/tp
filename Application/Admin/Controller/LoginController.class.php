<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
  public function user_login(){
   if(IS_POST){
      $rules = array(     
            array('username','require','用户名必须！'),  
            array('password','require','密码必须！'),
            array('captcha','require','验证码必须！'),
              );
       $User = M("User"); // 实例化User对象
       if (!$User->validate($rules)->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($User->getError());
       }else{  // 验证通过 可以进行其他数据操作
              $username=I('post.username');
              $password=I('post.password');
              $captcha=I('post.captcha');
              /*var_dump($username);
              exit;*/
              $array=array(
                  'username'=>$username,
                );
              $vrify=new \Think\Verify();
              $userinfo=M('User')->where($array)->find();
            if($vrify->check($captcha)){
              if($userinfo){
                  $salt=C('FRONT_SALT');
                if($userinfo['password']==md5(md5($password.$salt))&&$userinfo['actived']==1){
                       $_SESSION['is_login']=true;
                        session('is_login',1);
                        session('userid',$userinfo['id']);
                        session('username',$userinfo['username']);
                        if(session('returnurl')){
                          $this->success('111',U('Home/Shopping/move_cook_to_cart'));
                        }
                    
                      $this->redirect('Home/Index/index');

                }else{
                  echo "<script>alert('账户没有激活或密码错误')</script>";
                }
              }else{
                echo "<script>alert('账户不存在')</script>";
              }
            }else{
              echo "<script>alert('验证码错误')</script>";
            }
              }
      	      	  	

	         }

     $this->display();
  }
  public function do_check(){
  
  }
  public function vrifyimg(){
  	$config=array(
		'imageH'    =>  40,               // 验证码图片高度
        'imageW'    =>  130,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontSize'  =>  20,              // 验证码字体大小(px)
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
			);
  	$vrify=new \Think\Verify($config);
  	$vrify->entry();
  }


  public function user_regedit(){
	      if(IS_POST){
	         	$user=D("User");
	         	if($user->create()){	
	         		if($user->add()){ 
	         			$this->success("处理成功",U(''));
	         			exit();
	         		}else{
	         				$error=$user->getError();
	    	     		//	$error=mysqli_error();
	    	     			$this->error('处理失败！'.mysql_error().$error);
	         		     }
	          } else{
                  exit($user->getError());
            }
	        }
	           $this->display();
  }
   public function active(){
	  $id=I("get.id");
	 //var_dump($id);
	  $user=D('User');
	  $userinfo=$user->find($id);
	  if($userinfo){
	  	if($userinfo['active']==1){
	  		$this->error('已经激活处理过');
	  		exit;
	  	}else{
	  		$where=array('id'=>$id);
	  		$user->where($where)->setField('actived',1);
	  		$this->success('激活成功！',U());
	  	  
	  	}
        exit;
	  }else{
	  	//查不到
	  	$this->error('非法！');
	  }
  }
  public function sign_out(){
  	session('[destroy]');
  	$this->redirect('Home/Index/index');
  }
  public function find(){

    if(IS_POST){
      $email=I('post.email');
      $userinfo=D('user')->where(array('email'=>$email))->find();
      if($userinfo){
        $userid=$userinfo['id'];
        $content="请前往如下地址<a href='http://localhost/tpshop2/index.php/Admin/Login/changepwd/id/{$userid}'>找回密码</a>";
        $res=sendMail($email,'找回密码',$content);
        if($res['sign']==1){
          $this->success('发送成功',U('Admin/Login/user_login'),3);
        }else{
          $this->error=$res['msg'];
          }
      }
    }
    $this->display();
  }

public function changepwd(){
     $userid=I('get.id');
     $model=M('user');
     $userinfo=M('User')->where("id=$userid")->find();
     if(IS_POST){
         if($model->create()){
          $salt=C('FRONT_SALT');
          $model->password=md5(md5("$model->password".$salt));
            if($model->save()){
              $this->success('更新成功',U('user_login'));
              exit();
            }else{
               $this->error('更新失败');
             }
         }else{
          $this->error("更新失败",$model->getError());
         }
     }
     $this->assign('userinfo',$userinfo);
     $this->display();
}

}