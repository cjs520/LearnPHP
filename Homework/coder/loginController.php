<?php
header("Content-Type:text/html;charset=utf-8");
class loginController{
	public $arr_title=array("title"=>"用户登录");
	

	function run(){
	






		if($_POST["username"]&&$_POST["userpwd"]){

			$db=new dbutil();
			$sql = "select * from myuser where user_name=:username";
			$param=array("username"=>$_POST["username"]);
			$ret = $db->queryForParam($sql, $param);
			if($ret && count($ret)==1){
				$ret=$ret[0];
				if($ret["user_pass"]==$_POST["userpwd"]){

                    echo "<script>alert(\"登录成功\");location.href=\"index.php?m=ms\";</script>";
                   setcookie("cookie","ok".time()+60);

				}
				else{
					echo "<script>alert(\"密码错误\");location.href=\"index.php?m=login\";</script>";
				}

			}else{
				echo "<script>alert(\"无此用户，请注册\");location.href=\"index.php?m=reg\";</script>";
			}

		}



		extract($this->getTplVars());
//		extract($this->arr_title);

		include "ui/login.php";
	}



	function getTplVars(){
		return $this->arr_title;
	}
}





?>

