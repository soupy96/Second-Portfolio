<?php 

	$description = '<meta name="description" content="E-commerce Website.">';
	$keywords = '<meta name="keywords" content="web development and design, a portfolio website, e-commerce website, e-commerce sites." />';
	$author = '<meta name="author" content="Michael Joseph Campbell" />';
	$page_title = 'Michael Joseph Campbell | E-commerce';
	//This is the PHP include
	include ('includes/header.php');
	
?>
<div class="projectpage">
	<h3 class="secondarypagetitle">
		E-commerce
	</h3>
	<img class="parallaxone" src="images/webdev/ecommerce/hometop.png">
	<p class="projecttext">
		I was given a group project to create an e-commerce website. I was one of the two developers on the project as well as a designer. We decided to sell video games, video game consoles and accessories. We used both PHP and MySQL to create a functioning website with a checkout cart and all. For our navigationnwe used a responsive dropdown menu. The designer decided to go with a blue and orange themed website.
	</p>
	<img class="parallaxone" src="images/webdev/ecommerce/homebottom.png">
	<p class="projecttext">
		We also created fake social media pages to to "promote" our website and the contents that it was selling. We decided to go with a simple 1 x 4 grid to list the items that were for sale.
	</p>
	<img class="parallaxone" src="images/webdev/ecommerce/multipleobjectpage.png">
	<p class="projecttext">
		We categorized our items into games, consoles and accessories and then into Playstation 4, Xbox One and Wii U. Once again we are using the 1 x 4 grid here to list the items that are for sale. Once the Buy Now! button is pressed it would take you to that products page.
	</p>
	<img class="parallaxone" src="images/webdev/ecommerce/objectpage.png">
	<p class="projecttext">
		On this page is where you would see the biggest image of the product as well as the title, price and the developer and the product. There would also be the ESRB rateing of the game and the button to add that product to their cart. Last but not least the description of the product.
	</p>
	<img class="parallaxone" src="images/webdev/ecommerce/contact.png">
	<p class="projecttext">
		This is a simple PHP mailing form so that the user could contact anybody on the team.
	</p>
	<img class="parallaxone" src="images/webdev/ecommerce/register.png">
	<p class="projecttext">
		If the user wants to checkout they to create an account first. This page is where they would do that. Once the user has created an account, their information is stored into the database.
	</p>
</div>

<?php 

	//This the PHP include for the footer
	include ('includes/foot.php');

?>