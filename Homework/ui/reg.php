<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">留言板</h1>
        <h4 class="text-center"><a href="index.php?m=login">用户登录</a> |<a href="index.php?m=reg">用户注册|<a href="index.php?m=list">留言展示</a></h4>

    </div>
<div class="row">
        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="username" class="col-sm-5 control-label">用户名</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" style="width:200px" name="username"
                           placeholder="请输入用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="userpwd" class="col-sm-5 control-label">密码</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control"  style="width:200px" name="userpwd"
                           placeholder="请输入密码">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" class="btn btn-default">注册</button>
                </div>
            </div>
        </form>

    </div>


<div id="footer" class="container">
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="navbar-inner navbar-content-center">
            <p class="text-center"> 版权所有 © 2017 Cjayson </p>
        </div>
    </nav>
</div>
</div>
</body>
</html>