<?php
namespace Home\Controller;
use Think\Controller;
class ShoppingController extends Controller {
    public function __construct(){
    	parent::__construct();
    	/*if(session('is_login')!=1){
    		$this->error('滚回登陆去',U('Admin/Login/user_login'));
    	}*/
    }

	public function cart(){
		
		if(session('userid')){
			$carts=M('user_cart')->where("user_id=".session('userid'))->select();
         	$this->assign('carts',$carts);	
		}else{
			/*$carts=M('user_cart')->where($_COOKIE['cart'])->select();
         	$this->assign('carts',$carts);	*/
         	//var_dump(unserialize($_COOKIE['cart']));
         	$cartdata=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
         	foreach ($cartdata as $key=> $value) {	
         		$cartdata1[]=array(
         				'product_id'=>$key,
         				'num'=>$value
         			);
         	}
         	//var_dump($cartdata1);
         	$this->assign('carts',$cartdata1);
		}
	    
		//$this->assign('data',$data);
			$this->display();
	}
	public function addcart(){
		$product_id=I('post.product_id');
		$num=I('post.num');
		$model=$User = new \Home\Model\User_cartModel();
		//$model=D('User_cart');
		$model->addToCart($product_id,$num);

 $this->success('添加成功',U("Home/Detail/detail/id/$product_id"));

		/*$array=array(
			'product_id'=>I('post.product_id')
			);
	
		if(M('user_cart')->where($array)->find()){
			$data=M('user_cart')->where($array)->setField('num',I('post.num'));
		$this->success('添加成功',U("Home/Detail/detail/id/$product_id"));
		}else{
			$data=array(
			'product_id'=>I('post.product_id'),
			'num'=>I('post.num'),
			'user_id'=>session('userid'),
			);
			M('user_cart')->add($data);
	        $this->success('添加成功',U("Home/Detail/detail/id/$product_id"));
		}
		*/
		

		
	}
	public function move_cook_to_cart(){
		
		if(session('userid')){
			$cartdata=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
         	foreach ($cartdata as $key=> $value) {	
         		$cartdata1=array(
         				'product_id'=>$key,
         				'num'=>$value
         			);
         		
         	}
         	M('User_cart')->add('cartdata1');
         	setcookie('cart','',time()-1,'/');
		}
	}
	public function updatecart(){
			if(I('get.num')>0){
				M('user_cart')->where("id=".I('get.id'))->setField('num',I('get.num'));
		     }else{
		     	echo "<script>alert('不能为负数')</script>";
		     }
		     echo 'ok';
		
	}
	public function del(){
		$id=I('get.id');
		M('user_cart')->where('id='.$id)->delete();
		
	     $this->success('删除成功',U("cart"),0);
		
	}
	public function dels(){
		
		$ids=I('post.ids');
		M('user_cart')->delete(implode(',',$ids));
		echo 'ok';
	}
	public function order(){

        $data=I('post.data');
		session('data',$data);
		//echo session('data');
		echo "ok";
	}
	public function pay_order(){
		session('returnurl',U('Home/Shopping/pay_ordel'));
		if(session('userid')){
		$data=session('data');
		var_dump($data);
		
		$addr=M('user_address')->where('user_id='.session('userid'))->select();
		$this->assign('carts',$data);
		$this->assign('addr',$addr);
	}else{
		$this->error('请登录账号',U('Home/Login/user_login'));
	}
		$this->display();
	
	}


}