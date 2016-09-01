<?php
namespace Admin\Controller;
use Think\Controller;
class AuthLoginController extends Controller {
    public function login(){
      layout(false);
    	$this->display();
    }
    public function login_check(){
    	  $rules = array(     
            array('username','require','用户名必须！'),  
            array('password','require','密码必须！'),
              );
       $User = M("admin"); // 实例化User对象
       if (!$User->validate($rules)->create()){     // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($User->getError());
       }else{  // 验证通过 可以进行其他数据操作
       		$username=I('post.username');
       		$password=md5(I('post.password'));
       		if($admin_model=M('admin')->where(array('username'=>$username,'password'=>$password))->find()){
       			session('admin_is_login',true);
       			//$_SESSION['admin_is_login']=true;
       			session('admin_name',$username);
       			$this->success('登录成功',U('Admin/Index/index'));
       		}else{
       			$this->error('登录失败');
       		}

         }
    }
    public function text(){
    	var_dump($_SESSION);
    	var_dump($_COOKIE);
    }
     public function login_out(){
    	session_destroy();
      $this->success('退出成功',U("login"));
    }
}