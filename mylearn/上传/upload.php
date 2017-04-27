<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/26
 * Time: 0:38
 */
header("Content-type:text/html;charset=utf-8");
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])){


    $upfile=$_FILES["upfile"];
    $name=$upfile["name"];
    $type=$upfile["type"];
    $size=$upfile["size"];
    $tmp_name=$upfile["tmp_name"];
    $error=$upfile["error"];

    switch ($type){
        case 'image/pjpeg':$ok=1;
            break;
        case 'image/jpeg':$ok=1;
            break;
        case 'image/gif':$ok=1;
            break;
        case 'image/png':$ok=1;
            break;
    }
    if ($ok&&$error=='0'){
        move_uploaded_file($tmp_name, 'upload/'.$name);
        echo "上传成功";
    }else{
        echo "请上传图片";
    }


}
?>

<form action="" enctype="multipart/form-data" method="post" name="upform">
    上传文件：
    <input type="file" name="upfile">
    <input type="submit" value="上传"><br>
</form>
