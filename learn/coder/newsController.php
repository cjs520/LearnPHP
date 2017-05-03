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
        $db=new dbutil();
        $result=$db->queryForArray("SELECT * FROM `news`");
        var_export($result);
    }


    function getTplVars(){
        return $this->arr_title;
    }
}


?>