<?php /* Smarty version Smarty-3.1.6, created on 2017-01-27 15:20:22
         compiled from "/usr/local/Cellar/nginx/1.10.2_1/html/Admin/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:268162714588af4b6c914b3-79396685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c59c8636c20a08c7967a8b7e266e745c64706d' => 
    array (
      0 => '/usr/local/Cellar/nginx/1.10.2_1/html/Admin/View/Index/index.html',
      1 => 1485501559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268162714588af4b6c914b3-79396685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588af4b6cb16a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588af4b6cb16a')) {function content_588af4b6cb16a($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>博客后台管理</title>
		<meta http-equiv=content-type content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<frameset border=0 framespacing=0 rows="60, *" frameborder=0>
		<!-- frame的src属性需要设置绝对路径 -->
		<frame name="head" src="__CONTROLLER__/head" frameborder=0 noresize scrolling=no />
			<frameset cols="170, *">
				<frame name="left" src="__CONTROLLER__/left" frameborder=0 noresize />
				<frame name="right" src="__CONTROLLER__/right" frameborder=0 noresize scrolling=yes />
			</frameset>
	</frameset>
	<noframes>
	</noframes>
</html><?php }} ?>