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
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
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
</head>

<body>
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
									echo $_SESSION['username'];
									
								}
							?>
                        <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="mySignupModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="register.php">
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
                                            <button type="submit" name="submit" value="Submit" class="btn">Sign
                                                up</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            Already have an account? <a href="#mySignin" data-dismiss="modal"
                                                aria-hidden="true" data-toggle="modal">Sign in</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signup modal -->
                        <!-- Sign in Modal -->
                        <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="mySigninModalLabel" aria-hidden="true">
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
                                            Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true"
                                                data-toggle="modal">Reset</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signin modal -->
                        <!-- Reset Modal -->
                        <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="myResetModalLabel" aria-hidden="true">
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
                                                <li><a href="blog-right-sidebar.html">Scoreboard</a></li>

                                            </ul>
                                        </li>
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
                            <h2>Portfolio <strong>2 cols</strong></h2>
                        </div>
                    </div>
                    <div class="span8">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="icon-angle-right"></i></li>
                            <li class="active">Portfolio 2 columns</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="portfolio-categ filter">
                            <?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin') { ?>
                            <form method="POST" enctype="multipart/form-data">

                                <li class="team"><a href="#" title="">Team</a></li>
                                <input type="file" name="file1">
                                <input type="text" id="fname" name="desc1"><br>


                                <li class="stadium"><a href="#" title="">Stadium</a></li>
                                <input type="file" name="file2">
                                <input type="text" id="fname" name="desc2"><br>


                                <li class="graffiti"><a href="#" title="">Graffiti-Icons designs</a></li>
                                <input type="file" name="file3">
                                <input type="text" id="fname" name="desc3">
                                <input type="submit" name="Submit3" value="Submit" />
                            </form>
                            <?php } else {?>
                            <li class="team"><a href="#" title="">Team</a></li>
                            <li class="stadium"><a href="#" title="">Stadium</a></li>
                            <li class="graffiti"><a href="#" title="">Graffiti-Icons designs</a></li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix">
                            <?php if(isset($_POST['Submit3']))
							{
								$target_dir = "img/admin/";
								if(!is_dir($target_dir))
								mkdir("img/admin/");
								
								$target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
								$target_file2 = $target_dir . basename($_FILES["file2"]["name"]);
								$target_file3 = $target_dir . basename($_FILES["file3"]["name"]);
								
								$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
								$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
								$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
								
								$conn=mysqli_connect('localhost','root','','Leicester');
								$extensions_arr = array("jpg","png");
									
								if( in_array($imageFileType1,$extensions_arr) && isset($_FILES['file1']['name'])){
									if(move_uploaded_file($_FILES['file1']['tmp_name'],$target_file1)){
								$query="INSERT INTO photos(username,filename,category,description) VALUES ('".$_SESSION['username']."','".$target_file1."','team','".$_POST['desc1']."')";
								mysqli_query($conn,$query);
								echo "<script LANGUAGE = 'JavaScript'>";
								echo "window.location.replace('index.php');";
								echo "</script>";
								}
							}
									
									if( in_array($imageFileType2,$extensions_arr) && isset($_FILES['file2']['name'])){
										if(move_uploaded_file($_FILES['file2']['tmp_name'],$target_file2)){
								
											$query="INSERT INTO photos(username,filename,category,description) VALUES ('".$_SESSION['username']."','".$target_file2."','stadium','".$_POST['desc2']."')";
											mysqli_query($conn,$query);
											echo "<script LANGUAGE = 'JavaScript'>";
								echo "window.location.replace('index.php');";
								echo "</script>";	
										}
									}
									if( in_array($imageFileType3,$extensions_arr) && isset($_FILES['file3']['name'])){
										if(move_uploaded_file($_FILES['file3']['tmp_name'],$target_file3)){
								$query="INSERT INTO photos(username,filename,category,description) VALUES ('".$_SESSION['username']."','".$target_file3."','graffiti' ,'".$_POST['desc3']."')";
								mysqli_query($conn,$query);
								echo "<script LANGUAGE = 'JavaScript'>";
								echo "window.location.replace('index.php');";
								echo "</script>";	
							}
						}

								
							}
								?>
                        </div>
                        <div class="row">

                            <section id="projects">

                              
                                <ul id="thumbs" class="portfolio">

                                   
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="stadium">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cup image"
                                            href="img/works/thumbs/cup2.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        
                                        <img src="img/works/thumbs/cup2.jpg" alt="Cup image">
										
                                    </li>
                                   

                                   
                                    <li class="item-thumbs span6 photography" data-id="id-2" data-type="stadium">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Cup image" href="img/works/thumbs/cup.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/cup.jpg"
                                            alt="Euroleague">
                                    </li>
                                    
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="team">

                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Team photo" href="img/works/thumbs/team.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <img src="img/works/thumbs/team.jpg"
                                            alt="A photo of leicester city team">

                                    </li>
									<?php 
									$conn=mysqli_connect('localhost','root','','Leicester');
											$query = mysqli_query($conn,"SELECT filename,date,description,category  FROM photos WHERE category='team' OR category='stadium' OR category='graffiti'");
											while($row = mysqli_fetch_assoc($query)){
												echo "<li class='item-thumbs span6 design' data-id='id-0' data-type='".$row['category']."'>
												<a class='hover-wrap fancybox' data-fancybox-group='gallery'
													title='".$row['category']." image on ".$row['date']."' href='".$row['filename']."'>
													<span class='overlay-img'></span>
													<span class='overlay-img-thumb font-icon-plus'></span>
												</a>
										
												<img src='".$row['filename']."'
													alt='".$row['description']."'>
											</li>";

											}
											?>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="stadium">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Stadium" href="img/works/thumbs/stadium2.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/stadium2.jpg"
										alt="Default stadium photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="stadium">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Stadium" href="img/works/thumbs/stadium3.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        
                                        <img src="img/works/thumbs/stadium3.jpg"
										alt="Default stadium photo">
                                    </li>
                                   
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="stadium">
                                      
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Cup image" href="img/works/thumbs/cup2.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/cup2.jpg"
										alt="Default cup photo">
                                    </li>
                                   
                                    <li class="item-thumbs span6 photography" data-id="id-4" data-type="stadium">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Stadium" href="img/works/thumbs/stadium.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/stadium.jpg"
										alt="Default stadium photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="stadium">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Cup image" href="img/works/thumbs/best-cup.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/best-cup.jpg"
										alt="Default cup photo">
                                    </li>
                                    
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/3D_sign.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                      
                                        <img src="img/works/thumbs/3D_sign.jpg"
                                            alt="Default graffiti/art photo">
                                    </li>

                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/icon2.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/icon2.jpg"
										alt="Default graffiti/art photo">
                                    </li>

                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/logo.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/logo.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/icon.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/icon.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                    
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                     
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/graffiti.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        
                                        <img src="img/works/thumbs/graffiti.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                        
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/graffiti2.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        
                                        <img src="img/works/thumbs/graffiti2.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/graffiti3.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                       
                                        <img src="img/works/thumbs/graffiti3.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                    <li class="item-thumbs span6 design" data-id="id-0" data-type="graffiti">
                                       
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                            title="Art" href="img/works/thumbs/graffiti4.jpg">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                     
                                        <img src="img/works/thumbs/graffiti4.jpg"
										alt="Default graffiti/art photo">
                                    </li>
                                   
                                </ul>

                            </section>
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
                                <li><a href="https://www.facebook.com/lcfc/" data-placement="bottom" title="Facebook"><i
                                            class="icon-facebook icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Twitter"><i
                                            class="icon-twitter icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Google plus"><i
                                            class="icon-google-plus icon-square"></i></a></li>
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