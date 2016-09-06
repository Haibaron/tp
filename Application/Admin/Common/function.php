<?php 
  function user_stauts($stauts){
	switch ($stauts) {
		case '-1':
		return "<span class='label label-primary'>禁用</span>";
			break;
		case '0':
		return "<span class='label label-success'>启用</span>";
			break;
		default:
			# code...
			break;
	}
}