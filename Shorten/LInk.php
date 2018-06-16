<?php
/**
 * Created by PhpStorm.
 * User: chenjiesong
 * Date: 17/8/15
 * Time: 16:24
 */
include_once("db/dbutil.php"); //连接数据库
$url = $_GET['url'];

if (isset($url) && !empty($url)) {
    $db = new dbutil();
    $sql = "select * from url where surl='$url'";
    $row = $db->queryForArray($sql);

    if (!empty($row)) {
        foreach ($row as $value) {

            $real_url = $value['url'];
            if(strpos($real_url,'http://') !== false||strpos($real_url,'https://') !== false) {


                header("Location:$real_url");
                exit();
            }else{


                header("Location:http://$real_url");

            }



        }
    }else {
        header("Location:404.html");

    }
}else {
    header("Location:404.html");
}

?>