<?php


include "db/dbutil.php";



$type=$_GET["m"];



$mFile="coder/".$type."Controller.php";
require $mFile;



$className=$type."Controller";

$get_name=new $className();

$get_name->run();

?>

