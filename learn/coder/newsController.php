<?php
class newsController extends phpBoss{
	public $arr_title=array("title"=>"新闻列表");



	function run(){
		extract($this->getTplVars());


		global $isvip;
		if($isvip){
			include "ui/newslist_vip.php";
		}else{
			include "ui/newslist.php";
		}

		

	}


	function getTplVars(){
		return $this->arr_title;
	}	
}


?>