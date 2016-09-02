<?php
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model{
 
 public function _before_insert(&$data, $option){
    
      $config = array( 
       'maxSize'    =>    3145728,   
       'rootPath'   =>    './Public/Uploads/', 
       'savePath'  =>     'goods/',
       'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')  
       ); 
        $upload = new \Think\Upload($config);// 实例化上传类
       //  $info   =   $upload->uploadOne($_FILES['img']);
        $info=$upload->upload();  //完成上传
        /*var_dump($data);
        var_dump($option);
        var_dump($info);*/
  
        if($info){

            $goodsPath=$info['goods_img']['savepath'].$info['goods_img']['savename'];
            $data['goods_img']= $goodsPath;
    

            $img=new \Think\Image();
            $img->open('./Public/Uploads/'.$goodsPath);
            $thumbPath=$info['goods_img']['savepath'].'thumb_'.$info['goods_img']['savename'];
            $img->thumb(80,80)->save("./Public/Uploads/".$thumbPath);
            $data['goods_thumb']=$thumbPath;
         }
   }

}
