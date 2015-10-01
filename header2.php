<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shining Light Web<?php if (isset($titleadd)) { echo " -- ".$titleadd; } ?></title>
	<meta charset="UTF-8">
	<meta name='author' content='ClaireElaine Johnson'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='../image/png' href='/images/star.png' />
	<link rel='stylesheet' type='text/css' href='/css/OctRedesign.css' />
	<script type="text/javascript" src="/jquery/jquery-1.11.0.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
</head>

<body>
	<nav id="mobile-menu">
		<ul>
			<li><a href="/index2.php">Home</a></li>
			<li><a href="/resume/index.php">Career</a>
				<ul>
					<li><a href="/resume/resume.php">Resume Summary</a>
					<li><a href="/resume/web.php">Web Skills</a></li>
					<li><a href="/resume/php.php">PHP Skills</a></li>
					<li><a href="/recent/index.php">Recent Work</a>
						<ul>
							<li><a href="/recent/redminnow.php">Red Minnow Interactive</a></li>
							<li><a href="/recent/thelimited.php">The Limited</a></li>
						</ul>
					</li>
					<li><a href="/previous/index.php">Previous Work</a>
						<ul>
							<li><a href="/previous/2CO.php">2CheckOut</a></li>
							<li><a href="/previous/AG.php">Avant Garde</a></li>
							<li><a href="/previous/CP.php">Crown Partners</a></li>
							<li><a href="/previous/JHS.php">JH Specialty</a></li>
							<li><a href="/previous/SCATP.php">SCATP</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="/justForFun.php">Just for Fun</a>
				<ul>
					<li><a href="/BlogsAndIdeas/index.php">Blog</a>
						<ul>
							<li><a href="/BlogsAndIdeas/FAQsofMe.php">About Me</a></li>
							<li><a href="/BlogsAndIdeas/FAQsbyMe.php">My Interview FAQs</a></li>
							<li><a href="/BlogsAndIdeas/neveraskthis.php">Never Ask This</a></li>
							<li><a href="/BlogsAndIdeas/webdesvswebdev.php">Web Design vs Web Developer</a></li>
						</ul>
					</li>
					<li><a href="/Hobbies/index.php">Hobbies</a>
						<ul>
							<li><a href="/Hobbies/scrapbooking.php">Scrapbooking</a></li>
							<li><a href="/Hobbies/coloring.php">Coloring</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="../contact.php">Contact Me</a></li>
		</ul>
	</nav>
	<div id="col-1" class="col-lg-4">
		<div id="section-1" role="header" class="sixth-section">
			<div id='banner' role="banner">
				<a href="/index2.php">
				<img src='/images/ShiningLightGallifreyanTiny.png' alt="Shining Light Web Development (in circular Gallifreyan)" />
				<img class='desktop' src="/images/shininglightwhite.png" alt="Shining Light Web Development" />
				<img class='mobile' src="/images/ShiningLightWebStacked.png" alt="Shining Light Web Development" />
				</a>
			</div> <!-- end banner -->