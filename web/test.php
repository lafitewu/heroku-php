<?php
	$mysql_server_name='den1.mysql6.gear.host'; //改成自己的mysql数据库服务器
 
	$mysql_username='lafitedata'; //改成自己的mysql数据库用户名
 
	$mysql_password='950817dsz!'; //改成自己的mysql数据库密码
 
	$mysql_database='uesr'; //改成自己的mysql数据库名
	$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
	echo "双击666";
?>