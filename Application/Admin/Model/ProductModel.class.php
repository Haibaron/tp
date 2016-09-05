<?php
namespace Admin\Model;
use Think\Model;

/**
* 
*/
class ProductModel extends Model{
  //商品的自动验证
  protected $_validate=array();

  protected $insertFields=array('cata_id','title','brand_id','price','desc','content','img','recommend','new','hot','star')

  protected $_auto=array(
    array("create_time","addGoodsTime",1,"function"));  //就是用addGoodsTime函数取完成对create_time字段的自动完成操作

  public function _before_insert(&$data, $option){
    
      $config = array( 
       'maxSize'    =>    3145728,   
       'rootPath'   =>    './Public/upload/', 
       'savePath'  =>     'goods/',
       'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')  
       ); 
        $upload = new \Think\Upload($config);// 实例化上传类
        $info=$upload->upload();  //完成上传
        header("Content-type:text/html;charset=utf-8");
       /* var_dump($info);
        var_dump($data);
        die();*/
        if($info){

            $goodsPath=$info['img']['savepath'].$info['img']['savename'];
            $data['img']="/Public/upload/".$goodsPath;
         }
   }

  public function _before_delete($options){
  //$option包含主键的ID 可以根据主键的ID查询记录---使用unlink函数来删除文件
    //$option['where']['id']
    $imgurl=$this->field('img,goods_thumb')->where("id=".$options["where"]["id"])->find();
    foreach ($imgurl as  $v) {
       unlink("./Public/Uploads/".$v);  
    }

  }



}