<?php
header("Content-type:text/html;charset=utf-8");
	class dbutil{
		public $db=false;


		function __construct(){
			$this->db =new PDO('mysql:host=localhost;dbname=myweb','root','root');
		}



		function queryForArray($sql){



			$ret=$this->db->query($sql);
			return $ret->fetchAll(PDO::FETCH_ASSOC);

		}

		function queryForParam($sql,$param){
			$pre_ret=$this->db->prepare($sql);
			$pre_ret->bindParam(":username",$param);
			$pre_ret->execute();
			return $pre_ret->fetchAll(PDO::FETCH_ASSOC);
		}




	}



?>