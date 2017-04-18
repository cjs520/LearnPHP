<?php
/**
 * Created by PhpStorm.
 * User: chenjiesong
 * Date: 17/3/28
 * Time: 10:30
 */


class userController extends phpBoss{
    public $arr_title=array("title"=>"用户登录");

    function run(){
        extract($this->getTplVars());
        include "ui/login.php";
    }
   function getTplVars(){
        return $this->arr_title;
    }
}


?>