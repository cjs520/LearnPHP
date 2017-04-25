<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VIP<?php echo $title;?>｜网站名称 </title>
</head>
<body>
	<div style="background: #dcdcdc;line-height: 30pt;border-bottom: 1px solid red;">
		<?php echo webSiteName;?>
		<?php
			if(!$this->isinner) 
				echo "&&旗下bb网";
		?>
		<a href="news">主站新闻</a> |
		<a href="bbnews">bb新闻</a> |
		<a href="user">用户登录</a> |
		<a href="exit">退出登录</a>
	</div>
	