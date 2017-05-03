<?php
header("Content-type:text/html;charset=utf-8");

class dbutil{
	

	
	public $db=false;
	function __construct()
	{
		$this->db=new PDO('mysql:host=localhost;dbname=myweb','root',	'root');

	}
	function queryForArray($sql){
		$result=$this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_NUM);
	}
}





?>