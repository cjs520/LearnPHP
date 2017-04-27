<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/7
 * Time: 17:36
 */
include "mysql_connect.php";
include "header.php";

if ($_POST['submit']) {
    $sql = "INSERT INTO message(id,user,title,content,lastdate)" .
        " VALUE ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
    mysqli_query($con, $sql);
   
}
?>
<script language="JavaScript">
    function CheckPost() {
        if(myform.user.value==""){
            alert("请填写用户")
            myform.user.focus();
            return false;
        }
        if(myform.title.value.length<5){
            alert("标题不能少于5个字符");
            myform.title.focus();
            return false;
        }
        if(myform.content.value==""){
            alert("必须填写留言内容")
            myform.content.focus();
            return false;
        }
    }
</script>
<form action="adddb.php"method="post" name="myform" onsubmit="return CheckPost();">
    用户名：<input type="text"size="10" name="user"><br>
    标题<input type="text"  name="title"><br>
    内容：<textarea name="content" cols="60" rows="9"></textarea><br>
    <input type="submit" name="submit" value="发布留言">
</form>
