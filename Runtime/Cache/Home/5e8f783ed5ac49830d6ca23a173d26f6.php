<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<head>
		<title>Orient</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo CSS_URL; ?>/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo CSS_URL; ?>/pace.css">
	    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/custom.css">

	    <!-- js -->
	    <script src="<?php echo JS_URL; ?>/jquery-2.1.3.min.js"></script>
	    <script src="<?php echo JS_URL; ?>/bootstrap.min.js"></script>
	    <script src="<?php echo JS_URL; ?>/pace.min.js"></script>
	    <script src="<?php echo JS_URL; ?>/modernizr.custom.js"></script>
	</head>

	<body id="single">
		<div class="container">	
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><a href="../index.html"><b>Orient</b></a></h1>
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
    							<li class="Orient-navBar-item"><a href="../index.html" data-hover="Home">Home</a></li>
    							<li class="Orient-navBar-item"><a href="blog.html" data-hover="Blog">Blog</a></li>
    							<li class="Orient-navBar-item"><a href="about.html" data-hover="About">About</a></li>
    							<li class="Orient-navBar-item"><a href="contact.html" data-hover="Contact">Contact</a></li>
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
					<main class="col-md-8">
						<article class="post post-1">
							<header class="entry-header">
								<h1 class="entry-title">Orient's test</h1>
								<div class="entry-meta">
			
									<span class="post-date"><a href="#"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00">February 2, 2016</time></a></span>
			
									<span class="post-author"><a href="#">Orient</a></span>
			
									<span class="comments-link"><a href="#">0 Comments</a></span>
								</div>
							</header>
							<div class="entry-content clearfix">
								<p>There is the article's abstract.</p>
								<p>There is the article's content.</p>
								<p>There is the article's content.</p>
								<p>There is the article's content.</p>
							</div>
						</article>
					</main>
					<aside class="col-md-4">
						<div class="widget widget-recent-posts">		
							<h3 class="widget-title">Recent Posts</h3>		
							<ul>
								<li>
									<a href="#">Orient's test</a>
								</li>
								<li>
									<a href="#">Orient's test</a>
								</li>
								<li>
									<a href="#">Orient's test</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-archives">		
							<h3 class="widget-title">Archives</h3>		
							<ul>
								<li>
									<a href="#">2017</a>
								</li>
								<li>
									<a href="#">2016</a>
								</li>
							</ul>
						</div>

						<div class="widget widget-category">		
							<h3 class="widget-title">Category</h3>		
							<ul>
								<li>
									<a href="#">Objective-C</a>
								</li>
								<li>
									<a href="#">Python</a>
								</li>
								<li>
									<a href="#">PHP</a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>

		<div class="comment">
			
			<div class="comment-submit">
				<hr>
				<div class="comment-title">评论：</div>
				<br>
				<form action="../PHP/test.php" method="post">
					<textarea class="comment-form"></textarea>
					<input class="comment-submit-button" type="submit" name="提交">
				</form>
			</div>

			<div class="comment-content">
				
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

		<script src="<?php echo JS_URL; ?>/script.js"></script>

	</body>
</html>