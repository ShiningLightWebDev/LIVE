<?php
$titleadd = "South Carolina Assistive Technology Program";
include_once("$_SERVER[DOCUMENT_ROOT]/header.php");
?>
<h1>South Carolina Assitive Technology Program</h1>
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
	<div id='breakdown'>
	<section>
		<a id='webtester'>
		<img src='/images/WebTesterLogin.png' alt='Web Tester Login' title='Web Tester Login' />
		</a>
		<p>Using the questionnaire the SCATP administrators provided, the application 
		allowed users to log in, complete new evaluations, and change previous evaluations. </p>
	</section>
	<section>
		<a id='submission'>
		<img src='/images/WebSubmissionForm.png' alt='Web Submission Form' title='Web Submission Form' />
		</a>
		<p>Users would evaluate a site and answer the questions for each site. Later, they 
		could search their previous evaluations and update the answers.</p>
	</section>
	<section>
		<a id='admin'>
		<img src='/images/AdminPage.png' alt='Admin Page' title='Admin Page' />
		</a>
		<p>The application included an administrative interface that allows administrators to 
		log in securely, search data, and print reports.</p>
	</section>
	<section>
		<a id='sitereport'>
		<img src='/images/SiteReport.png' alt='Admin Site Report' title='Admin Site Report' />
		</a>
		<p>Here is a report that shows all the users that have submitted evaluations for 
		www.notarealsite.com, and their answers to each question.</p>
	</section>
	</div>
	
<?php
include_once("$_SERVER[DOCUMENT_ROOT]/footer.php");
?>