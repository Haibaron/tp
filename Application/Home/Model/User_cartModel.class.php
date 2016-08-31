<?php
namespace Home\Model;
use Think\Model;
class User_cartModel extends Model{
    public function addToCart($product_id,$num){
        $user_id=session('userid');
        if($user_id){
        	//用户存在mysql
        	$where="user_id=$user_id and product_id=$product_id";
        	$has=$this->where($where)->find();
        	if($has){
        		//用户之前添加过
        		$this->where($where)->setField('num',$num);
        	}else{
        		//用户第一次添加
        		$data=array(
					'product_id'=>I('post.product_id'),
					'num'=>I('post.num'),
					'user_id'=>session('userid'),
			      );
			      $this->add($data);
			     
        	}
        }else{
        	//用户不存在cookie
        	$cartdata=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
        	$key=$product_id;
           
        	if($cartdata[$key]){
        		$cartdata[$key]+=$num;
        	}else{
        		$cartdata[$key]=$num;
        	}
        	$time=time()+86400*7;//保存一个星期
        	setcookie('cart',serialize($cartdata),$time,'/');
        }
    }
}
