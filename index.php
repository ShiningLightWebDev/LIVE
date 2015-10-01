<?php
include("header.php");
?>

<section>
	<figure id='profileSec'>
		<div id='profilePic'></div>
		<figcaption id='profileInfo'>
		<h1> ClaireElaine Johnson</h1>
		<p><a href="tel:16148309449">614-830-9449</a></p>
		<p><a href="mailto:claireelaine@shininglightweb.com">claireelaine@shininglightweb.com</a></p>
		</figcaption>
	</figure>
</section>

<div id='wip'>
	<p><b>
	ClaireElaine is currently available for consulting or volunteer work.
	</b></p>

	<p>
	ClaireElaine Johnson is a professional web developer with strong experience 
	in HTML, CSS, JavaScript, PHP, and SQL; experience with multiple industries 
	including marketing, retail, and ecommerce; specializing in code documentation 
	and W3C standards compliance. Currently based in Columbus, OH, she 
	adds her willingness to learn, adapt, and master any technology to create a 
	dynamic boost to every project. Key strengths include a complementary
	personality, ability to work independently, project self-management, and
	maintenance and enhancement of prior-existing code.
	</p>

	<!--<p>
	ClaireElaine has worked with PHP and SQL (including Oracle, Microsoft, 
	SQLite, and MySQL) for the past seven
	years, including the creation and enhancement of two built-to-order 
	applications
	interacting with relational databases. She has used HTML and CSS to build,
	maintain, and update websites for over 15 years. Her experience includes 
	several
	projects using WordPress to customize existing themes or to create custom
	themes and widgets. Most recent experience includes work with JavaScript, 
	JQuery, and Ajax. She has worked with both Git and
	SVN as source control tools, and is a proponent for clearly commented code,
	including compliance for PHPDocs. She has worked professionally with Linux 
	and
	Windows across multiple projects, including Apache installation and basic
	configuration. ClaireElaine has limited experience with Bootstrap and SEO 
	optimization. She is active on social media, with accounts on Facebook, 
	Twitter, LinkedIn, and StackExchange, and is
	comfortable teaching clients to use these tools to meet business needs.
	</p>-->
</div>

<script>

var current = 0; //start the counter at 0

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<img src='images/CE.jpg' alt='ClaireElaine Johnson' />"; 
    items[1]="<img src='images/CEmint.jpg' alt='ClaireElaine Johnson' />";
function rotater() {
    document.getElementById("profilePic").innerHTML = items[current];
    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",10000);
}

/*function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",10000);
} */
window.onload=rotater;
</script>

<?php
include("footer.php");
?>