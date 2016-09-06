<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!session('admin_name')){
			$this->error('还没有登录，滚回登录去',U('Admin/AuthLogin/login'));
		}
	}
    public function index(){
    	
    	$this->assign('user',M('User')->select());
        $this->display();
    }

   public function disable($id){
      M('User')->where('id='.$id)->setField('stauts',"-1");
      $this->success('禁用成功',U('index'));
   }
   public function enable($id){
      M('User')->where('id='.$id)->setField('stauts',"0");
      $this->success('启用成功',U('index'));

   }


}
