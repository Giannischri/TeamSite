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
								<h2>We make</h2>
								<h2><strong>History</strong></h2>
							</div>
						</div>
						<div class="span8">
							<div class="inner-heading">
								<img src="img/history/lfch1.png" alt="" class="align-center-right" />
							</div>
						</div>
						
						
						
					</div>
				</div>
			</section>
			<section id="content">
			<div class="container">
			<!-- Descriptions -->
			<div class="row">
			<div class="span10">
			<!-- Description -->
			<dl>
			<dt>Leicester City F.C.</dt>
			<img src="img/history/lfch2.jpg" alt="" class="align-right" />
			<dd>Leicester City Football Club is an English professional football club based in Leicester in the East Midlands, The club competes in the Premier League, England's top division of football league system and the team plays its home matches at the King Power Stadium.
			
			The club was founded in 1884 as Leicester Fosse F.C., playing on a field near Fosse Road. They moved to Filbert Street in 1891, were elected to the Football League in 1894 and adopted the name Leicester City in 1919. They moved to the nearby Walkers Stadium in 2002, which was renamed the King Power Stadium in 2011.
			
			Leicester won the 2015–16 Premier League, their first top-level football championship. They are one of only six clubs to have won the Premier League since its inception in 1992. A number of newspapers described Leicester's title win as the greatest sporting shock ever; multiple bookmakers had never paid out at such long odds for any sport.As a result, the team was dubbed "The Unbelievables", a spin-off harking back to Arsenal's undefeated team "The Invincibles".The club's previous highest finish was second place in the top flight, in 1928–29, then known as the First Division.
			
			Throughout their history, Leicester have spent all but one season in the top two divisions of English football. They hold a joint-highest seven second-tier titles (six Second Division and one Championship). The club have been FA Cup finalists four times, won the League Cup three times, and competed in four European campaigns. </dd>
			<dt>Founding and early years (1884–1949)</dt>
			
			
			<dd>Formed in 1884 by a group of old boys of Wyggeston School as "Leicester Fosse", the club joined The Football Association (FA) in 1890.[9] Before moving to Filbert Street in 1891, the club played at five different grounds, including Victoria Park south-east of the city centre and the Belgrave Road Cycle and Cricket Ground.The club also joined the Midland League in 1891, and were elected to Division Two of the Football League in 1894 after finishing second. Leicester's first ever Football League game was a 4–3 defeat at Grimsby Town, with a first League win the following week, against Rotherham United at Filbert Street. The same season also saw the club's largest win to date, a 13–0 victory over Notts Olympic in an FA Cup qualifying game.In 1907–08 the club finished as Second Division runners-up, gaining promotion to the First Division, the highest level of English football. However, the club were relegated after a single season which included the club's record defeat, a 12–0 loss against Nottingham Forest.
			
			In 1919, when League football resumed after World War I, Leicester Fosse ceased trading due to financial difficulties of which little is known. The club was reformed as "Leicester City Football Club", particularly appropriate as the borough of Leicester had recently been given city status. Following the name change, the club enjoyed moderate success in the 1920s; under the management of Peter Hodge, who left in May 1926 to be replaced two months later by Willie Orr, and with record goalscorer Arthur Chandler in the side,they won the Division Two title in 1924–25 and recorded their second-highest league finish in 1928–29 as runners-up by a single point to Sheffield Wednesday.However the 1930s saw a downturn in fortunes, with the club relegated in 1934–35 and, after promotion in 1936–37,another relegation in 1938–39 would see them finish the decade in Division Two.</dd>
			
			<dt>Post-World War II (1949–2000)</dt>
			<img src="img/history/lfch3.jpg" alt="" class="align-right" />
			<dd>City reached the FA Cup final for the first time in their history in 1949, losing 3–1 to Wolverhampton Wanderers. The club, however, was celebrating a week later when a draw on the last day of the season ensured survival in Division Two.Leicester won the Division Two championship in 1954,with the help of Arthur Rowley, one of the club's most prolific strikers. Although they were relegated from Division One the next season, under Dave Halliday they returned in 1957,with Rowley scoring a club record 44 goals in one season.Leicester remained in Division One until 1969,their longest period ever in the top flight.
			
			Under the management of Matt Gillies and his assistant Bert Johnson, Leicester reached the FA Cup final on another two occasions, but lost in both 1961 and 1963.As they lost to double winners Tottenham Hotspur in 1961, they were England's representatives in the 1961–62 European Cup Winners' Cup. In the 1962–63 season, the club led the First Division during the winter, thanks to a sensational run of form on icy and frozen pitches the club became nicknamed the "Ice Kings" eventually placed fourth, the club's best post-war finish. Gillies guided Leicester to their first piece of silverware in 1964, when Leicester beat Stoke City 4–3 on aggregate to win the League Cup for the first time.Leicester also reached the League Cup final the following year, but lost 3–2 on aggregate to Chelsea. Gillies and Johnson received praise for their version of the "whirl" and the "switch" system, a system that had previously been used by the Austrian and Hungarian national teams.After a bad start to the season, Matt Gillies resigned in November 1968. His successor, Frank O'Farrell was unable to prevent relegation, but the club reached the FA Cup final in 1969 for the last time to date, losing to Manchester City 1–0.
			In 1971, Leicester were promoted back to Division One, and won the Charity Shield for the only time.Unusually, due to double winners Arsenal's commitments in European competition, Division Two winners Leicester were invited to play FA Cup runners-up Liverpool, beating them 1–0 thanks to a goal by Steve Whitworth.Jimmy Bloomfield was appointed for the new season, and his team remained in the First Division for his tenure. No period since Bloomfield has seen the club remain in the top division for so long. Leicester reached the FA Cup semi-final in 1973–74.
			
			Frank McLintock, a noted player for seven years for Leicester in a successful period from the late Fifties to the mid Sixties, succeeded Jimmy Bloomfield in 1977. City were relegated at the end of the 1977–78 season and McLintock resigned. Jock Wallace resumed the tradition of successful Scottish managers (after Peter Hodge and Matt Gillies) by steering Leicester to the Division Two championship in 1980.Unfortunately, Wallace was unable to keep Leicester in Division One, but they reached the FA Cup semi-final in 1982. Under Wallace, one of City's most famous home-grown players, Gary Lineker, emerged into the first team squad. Leicester's next manager was Gordon Milne, who achieved promotion in 1983. Lineker helped Leicester maintain their place in the First Division but was sold to Everton in 1985 and two years later Leicester were relegated, having failed to find a suitable replacement to partner Alan Smith, who was sold to Arsenal after Leicester went down.
			
			Milne left in 1986 and was replaced in 1987 by David Pleat, who was sacked in January 1991 with Leicester in danger of relegation to the Third Division. Gordon Lee was put in charge of the club until the end of the season. Leicester won their final game of the season, which guided them clear of relegation to the third tier of the football league.
			
			Brian Little took over in 1991 and by the end of the 1991–92 season Leicester had reached the playoff final for a place in the new FA Premier League, but lost to Blackburn Rovers and a penalty from former Leicester striker Mike Newell. The club also reached the playoff final the following year, losing 4–3 to Swindon Town, having come back from 3–0 down. In 1993–94 City were promoted from the playoffs, beating Derby County 2–1 in the final.Little quit as Leicester manager the following November to take charge at Aston Villa, and his successor Mark McGhee was unable to save Leicester from finishing second from bottom in the 1994–95 season.
			
			McGhee left the club unexpectedly in December 1995 while Leicester were top of the First Division to take charge of Wolverhampton Wanderers.[27] McGhee was replaced by Martin O'Neill.Under O'Neill, Leicester qualified for the 1996 Football League play-offs and beat Crystal Palace 2–1 in the final through a 120th minute Steve Claridge goal to gain promotion to the FA Premier League. Following promotion, Leicester established themselves in the Premier League with four successive top ten finishes. O'Neill ended Leicester's 33-year wait for a major trophy, winning the League Cup twice, in 1997 and 2000, and Leicester were runners-up in 1999. Thus, the club qualified for the UEFA Cup in 1997–98 and 2000–01, the club's first European competition since 1961. In June 2000, O'Neill left Leicester City to take over as manager of Celtic. 
			</dd>
			<dt>Decline in the early 21st century (2000–2008)</dt>
			<img src="img/history/lfch4.jpg" alt="" class="align-right" />
			<dd>O'Neill was replaced by former England under-21 coach Peter Taylor. During this time, one of Leicester's European appearances ended in a 3–1 defeat to Red Star Belgrade on 28 September 2000 in the UEFA Cup.Leicester began well under Taylor's management, topping the Premier League for two weeks in the autumn and remaining in contention for a European place for most of the campaign, before a late season collapse dragged them down to a 13th-place finish.
			
			Taylor was sacked after a poor start to the 2001–02 season, and his successor Dave Bassett lasted just six months before being succeeded by his assistant Micky Adams, the change of management being announced just before relegation was confirmed. Leicester won just five league matches all season. 
			Leicester moved into the new 32,314-seat Walkers Stadium at the start of the 2002–03 season, ending 111 years at Filbert Street. Walkers, the Leicestershire-based crisp manufacturers, acquired the naming rights for a ten-year period.In October 2002, the club went into administration with debts of £30 million. Some of the reasons were the loss of TV money (ITV Digital, itself in administration, had promised money to First Division clubs for TV rights), the large wage bill, lower than expected fees for players transferred to other clubs and the £37 million cost of the new stadium.Adams was banned from the transfer market for most of the season, even after the club was rescued with a takeover by a consortium led by Gary Lineker.Adams guided Leicester to the runners-up spot in Division One and automatic promotion back to the Premier League with more than 90 points. However, Leicester lasted only one season in the top flight and were relegated to the newly labelled Championship, previously known as Division One.
			
			When Adams resigned as manager in October 2004, Craig Levein was appointed boss. This would prove to be an unsuccessful period and after 15 months in charge, Levein was sacked, having failed to get the Foxes anywhere near the promotion places. Assistant manager Rob Kelly took over as caretaker manager, and after winning three out of four matches, was appointed to see out the rest of the season. Kelly steered Leicester to safety and in April 2006 was given the manager's job on a permanent basis. </dd>
			<dt>Third tier to Premier League and takeover (2008–2015)</dt>
			<img src="img/history/lfch5.jpg" alt="" class="align-right" />
			<dd>The 2008–09 campaign was Leicester's first season outside the top two levels of English football, but they hit this nadir only seven years before becoming the 2015–16 Premier League champions – the fastest seven-year rise to the top of the English football league system apart from Ipswich Town in 1962.Following relegation to the third tier the previous season, Leicester returned to the Championship at the first attempt in 2008–09, finishing as champions of League One after a 2–0 win at Southend United, with two matches in hand. The 2009–10 season saw Leicester's revival under manager Nigel Pearson continue, as the club finished fifth and reached the Championship play-offs in their first season back in the second tier. Though coming from 2–0 down on aggregate, away to Cardiff City, to briefly lead 3–2, they eventually lost to a penalty shoot-out in the play-off semi-final. At the end of the season, Pearson left Leicester to become the manager of Hull City, claiming he felt the club seemed reluctant to keep him, and that Paulo Sousa had been the club's guest at both play-off games, hinting at a possible replacement. On 7 July 2010, Sousa was confirmed as Pearson's replacement.
			
			In August 2010, following agreement on a three-year shirt sponsorship deal with duty-free retailers the King Power Group, Mandarić sold the club to Thai-led consortium Asian Football Investments (AFI), fronted by King Power Group's Vichai Srivaddhanaprabha.Mandarić, an investor in AFI,was retained as club chairman.On 1 October 2010, after a poor start that saw Leicester bottom of the Championship with only one win out of the first nine league matches, Paulo Sousa was sacked by the club with immediate effect.Two days later, Sven-Göran Eriksson, who had been approached by the club after the 6–1 loss to then bottom-of-the-table Portsmouth two weeks earlier, was appointed as his replacement, signing a two-year contract with the club.[citation needed] On 10 February 2011, Vichai Raksriaksorn, part of the Thai-based Asia Football Investments consortium, was appointed new chairman of the club after Mandarić left in November to take over Sheffield Wednesday.
			
			Leicester were viewed as one of the favourites for promotion in the 2011–12 season, but on 24 October 2011, following an inconsistent start with the Foxes winning just 5 out of their first 13 matches, Eriksson left the club by mutual consent.Three weeks later, Nigel Pearson returned to the club as Eriksson's successor. Pearson would go on to lead the Foxes to a sixth-place finish in the 2012–13 season, ensuring Leicester were in the Championship play-offs. However, Leicester lost the playoff semi-final 3–2 on aggregate to Watford after Anthony Knockaert missed a late penalty and Troy Deeney scored right at the end after a swift counterattack from a Manuel Almunia double save.
			
			In 2014, Leicester's march up the league system hit a breakthrough. Their 2–1 home win over Sheffield Wednesday, combined with losses by Queens Park Rangers and Derby County, allowed Leicester City to clinch promotion to the Premier League after a ten-year absence. Later that month, a win at Bolton saw Leicester become the champions of the 2013–14 Championship, the seventh time they had been champions of England's second tier.
			
			Leicester started their first season in the Premier League since 2004 with a good run of results in their first five league matches, starting with a 2–2 draw on the opening day against Everton.The Foxes then claimed their first Premier League win since May 2004, with a 0–1 win at Stoke City.On 21 September 2014, Leicester went on to produce one of the greatest comebacks in Premier League history to beat Manchester United 5–3 at the King Power Stadium after coming back from 3–1 down with 30 minutes left to score four goals. They also made Premier League history by becoming the first team to beat Manchester United from a two-goal deficit since the league's launch in 1992.
			
			During the 2014–15 season, a dismal run of form saw the team slip to the bottom of the league table with only 19 points from 29 matches. By 3 April 2015, they were seven points adrift from safety. This could have brought a sudden end to Leicester's seven-year rise, but seven wins from their final nine league matches meant the Foxes finished the season in 14th place with 41 points. They finished the season with a 5–1 thrashing of relegated Queens Park Rangers. Their upturn in results was described as one of the Premier League's greatest ever escapes from relegation.They also became only the third team in Premier League history to survive after being bottom at Christmas (the other two being West Bromwich Albion in 2005 and Sunderland in 2014), and no team with fewer than 20 points from 29 matches had previously stayed up. </dd>
			<dt>Premier League champions (2015–present)</dt>
			<img src="img/history/lfch6.png" alt="" class="align-right" />
			<dd>On 30 June 2015, Pearson was sacked, with the club stating, "The working relationship between Nigel and the Board is no longer viable." The sacking was linked to a number of public relations issues involving Pearson throughout the season, with the final straw involving his son James' role in a "racist sex tape" made by three Leicester reserve players in Thailand during a post-season goodwill tour.Leicester reacted by appointing former Chelsea manager Claudio Ranieri as their new manager for the new 2015–16 Premier League season.Despite an initially sceptical reaction to Ranieri's appointment, the club made an exceptional start to the season.Striker Jamie Vardy scored 13 goals over 11 consecutive matches from August to November, breaking Ruud van Nistelrooy's Premier League record of scoring in 10 consecutive matches.On 19 December, Leicester defeated Everton 3–2 at Goodison Park to top the Premier League on Christmas Day, having been bottom exactly 12 months earlier.[54] A 2–0 victory at Sunderland on 10 April, coupled with Tottenham Hotspur's 3–0 win over Manchester United, ensured Leicester's qualification for the UEFA Champions League for the first time in their history.
			Leicester, while performing well in the Champions League, struggled domestically during 2016–17, spending much of the first few months in the bottom half of the table. In December 2016, Ranieri was awarded coach of the year and Leicester team of the year at the BBC Sports Personality of the Year.However, on 23 February 2017, Ranieri was sacked due to the club's continuing poor form, resulting in them being only one point above the relegation zone. The sacking was met with significant upset and anger from the media, with Gary Lineker called the sacking "very sad" and "inexplicable",[70] while Manchester United manager José Mourinho blamed it on "selfish players".Rumours began emerging some days later that players had been meeting with the owners to discuss Ranieri's sacking without Ranieri knowing, which sparked widespread outrage over social media, but these were never proven.
			
			Craig Shakespeare took over as caretaker manager, and in his first match in charge, Leicester won 3–1 against fifth-placed Liverpool, with Vardy scoring a brace.In his second match as caretaker, Shakespeare led Leicester to another 3–1 victory, over Hull City.Following two impressive results and initiating "the type of positive response that we hoped change would bring", the club's owners then decided Shakespeare would become the club's manager until the end of the season.
			
			The 2016–17 campaign was also the first season in 15 years that Leicester qualified for European football. Leicester were placed in Group G of the 2016–17 UEFA Champions League, alongside Porto, Copenhagen and Club Brugge. In their inaugural Champions League campaign, they went undefeated in their first five matches to progress to the knockout stages as group winners.[citation needed] The Foxes then faced La Liga club Sevilla in the round of 16 and defeated the Spanish side 2–0 on the night, and 3–2 on aggregate to advance to the quarter-finals.There they faced Atlético Madrid, and drew 1–1 in the second leg, but lost 1–2 on aggregate after losing 1–0 in the first leg. This put an end to Leicester's 2016–17 European campaign, and they finished as Champions League quarter-finalists.Despite the loss, Leicester remained unbeaten at home in the 2016–17 Champions League.
			
			Shakespeare, having impressed during his caretaker spell, was appointed full-time on a three-year contract.However, following a poor start to the season he was sacked in October 2017 after four months officially in charge, with Leicester in 18th place in the table.He was replaced with former Southampton boss Claude Puel on 25 October 2017. By Christmas, Leicester were in 8th position in the Premier League and went on to finish one place lower in 9th at the end of the season.
			
			Despite rumours that Puel would leave, he remained at the club for the next season and performed well. However, the team suffered a poor run of games in 2019 which saw Leicester suffer 4 successive home defeats, and following a 4–1 home defeat to Crystal Palace, Puel was sacked on 24 February 2019 with the club in 12th place. Two days later on 26 February 2019, former Liverpool manager Brendan Rodgers was appointed as his replacement.They finished the season again in 9th place.
			
			On 25 October 2019, Leicester recorded a 9-0 away win at Southampton in the Premier League. Ayoze Perez and Jamie Vardy both scored hat tricks as the game became the joint largest win in Premier League history and the largest away win in English top flight history.</dd>
			
			</dl>
			</div>
			
			<!-- divider -->
			<div class="row">
			<div class="span12">
			<div class="solidline">
			</div>
			</div>
			</div>
			<!-- end divider -->
			
			
			
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
						