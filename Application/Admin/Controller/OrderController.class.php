<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!session('admin_name')){
			$this->error('还没有登录，滚回登录去',U('Admin/AuthLogin/login'));
		}
	}
    public function index(){
    	
    	$count = M('Order')->count();
      $Page = new \Org\Util\Page($count,8);
      $Page->setConfig('first','首页');
      $Page->setConfig('end','尾页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('prev','上一页');
      $show = $Page->show();
      $orders = M('Order')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('orders',$orders);
      $this->assign('page',$show);
      $this->display(); 
    }
}
