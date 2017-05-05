<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/5/4
 * Time: 23:51
 */
$url="http://quanzhou.tianqi.com";
$fp=@fopen($url, "r") or die("超时");
$fcontents=file_get_contents($url);
preg_match("<title>/(.*)/i</title>",$fcontents,$rg );
print_r($rg);

