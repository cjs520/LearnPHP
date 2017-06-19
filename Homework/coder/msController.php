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
                    setcookie("cookie","ok".time()+60);
                    echo "<script>alert(\"留言成功\");location.href=\"index.php?m=ms\";</script>";

            }

        }
        if (isset($_COOKIE["cookie"])){
            include "ui/msboard.php";
        }else{
            echo "<script>alert(\"请登录\");location.href=\"index.php?m=login\"</script>";
        }


    }
}

?>

