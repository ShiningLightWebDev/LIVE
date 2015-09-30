<?php
$titleadd = "South Carolina Assistive Technology Program";
include_once("../header.php");
?>

	<h1>South Carolina Assistive Technology Program</h1>
	<a href="http://www.sc.edu/scatp/">Visit SCATP</a>
	<h2>Project Summary</h2>
	<p class="intro">
	The South Carolina Assistive Technology 
	Program focuses on the accessibility of the web. The program uses volunteer 
	web testers using assistive technologies, such as screen readers or text-only 
	browsers. The program was collecting surveys in MS Word documents, 
	struggled with organization, and had difficulty sorting and compiling 
	data. After contacting the program director, I collected a list of requirements,
	and goals for the application I planned to create. I designed and built a 
	database that volunteers could log into, and fill out the survey, including 
	the ability to save and return. The program administrators could log into a 
	separate interface; manage, sort, and search data; and compile reports based 
	on a number of criteria. My program added a level of security and centralized 
	data control, improving program efficiency.
	</p>

	<h2>Project Breakdown</h2>
<div class='caption'>
	<img src='images/WebTesterLogin-small.png' 
			 onmouseover="this.src='images/WebTesterLogin.png';"
			 onmouseout="this.src='images/WebTesterLogin-small.png';"/>
	<p>Using the questionnaire the SCATP administrators provided, the application 
	allowed users to log in, complete new evaluations, and change previous evaluations. </p>
</div>
<div class='caption'>
	<img src='images/WebSubmissionForm-small.png' 
			 onmouseover="this.src='images/WebSubmissionForm.png';"
			 onmouseout="this.src='images/WebSubmissionForm-small.png';"/>
	<p>Users would evaluate a site and answer the questions for each site. Later, they 
	could search their previous evaluations and update the answers.</p>
</div>
<div class='caption'>	
	<img src='images/AdminPage-small.png' 
			 onmouseover="this.src='images/AdminPage.png';"
			 onmouseout="this.src='images/AdminPage-small.png';"/>
	<p>The application included an administrative interface that allows administrators to 
	log in securely, search data, and print reports.</p>
</div>
<div class='caption'>	
	<img src='images/SiteReport-small.png' 
			 onmouseover="this.src='images/SiteReport.png';"
			 onmouseout="this.src='images/SiteReport-small.png';"/>
	<p>Here is a report that shows all the users that have submitted evaluations for 
	www.notarealsite.com, and their answers to each question.</p>	
</div>
<?php
include_once("../footer.php");
?>

