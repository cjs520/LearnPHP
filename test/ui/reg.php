<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title><?php echo $title;?></title>
    
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">留言板</h1>
        <h4 class="text-center"><a href="index.php?m=login">用户登录</a> |<a href="index.php?m=reg">用户注册</h4>

    </div>
<div >
        <form  role="form" method="post">
            <div>
                <label for="username" >用户名</label>
                <div >
                    <input type="text"  style="width:200px" name="username"
                           placeholder="请输入用户名">
                </div>
            </div>
            <div >
                <label for="userpwd" >密码</label>
                <div >
                    <input type="password"   style="width:200px" name="userpwd"
                           placeholder="请输入密码">
                </div>
            </div>

            <div >
                <div >
                    <button type="submit" >注册</button>
                </div>
            </div>
        </form>

    </div>



</div>
</body>
</html>