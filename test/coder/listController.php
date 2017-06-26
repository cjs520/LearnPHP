<?php



class listController{
    function run(){
        if($_POST){
            $db=new dbutil();
            $sql = "DELETE FROM  `message` WHERE  `id` =$_POST[num]";
            $db->queryForArray($sql);
            header("location:index.php?m=list");
        }
            include "ui/list.php";
       }
}

?>