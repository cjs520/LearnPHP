<?php

require "config.php";
require ROOTPATH."phpBoss.php";
require ROOTPATH."../leader.php";
$type=$_GET["m"];



$mFile=ROOTPATH.$type."Controller.php";
require $mFile;

$isvip=true;

$className=$type."Controller";
$get_name=new $className();
$get_name->run();

?>