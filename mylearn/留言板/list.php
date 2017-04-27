<?php

include "mysql_connect.php";
include "config.php";
if ($_POST['submit']) {
    $sql = "DELETE FROM  `message` WHERE  `id` =$_POST[num]";
    mysqli_query($con, $sql);

}
?>

<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
    <?
    $sql="SELECT * FROM message ORDER BY id DESC ";
    $query=mysqli_query($con,$sql );
    while($row=mysqli_fetch_array($query)) {
        ?>
        <tr bgcolor="#eff3ff">
            <td>标题：<?=$row[title]?> 用户：<?=$row[user]?></td>
        </tr>
        <tr bgColor="#ffffff">
            <td>内容：<? echo htmtocode($row[content]); ?> </td>
        </tr>
        <tr>
            <td>发表时间:<?=$row[lastdate]?></td>
        </tr>
        <?
             }
     ?>
</table>
<form action=""method="post">
    <div style="text-align:center">
        删除第<input type="text"size=2 name=num">条留言
        <input type="submit"name="submit" value="删除">
    </div>

</form>
