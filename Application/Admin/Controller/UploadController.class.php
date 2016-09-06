<?php
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!session('admin_name')){
			$this->error('还没有登录，滚回登录去',U('Admin/AuthLogin/login'));
		}
	}
    public function uploads(){
    	   $config = array( 
       'maxSize'    =>    3145728,   
       'rootPath'   =>    './Public/upload/', 
       'savePath'  =>     'goods/',
       'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')  
       ); 
        $upload = new \Think\Upload($config);// 实例化上传类
        $info=$upload->uploadOne($_FILES['file']);  //完成上传
        header("Content-type:text/html;charset=utf-8");
       /* var_dump($info);
        var_dump($data);
        die();*/
        if($info){

            $goodsPath=$info['img']['savepath'].$info['img']['savename'];
            $data['img']="/Public/upload/".$goodsPath;
         }
     }




}
