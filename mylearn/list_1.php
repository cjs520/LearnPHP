<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/12
 * Time: 21:00
 */
include "mysql_connect.php";
$pagesize=5;
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];


$numq=mysqli_query($con,"SELECT * FROM `test`");
$num=mysqli_num_rows($numq);

if($_GET[page]){
    $pageval=$_GET[page];
    $page=($pageval-1)*$pagesize;
    $page .=',';
}


if($num > $pagesize){
    if($pageval<=1)$pageval=1;
    echo "共$num 条 ".
        "<a href=$url?page=".($pageval-1).">上一页</a> "."<a href=$url?page=".($pageval+1).">下一页</a>";

}

 $sql="SELECT * FROM `test` limit $page $pagesize";
$query=mysqli_query($con,$sql );
while ($row=mysqli_fetch_array($query)){
    echo "<hr><b>".$row[name]."|".$row[sex];
}
?>

