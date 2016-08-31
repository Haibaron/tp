<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {
    public function detail(){
    	$id=I('get.id');
    	
    	$this->assign(array(
    			'product'=>M('product')->find($id),
    			'imgs'=>M('product_img')->where("product_id=$id")->limit(4)->select()
    		));
	   
	    $this->display();
  }
  public function getlistone($id)
	{
     $brand_id=I('get.brand_id');
		$data=M('product_catalog')->find($id);
        $value=M('product_catalog')->where("id=".$data['parent_id'])->find();
        if($data['parent_id']==0){
        	$da=M('product_catalog')->where('parent_id='.$id)->select();
        	$this->redirect("Home/Detail/getlistone/",array('id'=>$da[0]['id']));
        }
       $cata_log= M('product_catalog')->where("parent_id=$id")->select();
        $cata_id=M('product_catalog')->find($id);
         $cata[]=$cata_id['id'];
       foreach ($cata_log as  $v) {
           $cata[]=$v['id'];
       }
       
      // M('product')->where("brand_id=1")->select();
        $where="cata_id in (".implode(",",$cata).")";
        if($brand_id){
        $where.=" and brand_id=$brand_id";
      }
        $temp=M("product")->distinct(true)->where("cata_id in (".implode(",",$cata).")")->field('brand_id')->select();
        foreach ($temp as $key => $c) {
           $ac[]=$c['brand_id'];
        }

		$this->assign(array(
			 'listname'=>$value,
			 'data'=>M('product_catalog')->where("parent_id=".$data['parent_id'])->select(),
			 'val'=>M('product_catalog')->find($id),
			 'v'=>M("product")->where($where)->select(),
       'h'=>M('product_barnd')->where("id in (".implode(",",$ac).")")->select(),
      'brand_id'=>$brand_id
    		));
		$this->display('Index/header');
	    $this->display();
	}
}