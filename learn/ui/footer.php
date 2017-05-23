	<div style="margin-top: 300px;text-align: center;width: 100%;height: 80px;background: #dcdcdc;padding-top: 20px">
		<p>
			友情链接：
			<?php
				$links=new page();
				$ret=$links->get_friendLinks();
				foreach ($ret as $value){
					echo "<a href='".$value['href']."' target='".$value['target']."'>".$value['title']."</a>   ";
				}



			?>
		</p>

		版权所有 © 2017 Mozilla Firefox. 北京谋智火狐信息技术有限公司
	</div>

</body>
</html>	