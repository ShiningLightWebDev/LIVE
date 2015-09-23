<?php
$titleadd = "Red Minnow Interactive";
include_once("../header.php");
?>

	<h1>Red Minnow Interactive</h1>
	<a href="http://www.redminnow.com">Visit Red Minnow</a>
	<h2>Project Summary</h2>
		<p class="intro">
		Red Minnow Interactive created a digital signage application for 
		use in stadiums and schools. This application allowed the client to 
		display many types of data using several data-content templates. My 
		task was to upgrade the existing client portal to a full-blown CMS. 
		When the project was first explained, I quoted that it would take 
		120 hours to finish. The project was completed in 108 hours.
		</p>

	<h2>Project Breakdown</h2>
		<div class='caption'>
			<img src='images/BuckeyeCentralCMS-small.png' 
					 onmouseover="this.src='images/BuckeyeCentralCMS.png';" 
					 onmouseout="this.src='images/BuckeyeCentralCMS-small.png';"/>
			<p>This was the design of the web portal when I began. Portal 
			colors were chosen 
			based on school colors, and there was little styling to the words 
			and images. The only actions the user had available were to upload 
			new data, view existing data and deactivate it, and view inactive 
			data and activate it.</p>
		</div>
		<div class='caption'>
			<img src='images/RZoneCMSmenu-small.png' 
					 onmouseover="this.src='images/RZoneCMSmenu.png';" 
					 onmouseout="this.src='images/RZoneCMSmenu-small.png';"/>
			<p>Duane from Red Minnow designed the new RZone CMS look, and I put 
			it into action. The first thing we did was to rewrite the menu. Now 
			users were able to add new sections of data, edit titles and subtitles, 
			deactivate entire sections, 
			and even delete. When a parent section was deactivated, a change was 
			made in the database so that the subsections were no longer visible in 
			the application. The subsections were then shown as inactive in the CMS. 
			This allowed the user to deactivate a section, make large changes to it 
			and its subsections, and then reactivate the section for use in the 
			touchscreen application.</p>
			<p>The difficulty I had with this part of the assignment was that the 
			previous developer hired for this project had used several different 
			jQuery libraries and plug-ins. The multiple scripts and stylesheets 
			did not "play well" with one another, and as I was adding a significant 
			amount of jQuery functionality, it was a challenge to weed out the 
			unnecessary libraries and to ensure that new functions did not break 
			old functions. This task took two days longer than expected.</p>
		</div>
		<div class='caption'>	
			<img src='images/RZoneCMStemplate-small.png' 
					 onmouseover="this.src='images/RZoneCMStemplate.png';" 
					 onmouseout="this.src='images/RZoneCMStemplate-small.png';"/>
			<p>The next item on the task list was to create a way for users to 
			choose a template, and for the CMS to offer them different data types 
			based on the template choice. This was a relatively complicated task 
			as the data for the templates was stored across multiple tables in the 
			database, and new fields needed to be added to the database before the 
			user could create new data. I used JavaScript to collect variables 
			from the form, Ajax to send those variables to a PHP function file, 
			and SQLite to update the database with the appropriate information.</p>
		</div>
		<div class='caption'>	
			<img src='images/RZoneCMSdata-small.png' 
					 onmouseover="this.src='images/RZoneCMSdata.png';" 
					 onmouseout="this.src='images/RZoneCMSdata-small.png';"/>
			<p>The final item was to make sure the previous functions for adding 
			data were still functioning and that they were restyled to fit the 
			rest of the portal. This was a fairly simple task, but I did find 
			several functions that were broken or acting unexpectedly. Once I 
			cleaned up the JavaScript and CSS for this section, the site was 
			fully functional.</p>
		</div>

<?php
include_once("../footer.php");
?>