<!DOCTYPE html>
<html>
<head>
<title><?php echo $page_title; ?></title>
<meta charset="utf-8" />
<?php echo $description; ?>
<?php echo $keywords; ?>
<?php echo $author; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="viewport" content="width=device-width" />
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
		if(window.addEventListener)
			{var kkeys=[],game="38,38,40,40,37,39,37,39,66,65";
				window.addEventListener("keydown",function(e)
					{kkeys.push(e.keyCode);if(kkeys.toString().indexOf(game)>=0)
						{alert('There\'s no place like 127.0.0.1');
						window.location="https://www.youtube.com/watch?v=I-XmXrz-t2Q";
						}
					},true);
			}
</script>
<!--Nav bar JQuery-->
<script>
	$(function () {
		$('nav li ul').hide().removeClass('fallback');
		$('nav li').hover(function () {
			$('ul', this).stop().slideToggle(200);
		});
	});
</script>
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70903824-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<div class="wrapper">
	<div class="blue">
		<a href="index.php"><img class="logo" src="images/colourlogo.png" alt="Michael Campbell Logo"></a>
		<div id='cssmenu'>
			<ul>
   				<li>
   					<a href='index.php'>
   						<span>
   							Home
   						</span>
   					</a>
   				</li>
   				<li>
   					<a href='aboutme.php'>
   						<span>
   							About Me
   						</span>
   					</a>
   				</li>
   				<li>
   					<a href='#'>
   						<span>
   							Portfolio
   						</span>
   					</a>
   					<ul>
         				<li>
         					<a href='webdevelopment.php'>
         						<span>
         							Web Development
         						</span>
         					</a>
         				</li>
         				<li>
         					<a href='digitaldesign.php'>
         						<span>
         							Digital Design
         						</span>
         					</a>
        				 </li>
      				</ul>
   				</li>
   				<li class='last'>
   					<a href='contact.php'>
   						<span>
   							Contact
   						</span>
   					</a>
   				</li>
			</ul>
		</div>	
	</div>
<div class="content">