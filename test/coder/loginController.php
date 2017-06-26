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

					

                    header("location:index.php?m=ms");
                  

				}
				else{
					header("location:index.php?m=login");
				}

			}else{
				header("location:index.php?m=reg");
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

