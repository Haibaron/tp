<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	    $model=M('product_catalog')->where('parent_id=0')->select();
	   
	    $this->assign(array(
	    	'catalogs'=>$model,
	    	'notice'=>M('article')->where('type=0')->select(),
	    	'new'=>M('article')->where('type=1')->select(),
	    	'products'=>M('product')->limit(4)->select()
	    	));
	    $this->display();
  }
}