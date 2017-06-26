<?php
header("Content-Type:text/html;charset=utf-8");
class regController
{
    public $arr_title=array("title"=>"用户注册");
    function run()
    {
        if ($_POST) {
            $username = $_POST["username"];
            $userpwd = $_POST["userpwd"];
            if ($username == "" || $userpwd == "") {
                echo "用户或密码不为空";
            } elseif (!preg_match("/^[a-zA-z]\w{2,19}$/i", $username)) {
                echo "用户不合法,必须以字母开头";
            } elseif (!preg_match("/^\w{3,20}$/i", $userpwd)) {
                echo "密码不合法,至少3位";
            } else {
                $db = new dbutil();
                $sql = "INSERT INTO myuser(user_name,user_pass) VALUE(:username,:userpwd) ";
                $param = array("username" => $username, "userpwd" => $userpwd);
                $db->queryForParam($sql, $param);
                $userid = $db->db->lastInsertId();
                if ($userid) {
                   header("location:index.php?m=login");
                } else {
                    header("location:index.php?m=reg");
                }
            }
        }
        include "ui/reg.php";
    }
}
?>

