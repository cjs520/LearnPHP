
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='css/css.css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/supersized.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>






<div class="page-container">
    <h1>Login</h1>
    <h4 > <a href="index.php?m=login">用户登录</a> |<a href="index.php?m=reg">用户注册</a></h4>


    <form   method="post">
        <div >

            <div >
                <input type="text"  class="username" style="width:200px" name="username"
                       placeholder="请输入用户名">
            </div>
        </div>
        <div >

            <div >
                <input type="password"  class="password" style="width:200px" name="userpwd"
                       placeholder="请输入密码">
            </div>
        </div>

        <div >
            <div >
                <button  >登录</button>
            </div>
        </div>
        <div class="connect">
            <p>Or connect with:</p>
            <p>
                <a class="facebook" href=""></a>
                <a class="twitter" href=""></a>
            </p>
        </div>
    </form>

</div>





    <!-- Javascript -->
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/supersized.3.2.7.min.js"></script>
    <script src="js/supersized-init.js"></script>
    <script src="js/scripts.js"></script>
    
</body>
</html>