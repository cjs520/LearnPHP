<?php

setcookie( "userinfo_name",$_POST["username"],time()-1*3600 );
header("location:user ");
?>