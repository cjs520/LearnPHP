<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/27
 * Time: 21:36
 */
header("Content-type:text/html;charset=utf-8");

$row=array(array("新闻标题","新闻内容"),array("新闻标题2","新闻内容2"));

foreach ($row as $id=>$val){
    $title=$val[0];
    $content=$val[1];
    $path=$id.".html";
    $fp=fopen("tmp.html","r" );//只读打开模板
    $str=fread($fp, filesize("tmp.html"));//读取模板内容
    $str=str_replace("{title}",$title ,$str );
    $str=str_replace("{content}",$content ,$str );
    fclose($fp);
    $handle=fopen($path,"w" );//写入方式打开新闻路径
    fwrite($handle, $str);//把刚才替换的内容写入生成的HTML
    fclose($handle);
    echo "生成成功";
}
?>