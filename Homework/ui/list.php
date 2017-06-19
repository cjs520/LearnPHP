
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
    </div>


<?php

include "../db/dbutil.php";


$db=new dbutil();
$sql="SELECT * FROM message ORDER BY id DESC";
$row=$db->queryForArray($sql);

foreach ($row as $value){

?>

<div class="container">


        <table class="table table-striped table-bordered table-hover table-condensed">

            <tr>
                <td>标题：<?=$value['title'] ?></td>
            </tr>
            <tr>
                <td>内容：<?=$value['content'] ?></td>
            </tr>
            <tr>
                <td>发表时间:<?=$value['lastdate']?></td>
            </tr>

        </table>


</div>


<?php }?>
    <?php
    if($_POST['del']){
        $sql = "DELETE FROM  `message` WHERE  `id` =$_POST[num]";
        $del=$db->queryForArray($sql);
    }
    ?>
    <form action="" method="post">
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-4">
                删除第<input type="text"size="2" name='num'">条留言
                <input type="submit"name="del" value="删除" class="btn btn-default">
                <button type="button" name="return" class="btn btn-default" onclick="return last()">退出</button>
            </div>
        </div>
    </form>

    <script language="JavaScript">

        function last() {
            location.href="index.php?m=login";
        }
    </script>
</div>
</body>
</html>