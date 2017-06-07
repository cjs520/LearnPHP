<?php
header("Content-Type:text/html;charset=utf-8");
class userController extends phpBoss{
	public $arr_title=array("title"=>"用户登录");
	

	function run(){
	






		if($_POST["username"]&&$_POST["userpwd"]){
			/*if(in_array($_POST["username"], $this->test_user)){
				//echo 'success';

				setcookie('userinfo_name',$_POST["username"],time()-1*3600);
				header('location:news');

			}else{
				echo 'fail';
			}*/
			$db=new dbutil();
			$sql="select * from myuser where user_name=:username";
			$ret=$db->queryForParam($sql,$_POST["username"]);
			if($ret && count($ret)==1){
				$ret=$ret[0];
				if($ret["user_pass"]==$_POST["userpwd"]){
					echo "ok";
				}
				else{
					echo "密码错误";
				}

			}else{
				echo "fail";
			}

		}
		


		extract($this->getTplVars());
		extract($this->arr_title);

		include "ui/login.php";
	}	

	function getTplVars(){
		return $this->arr_title;
	}
}
function login(){
	include "ui/login.php";
}
function register(){
	if($_POST){
		$username=$_POST["username"];
		$userpwd=$_POST["userpwd"];
		if($username==""||$userpwd==""){
			
		}

	}




?>