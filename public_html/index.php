<!DOCTYPE html>
<html lang="en">

	<!------------------------------------------------------------>
	<!--  Personal Website for Jeff Saul  jsaul@webmansaul.com  -->
	<!--																			-->
	<!--	created by jsaul@webmansaul.com  December 2015			-->
	<!------------------------------------------------------------>

	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags  		-->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"

		<!-- Bootstrap latest compiled and minified CSS		-->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
				crossorigin="anonymous">

		<!-- Optional Bootstrap Theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
				integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if it IE 9]>
			<script src="//css.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//css.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<! [endif]-->

		<!-- jQuery (required for Bootstrap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- Bootstrap latest compiled and minified Javascript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>

		<title>About Me page</title>
	</head>

	<!-- using stickyfooter - body tag for sticky footer begins here -->
	<body class="sfooter">
		<div class="sfooter-content">
			<nav class="navbar navbar-inverse">
				<!-- logo and mobile toggle button get grouped together for better mobile display -->
				<div class="navbar-header white-text0">
					<!-- this is the mobile menu button -->
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">main menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<a class="navbar-brand center-text" href="#">Jeff Saul - Web Developer</a>
					<div class="clearfix"></div>
					<div class="white-text1">Creative Web Designs & Complete Web Solutions</div>
				</div>


				<!-- here are the main nav links, grouped for toggling -->
				<div class="collapse navbar-collapse" id="main-menu">
					<u1 class="nav navbar-nav navbar-right"
					</u1>
					<li><a href="index.php">Home</a></li>
					<li><a href="about-me.php">About me</a></li>
					<li><a href="//bootcamp-coders.cnm.edu/~jsaul4/open-trails/public_html/">Trail Quail website</a></li>
					<li><a href="//physics.unm.edu/Courses/Saul/00_Classes/FL2014_Saul_PHYC110home.html">Physics 110 website</a></li>
					<li><a href="//physics.unm.edu/Courses/Saul/00_Classes/FL2014_A101lab.html">Astro Lab Website</a></li>
				</div>
			</nav>

			<!--	Professonal statement in first con		-->
			<main class="main-fomrat">
				<div class="container">
					<h4>Professional Statement</h4>
					<p>In my previous career, I focused on the teaching and learning of physics, astronomy, and mathematics at an introductory undergraduate level, most recently at the University of New Mexico.  I earned a Ph.D. in Physics in Physics Education Research.  I am now looking for a new career that lets me apply my knowledge and technical skills.  I enjoy coding and had coded applications both as an undergraduate and graduate student.  I am currently updating my skills to pursue a career in web application design and development.  I like the challenge of interesting problems and finding practical solutions.
					</p>
					<a href="about-me.php"><h4>To learn more about me</h4></a>
				</div>
				<hr>

				<div class="container">
					<div class="text-center">
						<h3>My Portfolio</h3>
						<div class="row">
							<div class="col-md-4">
								<div>
									<a href="//bootcamp-coders.cnm.edu/~jsaul4/open-trails/public_html/">
										Trail-Quail Website
									</a>
								</div>
								<a href="//bootcamp-coders.cnm.edu/~jsaul4/open-trails/public_html/">
									<img src="img/sandiaMtnNM.jpg" alt="Trail Quail Project" class="image-saul img-circle">
								</a>
							</div>

							<div class="col-md-4">
								<div>
									<a href="//physics.unm.edu/Courses/Saul/00_Classes/FL2014_Saul_PHYC110home.html">
										Physics 110 Website
									</a>
								</div>
								<a href="//physics.unm.edu/Courses/Saul/00_Classes/FL2014_Saul_PHYC110home.html">
									<img src="img/shuttle.jpeg" alt="Physics 110 Website" class="image-saul img-circle">
								</a>
							</div>

							<div class="col-md-4">
								<div>
									<a href="//physics.unm.edu/Courses/Saul/00_Classes/FL2014_A101lab.html">
										Astro 101lab Website
									</a>
								</div>
								<a href="http://physics.unm.edu/Courses/Saul/00_Classes/FL2014_Saul_PHYC110home.html">
									<img src="img/crab-nebula.jpeg" alt="Astro 101lab Website" class="image-saul img-circle">
								</a>
							</div>


				</div>
					</div>
				</div>

				<br>
				<hr>
				<div class="container">
					<div class="col-md-4">
					<h4>Contact Information:</h4>
					<ul class="contact-info">
						<li><a href="//bootcamp-coders.cnm.edu/~jsaul4/saul-pwpsite">Personal Website</a></li>
						<li><a href="//github.com/jmsaul">Github Repository</a></li>
						<li><a href="mailto:webmansaul@gmail.com">webmansaul@gmail.com</a></li>
						<li>Phone: 954-665-5373</li>
						<li><a
								href="//www.linkedin.com/profile/view?id=AAMAAAZJ_f0BjhDGc9euxLgYOwz_kfWCqZ2XDlU&trk=hp-identity-name">Linked
								in</a></li>
						<li><a href="https://twitter.com/NMmodeling">Twitter</a></li>
					</ul>
				</div>

			<div class="col-md-4">
				<div>Two of my favorite things:</div>
				<div>Balloon Fiesta and Bicycling</div>
				<img src="img/balloon-saul.jpg" alt="Astro 101lab Website" class="image-saul">
			</div>

			</main>
		</div>


		<footer class="footer">
			<div class="container">
				<p class="text-muted">Copyright 2015 Jeff Saul
			<span class="pull-right">
				<!--	This will send an email to trailquailabq@gmail.com		-->
				<a class="btn btn-primary" href="mailto:saulj@me.com"
					role="button">Email me</a>
			</span>
				</p>
			</div>
		</footer>

	</body>
</html>





