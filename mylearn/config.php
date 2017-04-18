<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/12
 * Time: 18:06
 */
function htmtocode($content){
    $content=str_replace("\n","<br>" ,str_replace(" ","&nbsp" ,$content ) );
    return $content;
}
