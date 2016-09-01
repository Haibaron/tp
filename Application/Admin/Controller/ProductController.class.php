<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!session('admin_name')){
			$this->error('还没有登录，滚回登录去',U('Admin/AuthLogin/login'));
		}
	}
    public function index(){
    	
    	$count = M('Product')->where('status=1')->count();
    	$Page = new \Think\Page($count,15);
    	$Page->setConfig('first','首页');
    	$Page->setConfig('end','尾页');
    	$Page->setConfig('next','下一页');
        $Page->setConfig('prev','上一页');
    
    	

    	$show = $Page->show();
    	$products = M('Product')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('products',$products);
    	$this->assign('page',$show);
    	$this->display(); 

    }
     public function add(){}
}