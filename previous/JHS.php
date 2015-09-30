<?php
$titleadd = "JH Specialty";
include_once("$_SERVER[DOCUMENT_ROOT]/header.php");
?>

	<h1>JH Specialty</h1>
	<h2>Project Summary</h2>
	<p class="intro">
	JH Specialty is a marketing company based in Fort Wayne, Indiana. I was hired 
	as a direct consultant, to help with the redesign of the Kansas State University 
	Biology Department's online course content. Using PHP, I created a script that 
	ran through nearly 5,000 files on the server. This script stripped specified 
	HTML content, retaining important information, and replaced the HTML content 
	with PHP calls to header and footer files, filling variables with the information 
	gathered during the stripping of HTML. This allowed the rebranding to be 
	implemented consistently, while preserving existing site content. After running 
	the PHP script, I then performed quality testing to ensure that existing content 
	would gel with the new design implementation, and used HTML, CSS, and JavaScript 
	to make corrections where needed.
	</p>

	<div id='breakdown'>
	<img src='/images/PageView.png' alt='Screenshot of Kansas State Mockup for JH Specialty'>
	</div>
<?php
include_once("$_SERVER[DOCUMENT_ROOT]/footer.php");
?>

