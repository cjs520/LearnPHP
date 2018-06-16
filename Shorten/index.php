<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorten</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-center">网址缩短</h1>


    <form class="form-horizontal" method="post">
        <div class="form-group">

            <div class="col-sm-offset-4 col-sm-5">
                输入将要缩短的长网址:
                <input type="text" class="form-control" style="width:400px" name="url"   placeholder="请输入要缩短的网址(例如：www.baidu.com)">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
                <button type="submit" name="bu" >缩短</button>
                <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                    <span class="bds_more">分享到：</span><a
                            class="bds_qzone" title="分享到QQ空间" href="#"></a><a class="bds_tsina" title="分享到新浪微博" href="#"></a><a
                            class="bds_tqq" title="分享到腾讯微博" href="#"></a><a class="bds_renren" title="分享到人人网" href="#"></a><a
                            class="bds_t163" title="分享到网易微博" href="#"></a><a class="shareCount" href="#" title="累计分享32503次">3.3万</a>
                </div>
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=664244"
                        src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=417465"></script>
                <script type="text/javascript">                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
                </script>
            </div>

    </form>
</div >




</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: chenjiesong
 * Date: 17/8/15
 * Time: 16:32
 */
include "db/dbutil.php";


include "Shorten.php";
run();


?>