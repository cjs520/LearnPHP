<?php



class listController{
    function run(){
        if (isset($_COOKIE["add"])){
            include "ui/list.php";
        }else{
            echo "<script>alert(\"请登录\");location.href=\"index.php?m=login\"</script>";
        }
    }
}