<?php 

	$description = '<meta name="description" content="Idea.com website.">';
	$keywords = '<meta name="keywords" content="web development and design, a portfolio website, html table designs, html forms textarea." />';
	$author = '<meta name="author" content="Michael Joseph Campbell" />';
	$page_title = 'Michael Joseph Campbell | Web Development - Idea.com';
	//This is the PHP include
	include ('includes/header.php');
	
?>
<div class="projectpage">
	<h3 class="secondarypagetitle">
		Idea.com
	</h3>
	<img class="parallaxone" src="images/webdev/idea.com/idea.comfulltop.png">
	<p class="projecttext">
		This was my first real website where it showcased alot of the skills that I learned from making previous websites, like tables, using divs and CSS stylings. The navigation at the top has rollover effects that change the colour of the icon. I then put a width on every div while I floated each div there after.
	</p>
	<img class="parallaxone" src="images/webdev/idea.com/idea.comfullbottom.png">
	<p class="projecttext">
		In the footer I have the navigation links off to the left, the copyright in the middle and to the right i have icons that link of to their designated website.	
	</p>
	<img class="parallaxone" src="images/webdev/idea.com/idea.comtable.png">
	<p class="projecttext">
		I had to use alot of styling to get this table the way I wanted it. For the outer table cells I added a border around the td then applied to the corresponding td's a border: none;. I also applied a background-color to the second column as well as changing the text colour to black from the blue. For the prices that are at the bottom of the table I created each different sizd text into a div then styled it to make it look like it shows in the image.
	</p>
	<img class="parallaxone" src="images/webdev/idea.com/idea.comphil.png">
	<p class="projecttext">
		I put a width on every div while I floated each div there after.
	</p>
	<img class="parallaxone" src="images/webdev/idea.com/idea.comcontact.png">
	<p class="projecttext">
		For the form I created each input with the same background-color and same text styling. Then for the quotations I did the same thing I did for the prices in the table above.
	</p>
	<p class="projectcopy">
		Created in 2015 for the Interactive Media Arts course.
	</p>
</div>

<?php 

	//This the PHP include for the footer
	include ('includes/foot.php');

?>