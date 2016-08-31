<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	//当使用create()的方法的时候自动调用
    protected $_validate = array(    

        array('username','require','用户名必须！'),
        array('password2','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致     

        array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
);
   protected $_auto=array(
    	array('create_time','createtime',1,"function")
    	);
public function  _before_insert(&$data,$option){
	$salt=C('FRONT_SALT');
		$data['password']=md5(md5($data['password'].$salt));
}



//发送激活邮件
public function  _after_insert($data,$option){
	
	$useremail=$data['email'];
	var_dump($useremail);

	$userid=$data["id"];
	var_dump($userid);
	$content="恭喜您，请前往如下地址<a href='http://localhost/tpshop2/index.php/Admin/Login/active/id/{$userid}'>激活</a>";
	$res=sendMail($useremail,'用户激活',$content);
	//var_dump($res);
	if($res['sign']==0){
		$this->error=$res['msg'];
		return false;
	}

  }   
}

