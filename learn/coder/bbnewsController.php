<?php
class bbnewsController implements leader{
	public $arr_title=array("title"=>"bb新闻列表");



	function run(){
		extract($this->getTplVars());


		global $isvip;
		
		include "ui/newslist.php";
		
	}


	function getTplVars(){
		return $this->arr_title;
	}	
}


?>