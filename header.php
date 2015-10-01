<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shining Light Web<?php if (isset($titleadd)) { echo " -- ".$titleadd; } ?></title>
	<meta charset="UTF-8">
	<meta name='author' content='ClaireElaine Johnson'>
	<link rel='shortcut icon' type='../image/png' href='../images/star.png' />
	<link rel='stylesheet' type='text/css' href='../css/shininglightwebstyle.css' />
	<script type="text/javascript" src="../jquery/jquery-1.11.0.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
</head>

<body>
	<div id="header" role="header">
		<div id='banner' role="banner">
			<a href="../index.php">
			<img src='../images/ShiningLightGallifreyanTiny.png' alt="Shining Light Web Development (in circular Gallifreyan)" />
			<img class='desktop' src="../images/shininglightwhite.png" alt="Shining Light Web Development" />
			<img class='mobile' src="../images/ShiningLightWebStacked.png" alt="Shining Light Web Development" />
			</a>
			<a class="pull-right" href="https://drive.google.com/file/d/0B_LO4acneHaoRTJKY1l4U1lOQm8/view?usp=sharing">Download Resume</a>
		</div> <!-- end banner -->
	</div> <!-- end header -->
	<div id='main'>
		<nav id='to-mobile-menu'><a href='#mobilemenu'>Menu</a></nav>
		<nav id='top-nav'>
			<ul class="current">
				<li><div><a href='../index.php'>Home</a></div>
					<!--
					<ul>
						<li><div><a href='../contact.php'>Contact</a></div></li>
						<li><div><a href='../socialmedia.php'>Social Media</a></div></li>
					</ul>
					-->
				</li>
				<li><div><a href='../resume/resume.php'>Career Summary</a></div>
					<ul>
						<li><div><a href='../resume/web.php'>Web Skills</a></div></li>
						<li><div><a href='../resume/php.php'>PHP and SQL</a></div></li>
					</ul>
				</li>
				<li><div><a href='../recent/index.php'>Recent Work</a></div>
					<ul>
						<li><div><a href='../recent/thelimited.php'>The Limited</a></div></li>
						<li><div><a href='../recent/redminnow.php'>Red Minnow Interactive</a></div></li>
						<!--<li><div><a href='../recent/ramparthosting.php'>Rampart Hosting</a></div></li>-->
					</ul>
				</li>
				<li><div><a href='../previous/index.php'>Previous Work</a></div>
					<ul>
						<li><div><a href='../previous/2CO.php'>2Checkout</a></div></li>
						<li><div><a href='../previous/AG.php'>Avant Garde</a></div></li>
						<li><div><a href='../previous/CP.php'>Crown Partners</a></div></li>
						<li><div><a href='../previous/JHS.php'>JH Specialty</a></div></li>
						<li><div><a href='../previous/SCATP.php'>SCATP</a></div></li>
					</ul>
				</li>
			</ul>
		</nav>

		<div id='primary' role="main">