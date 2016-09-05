<?php
namespace Admin\Controller;
use Think\Controller;
class ProductcatalogController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!session('admin_name')){
			$this->error('还没有登录，滚回登录去',U('Admin/AuthLogin/login'));
		}
	}
    public function index(){
         $level1 = M('Product_catalog')->where('parent_id=0')->select();
        $this->assign('level1',$level1);
      
        $this->display(); 

    }
      public function add(){
      	$level1 = M('Product_catalog')->where('parent_id=0')->select();
        $this->assign('level1',$level1);
     	$this->display();
     }

       public function do_add(){
       		$id=I('post.parent_id');
       		$name=I('post.name');
       		$arr=array('parent_id'=>$id,'name'=>$name);
       		M('Product_catalog')->add($arr);
       		 $this->success('处理成功！',U('index'));
        }
         public function edit($id){
      	$level1 = M('Product_catalog')->where('parent_id=0')->select();
        $this->assign('level1',$level1);
        $this->assign('thiscatalog',M('Product_catalog')->where('id='.$id)->find());
     	$this->display();
     }

        public function do_edit(){
       		$id=I('post.id');
       		$product_id=I('post.parent_id');
       		$name=I('post.name');
       		$arr=array('parent_id'=>$product_id,'name'=>$name);
       		M('Product_catalog')->where('id='.$id)->save($arr);
       		 $this->success('处理成功！',U('index'));
        }
       
}
