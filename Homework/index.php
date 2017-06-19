<?php


include "db/dbutil.php";



$type=$_GET["m"];



$mFile="coder/".$type."Controller.php";
require $mFile;



$className=$type."Controller";

$get_name=new $className();
/*$get_n=$_GET['n'];
if(method_exists($get_name,$get_n)){
    $get_name->$get_n();
}else{
    $get_name->run();
}*/
$get_name->run();

?>

