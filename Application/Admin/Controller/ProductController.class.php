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
    	
    	$count = M('Product')->count();
    	$Page = new \Org\Util\Page($count,8);
    	$Page->setConfig('first','首页');
    	$Page->setConfig('end','尾页');
    	$Page->setConfig('next','下一页');
        $Page->setConfig('prev','上一页');
    
    	

    	$show = $Page->show();
    	$products = M('Product')->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
    	$this->assign('products',$products);
    	$this->assign('page',$show);
    	$this->display(); 

    }
     public function add(){
        $this->assign('level1',M('Product_catalog')->where('parent_id=0')->select());
     	$this->display();
     }
       public function getcatalog(){
        $id=I('get.id');
       $data= M('product_catalog')->where('parent_id='.$id)->select();
        $this->ajaxReturn($data);
     }
     public function do_add(){

     	$rules = array(     
     	      array('title','require','商品名称必须！'),  
     	      array('price','require','价格必须！'),
     	      array('img','require','商品描述必须！'),
     	      array('desc','require','商品描述必须！'),
     	      array('content','require','商品内容必须！'),
     	        );
     	
     	 if (!M("Product")->validate($rules)->create()){     
     	      $this->error(M("Product")->getError());
     	 }else{  
     	  if(IS_POST){
     	  	$Pro=D('Product');
     	    if($Pro->create(I('post.'),1)){ 
     	       if($Pro->add()){
     	         $this->success('处理成功！',U('index'));
     	         exit();
     	       }else{
     	             $error=mysqli_error();
     	             $this->error('处理失败！'.$error);
     	            }   			
     	  		}
     	  }
 	    }
    }

     public function edit($id){
        $data=D('Product')->where('id='.$id)->find();
        $level3=$data['cata_id'];
        $level3_data=D('Product_catalog')->where('id='.$level3)->find();
        $level2=$level3_data['parent_id'];
        $level2_data=D('Product_catalog')->where('id='.$level2)->find();
        $level1=$level2_data['parent_id'];

        var_dump($level3);
        var_dump($level2);
        var_dump($level1);
        $this->assign(array(
        'level1'=>$level1,
        'level2'=>$level2,
        'level3'=>$level3
            ));
        $this->assign('data',$data);
        $this->assign('level1_data',M('Product_catalog')->where('parent_id=0')->select());
        $this->display();
     }
         public function do_edit(){
            $rules = array(     
                  array('title','require','商品名称必须！'),  
                  array('price','require','价格必须！'),
                  array('img','require','商品描述必须！'),
                  array('desc','require','商品描述必须！'),
                  array('content','require','商品内容必须！'),
                    );
            
             if (!M("Product")->validate($rules)->create()){     
                  $this->error(M("Product")->getError());
             }else{  
              if(IS_POST){
                $Pro=D('Product');
                if($Pro->create()){ 
                   if($Pro->add()){
                     $this->success('处理成功！',U('index'));
                     exit();
                   }else{
                         $error=mysqli_error();
                         $this->error('处理失败！'.$error);
                        }               
                    }
              }
            }
    }

    public function del($id){
         M("Product")->delete($id);
         $this->redirect('index');
     }




}
