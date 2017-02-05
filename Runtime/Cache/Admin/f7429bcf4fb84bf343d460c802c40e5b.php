<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>博客后台管理</title>
		<meta http-equiv=content-type content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<frameset border=0 framespacing=0 rows="60, *" frameborder=0>
		<!-- frame的src属性需要设置绝对路径 -->
		<frame name="head" src="/index.php/Admin/Index/head" frameborder=0 noresize scrolling=no />
			<frameset cols="170, *">
				<frame name="left" src="/index.php/Admin/Index/left" frameborder=0 noresize />
				<frame name="right" src="/index.php/Admin/Index/right" frameborder=0 noresize scrolling=yes />
			</frameset>
	</frameset>
	<noframes>
	</noframes>
</html>