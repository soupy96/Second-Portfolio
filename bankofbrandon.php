<?php 

	$description = '<meta name="description" content="B.O.B. website.">';
	$keywords = '<meta name="keywords" content="web development and design, a portfolio website, php basics, mysql database." />';
	$author = '<meta name="author" content="Michael Joseph Campbell" />';
	$page_title = 'Michael Joseph Campbell | Bank of Brandon';
	//This is the PHP include
	include ('includes/header.php');
	
?>
<div class="projectpage">
	<h3 class="secondarypagetitle">
		Bank of Brandon
	</h3>
	<img class="parallaxone" src="images/webdev/bankofbrandon/home.png">
	<p class="projecttext">
		This is the website that I used alot of PHP and MySQL databases to create. There's Mortgage Rates, Mortgage Calulator, Register, Change your Password, Contact and the Login page that uses PHP and MySQL databases.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/mortgagerates.png">
	<p class="projecttext">
		For the Mortgage Rates page I used PHP to bring in the latest mortgage data to be displayed in a table.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/mortgagecalc.png">
	<p class="projecttext">
		For this calculator I took the inputs that the user would insert into the fields and complete the calculation with PHP. I then would spit out the answer with the calculations that they put in earlier. If they didn't put in a field, an error would display and says so.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/registration.png">
	<p class="projecttext">
		This is the register page where the user could register into my database. If they missed a field an error would pop up saying that they missed a field and had to go back to fill it in, in order to continue. The little icon in the bottom right, once logged in, would let you view the registered users and either edit or delete them.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/contact.png">
	<p class="projecttext">
		I'm using a PHP mailng form so that who ever wants to contact the Bank of Brandon they can do so.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/newticket.png">
	<p class="projecttext">
		There's a little envolope on the contact page above. If you click on this image it will take you to the tickets page. On such page you can click a button to create a ticket. This is that page above. One the amount fields are filled it calculates the total and the user can submit the ticket.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/viewticket.png">
	<p class="projecttext">
		Once the user has created a ticket they can go back to the main ticket page to again click another button to view their ticket by putting in the ticket number. 
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/login.png">
	<p class="projecttext">
		Once they are registered into the system they could Login and access the features that were only available to registered users. The view users, edit users, change passwords and the invoices system are all "behind" the login page. Once they are logged in it would show their first name in the header welcoming them while changing the login page button to read loggout.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/viewusers.png">
	<p class="projecttext">
		This is the view users page where you could see the users that are registered into your system. With PHP I brought out their first name, last name and the date that they registered into the system. You could also put the users in order by either their first name, last name or the date that they registered by clicking on the column title.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/edituser.png">
	<p class="projecttext">
		On the previous page, if you selected the edit link it would take you to this page of the selected user. With PHP it would bring out the users information that was stored when they first registered. By changing a field and clicking submit it would updated the users information and put it into the database.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/deleteuser.png">
	<p class="projecttext">
		Instead of clicking edit on the view users page, and clicking delete it would bring you to this page. If you followed the steps correctly it would delete the user and all of the users information from the database.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/changepassword.png">
	<p class="projecttext">
		If the user wanted to change their password they would have to fill out the fields and the system would update their password and store it into the database.
	</p>
	<img class="parallaxone" src="images/webdev/bankofbrandon/loggedout.png">
	<p class="projecttext">
		Once they were done with whatever the were doing they would click the logout button and they would be logged out. Since they are logged out they can't access the change password and view users page like they were able to before.
	</p>
</div>

<?php 

	//This the PHP include for the footer
	include ('includes/foot.php');

?>