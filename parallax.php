<?php 

	$description = '<meta name="description" content="Parallax website.">';
	$keywords = '<meta name="keywords" content="web development and design, a portfolio website, parallax website." />';
	$author = '<meta name="author" content="Michael Joseph Campbell" />';
	$page_title = 'Michael Joseph Campbell | Web Development - Parallax';
	//This is the PHP include
	include ('includes/header.php');
	
?>
<div class="projectpage">
	<h3 class="secondarypagetitle">
		Parallax
	</h3>
	<img class="parallaxone" src="images/webdev/parallax/parallaxfull.png">
	<p class="projecttext">
		For this project I was given the task of creating and implementing a parallax website. I decided to go with the idea of a mime waving his hand in front of his face but with each hand that passes his face, his facial expression changes. 
	</p>
	<img class="parallaxone" src="images/webdev/parallax/parallaxtwoimages.png">
	<p class="projecttext">
		In the navigation there are links that jump you to the different sections of the parallax. This was all done in HTML5 and CSS3 while using jQuery and javascript to create the parallax effect.
	</p>
	<p class="projectcopy">
		Created in 2015 for the Interactive Media Arts course.
	</p>
</div>

<?php 

	//This the PHP include for the footer
	include ('includes/foot.php');

?>