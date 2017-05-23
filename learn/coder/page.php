<?php
class page{
    function get_friendLinks(){
        $link1=array(
            "title"=>"百度",
            "href"=>"https://www.baidu.com",
            "target"=>"_blank"
        );
        $link2=array(
            "title"=>"谷歌",
            "href"=>"https://www.google.com.hk",
            "target"=>"_blank"
        );
        $links[]=$link1;
        $links[]=$link2;
        return $links;
    }
}