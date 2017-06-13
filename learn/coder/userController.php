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
			$sql = "select * from myuser where user_name=:username";
			$param=array("username"=>$_POST["username"]);
			$ret = $db->queryForParam($sql, $param);
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
//		extract($this->arr_title);

		include "ui/login.php";
	}
	function login()
	{
		include "ui/reg.php";
	}

	function reg()
	{
		if ($_POST) {
			$username = $_POST["username"];
			$userpwd = $_POST["userpwd"];
			if ($username == "" || $userpwd == "") {
				echo "用户或密码不为空";
			}
			elseif (!preg_match("/^[a-zA-z]\w{2,19}$/i",$username)){
				echo "用户不合法,必须以字母开头";
			}elseif (!preg_match("/^\w{3,20}$/i",$userpwd)){
				echo "密码不合法,至少3位";
			}else{
				$db=new dbutil();
				$sql="INSERT INTO myuser(user_name,user_pass) VALUE(:username,:userpwd) ";
				$param=array("username"=>$username,"userpwd"=>$userpwd);
				$db->queryForParam($sql,$param);
				$userid=$db->db->lastInsertId();
				if ($userid){
					echo "注册成功";
				}
				else{
					echo "注册失败";
				}
			}
		}
		include "ui/reg.php";
	}
	function getTplVars(){
		return $this->arr_title;
	}
}






?>