<?php /* Smarty version Smarty-3.1.6, created on 2017-01-27 13:40:50
         compiled from "/usr/local/Cellar/nginx/1.10.2_1/html/Home/View/Index/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:342008297588add624dafb5-56250024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c82157141b6b061d73b909d7a8b71db48f6e90e' => 
    array (
      0 => '/usr/local/Cellar/nginx/1.10.2_1/html/Home/View/Index/contact.html',
      1 => 1485492038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342008297588add624dafb5-56250024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588add6256ecd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588add6256ecd')) {function content_588add6256ecd($_smarty_tpl) {?><!DOCTYPE html>
<html oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<head>
		<title>Orient</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="<<?php ?>?php echo CSS_URL; ?<?php ?>>bootstrap.min.css">
		<link rel="stylesheet" href="<<?php ?>?php echo CSS_URL; ?<?php ?>>ionicons.min.css">
		<link rel="stylesheet" href="<<?php ?>?php echo CSS_URL; ?<?php ?>>pace.css">
	    <link rel="stylesheet" href="<<?php ?>?php echo CSS_URL; ?<?php ?>>custom.css">

	    <!-- js -->
	    <script src="<<?php ?>?php echo JS_URL; ?<?php ?>>jquery-2.1.3.min.js"></script>
	    <script src="<<?php ?>?php echo JS_URL; ?<?php ?>>bootstrap.min.js"></script>
	    <script src="<<?php ?>?php echo JS_URL; ?<?php ?>>pace.min.js"></script>
	    <script src="<<?php ?>?php echo JS_URL; ?<?php ?>>modernizr.custom.js"></script>
	</head>

	<body id="page">
		<div class="container">	
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><a href="__CONTROLLER__/index.orient"><b>Orient</b></a></h1>
						</div>
					</div><!-- col-md-4 -->
					<div class="col-md-8 col-sm-7 col-xs-4">
						<nav class="main-nav" role="navigation">
							<!-- <div class="navbar-header">
  								<button type="button" id="trigger-overlay" class="navbar-toggle">
    								<span class="ion-navicon"></span>
  								</button>
							</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  								<ul class="nav navbar-nav navbar-right">
    								<li class="cl-effect-11"><a href="../index.html" data-hover="Home">Home</a></li>
    								<li class="cl-effect-11"><a href="blog.html" data-hover="Blog">Blog</a></li>
    								<li class="cl-effect-11"><a href="about.html" data-hover="About">About</a></li>
    								<li class="cl-effect-11"><a href="contact.html" data-hover="Contact">Contact</a></li>
  								</ul>
							</div><!-- /.navbar-collapse -->

							<ul class="Orient-navBar">
    							<li class="Orient-navBar-item"><a href="__CONTROLLER__/index.orient" data-hover="Home">Home</a></li>
    							<li class="Orient-navBar-item"><a href="__CONTROLLER__/blog.orient" data-hover="Blog">Blog</a></li>
    							<li class="Orient-navBar-item"><a href="__CONTROLLER__/about.orient" data-hover="About">About</a></li>
    							<li class="Orient-navBar-item"><a href="__CONTROLLER__/contact.orient" data-hover="Contact">Contact</a></li>
  							</ul>

						</nav>

						<!-- <div id="header-search-box">
							<a id="search-menu" href="#"><span id="search-icon" class="ion-ios-search-strong"></span></a>
							<div id="search-form" class="search-form">
								<form role="search" method="get" id="searchform" action="#">
									<input type="search" placeholder="Search" required>
									<button type="submit"><span class="ion-ios-search-strong"></span></button>
								</form>				
							</div>
						</div> -->
						
					</div><!-- col-md-8 -->
				</div>
			</header>
		</div>

		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<h1 class="page-title">Contact</h1>
						<article class="post">
							<div class="entry-content clearfix">
								<form action="../PHP/test.php" method="post" class="contact-form">
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<input type="text" name="name" placeholder="Name" required>
											<input type="email" name="email" placeholder="Email" required>
											<input type="text" name="subject" placeholder="Subject" required>
											<textarea name="message" rows="7" placeholder="Your Message" required></textarea>
											<button class="btn-send btn-5 btn-5b ion-ios-paperplane"><span>Drop Me a Line</span></button>
										</div>
									</div>	<!-- row -->
								</form>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
		<footer id="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2016 orient-zy.cn</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Mobile Menu -->
		<!-- <div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
			<nav>
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div> -->

		<script src="<<?php ?>?php echo JS_URL; ?<?php ?>>script.js"></script>
		
	</body>
</html>
<?php }} ?>