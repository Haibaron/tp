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




}
