<?php include "header.php"?>
<div>
    <form  method="post">
        <h2><?php echo $title;?></h2>
        <label for="">用户名</label>
        <input type="text" name="username" placeholder="请输入用户名">
        <label for="">密码</label>
        <input type="password" name="userpwd" placeholder="请输入密码">
        <button>login</button>


    </form>
</div>
<?php include "footer.php"?>