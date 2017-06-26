
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            background: url("img/bg.jpg") center/cover fixed no-repeat;
            color: white;
        }
    </style>


</head>
<body  >
<div >
    <div >
        <center><h2 >留言板</h2></center>
    </div>


<?php



$db=new dbutil();
$sql="SELECT * FROM message ORDER BY id DESC";
$row=$db->queryForArray($sql);

foreach ($row as $value){

?>
    <center>
        <div >


            <table >
                <?=$value['id']?>
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
    </center>



<?php
}

?>

    <form action="" method="post">
        <div >
            <center>
                <div >
                    删除第<input type="text"size="2" name='num'">条留言
                    <!-- <input type="submit" name="del" value="删除"  > -->
                    <button type="submit" name="del" >删除</button>
                    <button type="button" name="return"  onclick="return last()">退出</button>
                </div>
            </center>

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