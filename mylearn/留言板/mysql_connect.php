<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/7
 * Time: 17:28
 */
$host="localhost";
$db_user="root";
$db_pass="root";
$db_name="myweb";
$timezone="Asia/Shanghai";

$con=@mysqli_connect($host,$db_user,$db_pass) or die("链接失败");
mysqli_select_db($con, $db_name);


header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set($timezone);
?>
