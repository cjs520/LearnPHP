<?php

function delcookie(){
    setcookie( "cookie",'',time()-1*3600 );
    setcookie( "add",'',time()-1*3600 );
}
function addcookie(){
    setcookie("add","check",time()+60);
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>


    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">留言板</h2>
            <form class="form-horizontal" method="post" name="myform" onsubmit="return CheckPost();">
                <div class="form-group">
                    <label class="col-sm-4 control-label">标题</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="title" placeholder="请输入标题">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">内容：</label>
                    <div class="col-sm-5">
           <textarea type="password" class="form-control" name="content" cols="60" rows="9"
                     placeholder="请输入内容"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" name="submit" class="btn btn-default">发布留言</button>
                        <button type="button" name="exit" class="btn btn-default" onclick="return ex()"><?php delcookie();?> 退出</button>
                        <button type="button" name="show" class="btn btn-default" onclick="return showms()"><?php addcookie();?>查看留言</button>
                    </div>
                </div>
            </form>


            <script language="JavaScript">
                function CheckPost() {

                    if (myform.title.value.length < 5) {
                        alert("标题不能少于5个字符");
                        myform.title.focus();
                        return false;
                    }
                    if (myform.content.value == "") {
                        alert("必须填写留言内容")
                        myform.content.focus();
                        return false;
                    }
                };
                function ex() {

                    location.href="index.php?m=login";
                };
                function showms() {
                    location.href = "index.php?m=list";

                };
            </script>

        </div>
    </div>
    </body>
    </html>
