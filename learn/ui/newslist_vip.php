<?php include "header.php"?>
<?php 
    $db=new dbutil();
    $result=$db->queryForArray('SELECT * FROM `news`');
    echo "<ol>";
    foreach ($result as $value){
        echo "<li><a href='".$value['links']."' target='_blank'>".$value['news_title']."</a>  </li> ";
    }
    echo "</ol>"
?>
<?php include "footer.php"?>