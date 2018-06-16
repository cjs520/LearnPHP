<?php

function code62($x)
{
    $show = '';
    while ($x > 0) {
        $s = $x % 62;
        if ($s > 35) {
            $s = chr($s + 61);
        } elseif ($s > 9 && $s <= 35) {
            $s = chr($s + 55);
        }
        $show .= $s;
        $x = floor($x / 62);
    }
    return $show;
}

function shorturl($url)
{
    $url = crc32($url);
    $result = sprintf("%u", $url);
    return code62($result);
}

function run()
{

    if (isset($_POST['bu'])) {
        if ($_POST["url"] == "" ){
            echo "<script>alert(\"请输入地址\")</script>";
        } else {
            $url = $_POST["url"];
            $surl = shorturl($url);
            $db = new dbutil();
            $sql = "INSERT INTO url(surl,url) VALUES (:surl,:url);";
            $param = array("surl" => $surl, "url" => $url);
            $db->queryForParam($sql, $param);
            $id = $db->db->lastInsertId();
            if ($id) {
                $sql = "select * from url id order by id desc limit 0,1";
                $row = $db->queryForArray($sql);
                foreach ($row as $value) {

                    $surl = $value["surl"];
                }
                $re = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"] . $surl;
                $str = "<div class='col-sm-offset-4 col-sm-5'>
                缩短后的网址:
                <input type='text' class='form-control' style='width:400px' name='url'  value='$re' readonly=‘true’>
            </div>";
                echo $str;
            } else {
                echo " <script>alert(\"该链接已存在\")</script>";
                $sql = "select * from url WHERE url='$url'";
                $row = $db->queryForArray($sql);
                foreach ($row as $value) {

                    $surl = $value["surl"];
                }
                $re = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"] . $surl;
                $str = "<div class='col-sm-offset-4 col-sm-5'>
                缩短后的网址:
                <input type='text' class='form-control' style='width:400px' name='url'  value='$re' readonly=‘true’>
            </div>";
                echo $str;
            }
        }
    }
}







