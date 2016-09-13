<?php
$s=curl_init();
$url="http://business.sohu.com/20160913/n468297237.shtml";
curl_setopt($s, CURLOPT_URL, $url);
curl_setopt($s,CURLOPT_RETURNTRANSFER,1);
$content=curl_exec($s);
$id=uniqid();
$date=date("Ymd");
$res=file_put_contents('./'.$date."_".$id.'.html', $content);
if($res){
	echo "ok";
}else{
	echo "faile";
}
