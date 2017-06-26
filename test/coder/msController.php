<?php


class msController{
    public $arr_title=array("title"=>"留言板");


    function run(){

        if ($_POST) {
            $title = $_POST["title"];
            $content = $_POST["content"];
            $db=new dbutil();
            $sql = "INSERT INTO message(title,content,lastdate) VALUES(:title,:content,now())";
            $param = array("title" => $title, "content" => $content);
            $db->queryForParam($sql, $param);
            $userid = $db->db->lastInsertId();
            if ($userid) {
                    
                    header("location:index.php?m=ms");

            }

        }
        
            include "ui/msboard.php";
        


    }
}

?>

