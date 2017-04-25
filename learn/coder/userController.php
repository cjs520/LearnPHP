<?php
/**
 * Created by PhpStorm.
 * User: chenjiesong
 * Date: 17/3/28
 * Time: 10:30
 */


class userController extends phpBoss{
    public $arr_title=array("title"=>"用户登录");
    public $test_user=array("张三" ,"李四" );

    function run(){
        if($_COOKIE["userinfo_name"]&&trim($_COOKIE["userinfo_name"]!="")){
            header("location:news");
        }
        if($_POST["username"]&&$_POST["userpwd"]){


            if (in_array($_POST["username"], $this->test_user)) {
                //echo "登录成功";
                setcookie("userinfo_name",$_POST["username"],time()+1*3600);
                header("location:news");

            }else{
                echo "登录失败";
            }
        }
        extract($this->getTplVars());
        include "ui/login.php";
    }
   function getTplVars(){
        return $this->arr_title;
    }
}


?>