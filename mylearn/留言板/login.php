<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/12
 * Time: 18:14
 */

include "mysql_connect.php";

if($_GET["out"]){
    setcookie("cookie","out");
    echo "<script language=\"JavaScript\">location.href='login.php';</script>";
    
}
if($_POST[id]=='admin'){
    $passwd=md5($_POST[passwd]);
    if($passwd=='e1bfd762321e409cee4ac0b6e841963c'){
        setcookie("cookie","ok");
        echo "<script language=\"JavaScript\">location.href='login.php';</script>";
    }
}
include "header.php";
if($_COOKIE['cookie']!='ok'){
?>

<script language="JavaScript">
    function Checklogin() {
        if(myform.id.value==""){
            alert("请填写登录名");
            myform.id.focus();
            return false;
        }
        if(myform.passwd.value==""){
            alert("密码不为空");
            myform.passwd.focus();
            return false;
        }

    }
</script>
<form action=""method="post"name="myform" onsubmit="return Checklogin();">
    用户名: <input type="text" name="id"><br>
    密码： <input type="password" name="passwd"> <input type="submit" value="登陆">

</form>
<?
}else{
    ?>
    <a href="?out=login">退出</a>
    <?
}

?>