<!DOCTYPE html>
<?php
	session_start();
	include("functions.php");
?>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<title>Flattern - Flat and trendy bootstrap site template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		
		<!-- css -->
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/bootstrap-responsive.css" rel="stylesheet" />
		<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="css/jcarousel.css" rel="stylesheet" />
		<link href="css/flexslider.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		
		<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
		<!-- Theme skin -->
		<link href="skins/default.css" rel="stylesheet" />
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
		<link rel="shortcut icon" href="ico/favicon.png" />
		
		<!-- =======================================================
			Theme Name: Flattern
			Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
			Author: BootstrapMade.com
			Author URL: https://bootstrapmade.com
		======================================================= -->
		<header>
			<div id="wrapper">
				
				<!-- start header -->
				<header>
					<div class="container ">
						<div class="row nomargin">
							<div class="span12">
								<div class="headnav">
									<ul>
										<li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
										<li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
										<?php if(isset($_SESSION['role'])) { ?>
											<li><a href='logout.php'>Logout</a></li>
										<?php } ?>
										
										
									</ul>
								</div>
								<!-- Signup Modal -->
								<?php
									print_message();
									echo "<br>";
									if(isset($_SESSION['role']))
									{
										echo $_SESSION['role'];
										
									}
								?>
								<div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal" method="post" action="register.php" >
											<div class="control-group">
												<label class="control-label" for="inputEmail">Email</label>
												<div class="controls">
													<input type="text" name="username" placeholder="Email">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputSignupPassword">Password</label>
												<div class="controls">
													<input type="password" name="password" placeholder="Password">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputSignupPassword2">Confirm Password</label>
												<div class="controls">
													<input type="password" name="password2" placeholder="Password">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<button type="submit" name="submit" value="Submit" class="btn">Sign up</button>
												</div>
												<p class="aligncenter margintop20">
													Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
												</p>
											</div>
										</form>
									</div>
								</div>
								<!-- end signup modal -->
								<!-- Sign in Modal -->
								<div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal" method="post" action="login.php">
											<div class="control-group">
												<label class="control-label" for="inputText">Username</label>
												<div class="controls">
													<input type="text" name="username" placeholder="Username">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputSigninPassword">Password</label>
												<div class="controls">
													<input type="password" name="password" placeholder="Password">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<button type="submit" class="btn">Sign in</button>
												</div>
												<p class="aligncenter margintop20">
													Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
												</p>
											</div>
										</form>
									</div>
								</div>
								<!-- end signin modal -->
								<!-- Reset Modal -->
								<div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal">
											<div class="control-group">
												<label class="control-label" for="inputResetEmail">Email</label>
												<div class="controls">
													<input type="text" id="inputResetEmail" placeholder="Email">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<button type="submit" class="btn">Reset password</button>
												</div>
												<p class="aligncenter margintop20">
													We will send instructions on how to reset your password to your inbox
												</p>
											</div>
										</form>
									</div>
								</div>
								<!-- navbar -->
							</div>
						</div>
						<div class="row">
							<div class="span4">
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
								</div>
							</div>
							<div class="span8">
								<div class="navbar navbar-static-top">
									<div class="navigation">
										<nav>
											<ul class="nav topnav">
												<li>
													<a href="index.php">Home </a>
													
												</li>
												<li>
													<a href="history.php">History </a>
													
												</li>
												<li>
													<a href="about.php">About us</a>
													
												</li>
												<li>
													<a href="portfolio-2cols.php">Portfolio</a>
													
												</li>
												<li>
													<a href="contact.php">Contact </a>
												</li>
												<li class="dropdown">
													<a href="#">News<i class="icon-angle-down"></i></a>
													<ul class="dropdown-menu">
														<li><a href="blog-left-sidebar.php">Team news</a></li>
														<li><a href="scoreboards.php">Scoreboard</a></li>
														
													</ul>
												</li>
												<li class="dropdown">
													<a href="#">Members<i class="icon-angle-down"></i></a>
													<ul class="dropdown-menu">
														<li><a href="fans.php">Fans</a></li>
														<li><a href="players.php">Players</a></li>
														
													</ul>
												</li>
												<?php if(isset($_SESSION['role'])){ ?>
											<li>
												<a href="profile.php">Profile</a>												
											</li>
											<?php } ?>
												
											</ul>
										</nav>
									</div>
									<!-- end navigation -->
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- end header -->
				<section id="inner-headline">
					<div class="container">
				<div class="row">
					<div class="span4">
						<div class="inner-heading">
							<h2>Team news</h2>
						</div>
					</div>
					<div class="span8">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
							<li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
							<li class="active">Team news</li>
						</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="content">
				<div class="container">
					<div class="row">
						<div class="span4">
							<aside class="left-sidebar">
								<div class="widget">
									<?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){?> 
									<form action="news.php" method="POST" enctype="multipart/form-data">
										<strong>ADMINISTRATOR NEWS UPLOAD</strong>
										<div class="control-group">
											File:
											<input type="file" name="file"> 				 
											</br>
										</div>
										<div class="control-group">
											Title:			 
											<input type="text" name="title"> </input>
										</div>
										<div class="control-group">
											Text:			 
											<textarea name="text" rows="4" cols="5"> </textarea>
											<div class="controls">
												<input type="submit" value="upload" name="upload">
											</div>
										</div>
									</form>
									<?php } ?>
									
								
									<div class="widget">
										<h5 class="widgetheading">Popular tags</h5>
										<ul class="tags">
											<li><a href="#">Team news</a></li>
											<li><a href="#">Cup</a></li>
											<li><a href="#">Fans</a></li>
											<li><a href="#">Transfers</a></li>
										
										</ul>
									</div>
								</aside>
							</div>
							<div class="span8">
								<?php
									loadimg()
								?>
								
								<article>
									<div class="row">
										<div class="span8">
											<div class="post-quote">
												<div class="post-heading">
													<h3><a href="#">Nice example of quote post format below</a></h3>
												</div>
												<blockquote>
													<i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
												</blockquote>
											</div>
											<div class="bottom-article">
												<ul class="meta-post">
													<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
													<li><i class="icon-user"></i><a href="#"> Admin</a></li>
													<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
													<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
												</ul>
												<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</article>
								<article>
									<div class="row">
									<div class="span8">
									<div class="post-video">
									<div class="post-heading">
									<h3><a href="#">Amazing video post format here</a></h3>
									</div>
									<div class="video-container">
										<iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
										</iframe>
									</div>
									</div>
									<p>
										Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
										ea. Usu ea justo malis, pri quando everti electram ei.
									</p>
									<div class="bottom-article">
										<ul class="meta-post">
											<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
											<li><i class="icon-user"></i><a href="#"> Admin</a></li>
											<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
											<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
										</ul>
										<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
									</div>
									</div>
									</div>
								</article>
								<div id="pagination">
									<span class="all">Page 1 of 3</span>
									<span class="current">1</span>
									<a href="#" class="inactive">2</a>
									<a href="#" class="inactive">3</a>
								</div>
								</div>
								</div>
								</div>
								</section>
								<footer>
						<div class="container">
						<div class="row">
						<div class="span3">
						<div class="widget">
						<h5 class="widgetheading">Browse pages</h5>
						<ul class="link-list">
									<li><a href="about.html">About our company</a></li>
									<li><a href="blog-left-sidebar.php">News</a></li>
									<li><a href="players.php">Meet our team</a></li>
									<li><a href="portfolio-2cols.php">Explore our portfolio</a></li>
								</ul>
						</div>
						</div>
						<div class="span3">
						<div class="widget">
						<h5 class="widgetheading">Get in touch with us</h5>
						<address>
						<strong>Leicester Club,Pte Ltd</strong><br>
                          Filbert Way, Leicester LE2 7FL, Ηνωμένο Βασίλειο
						</address>
						<p>
						<i class="icon-phone"></i> +44 344 815 5000 <br>
						<i class="icon-envelope-alt"></i>lfgclub@gmail.com
						</p>
						</div>
						</div>
						</div>
						</div>
						<div id="sub-footer">
						<div class="container">
						<div class="row">
						<div class="span6">
						<div class="copyright">
						<p>
						<span>&copy; Flattern - All right reserved.</span>
						</p>
						<div class="credits">
						<!--
						All the links in the footer should remain intact.
						You can delete the links only if you purchased the pro version.
						Licensing information: https://bootstrapmade.com/license/
						Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
						-->
						Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
						</div>
						</div>
						<div class="span6">
						<ul class="social-network">
						<li><a href="https://www.facebook.com/lcfc/" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
						</ul>
						</div>
						</div>
						</div>
						</div>
						</footer>
								</div>
								<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
								<!-- javascript
								================================================== -->
								<!-- Placed at the end of the document so the pages load faster -->
								<script src="js/jquery.js"></script>
								<script src="js/jquery.easing.1.3.js"></script>
								<script src="js/bootstrap.js"></script>
								<script src="js/jcarousel/jquery.jcarousel.min.js"></script>
								<script src="js/jquery.fancybox.pack.js"></script>
								<script src="js/jquery.fancybox-media.js"></script>
								<script src="js/google-code-prettify/prettify.js"></script>
								<script src="js/portfolio/jquery.quicksand.js"></script>
								<script src="js/portfolio/setting.js"></script>
								<script src="js/jquery.flexslider.js"></script>
								<script src="js/jquery.nivo.slider.js"></script>
								<script src="js/modernizr.custom.js"></script>
								<script src="js/jquery.ba-cond.min.js"></script>
								<script src="js/jquery.slitslider.js"></script>
								<script src="js/animate.js"></script>
								
								<!-- Template Custom JavaScript File -->
								<script src="js/custom.js"></script>
								
								</body>
								
								</html>
																