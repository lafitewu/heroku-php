<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ytt</title>
</head>
<style>
	* {
		padding: 0;
		margin: 0; 
	} 
	.nav {
		position: fixed;
		top: 0;
		background: white;
		width: 100%;
		height: 30px;
		overflow-x: auto;
	}
	.nav::-webkit-scrollbar {
		display: none;
	}
		.nav ul {
			width: 200%;
			height: 100%;
		}
			.nav ul li {
				float: left;
				list-style: none;
				width: 10%;
				height: 100%;
				text-align: center;
				line-height: 30px;
			}
	iframe {
		margin-top: 30px;
		border: none;
	}
</style>
<body>
	<div class="nav">
		<ul>
			<li>头条</li>
			<li>新闻</li>
			<li>搞笑</li>
			<li>视频</li>
			<li>动漫</li>
			<li>科技</li>
			<li>农业</li>
			<li>社会</li>
			<li>人文</li>
		</ul>
	</div>
	<iframe class="iframe1" src="https://cpu.baidu.com/1040/ee7ce095?scid=9947" width="100%" height="500"> 
		脚本之家使用了框架技术，但是您的浏览器不支持框架，请升级您的浏览器以便正常访问脚本之家。 
	</iframe> 
	<?php  echo "66666"?>
</body>
</html>
<script>
	var H = window.screen.height - 30;
	document.getElementsByClassName('iframe1')[0].height = H;
</script>