<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/nav.css" rel="stylesheet">
	<title>Team Granada</title>
	<!-- JQuery plugin -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="jquery_plugin/jquery.flexslider.js"></script>	
    <script>
    $(window).load(function() {
    $('.flexslider').flexslider();
    });
    </script>

	<script src="js/menu-highlighter.js"></script>


</head>
<body>
	<header>
		<h1>Team Granada</h1>
	</header>
	
    <?php 
	//$current = 'index';
	include 'inc/navigation.php';?>

	<div class="container">

		<h1>About our team</h1>
		<p>Team Granada has three members. They are Qianyi Li, Forest Shi and Lady Dount (We only have 2 members in the team. So we picked a random student file from assignemnt 1 and called he or she John Burger.) They have responsibilties as Information Architect, design artist and coder. This page will give you a glance of all three of the team members in the sequence of Information Architect, design artist and coder. </p>

		<div class="flexslider">
	    <ul class="slides">
	    <li>
	      <img src="img/qli31.jpg" alt="picture of Qianyi Li">
	    </li>
	    <li>
	      <img src="img/fshi.jpg" alt="picture of Forest Shi">
	    </li>
	    <li>
	      <img src="img/jburger.jpg" alt="picture of John Burger">
	    </li>
	    </ul>
	    </div>

		<h2>Qianyi - Information Architect</h2>
		<h3>About Me</h3>
		<p>I am an undergraduate student in University of Rochester. I studied in NWMSU for two years before I transfer to here. I grew up in Shenzhen, China. Shenzhen is a beautiful city near the sea. I hope I can pursue a guraduate degree after I graduate from UR. </p>

		<h2>Forest Shi - Design Artist</h2>
		<h3>About me</h3>
		<p>I am an American born Chinese. I grew up in Aurora, Ohio, later moved to Acton, Massachusetts, and then to Qingdao, China, and most recently Shanghai, China. I moved around a lot growing up and so I don’t really have any attachments to a certain location and to me home is wherever my family is rather than a city. Maybe because of all the moving around I have come to enjoy travel. I want to be able to go to as many places as I can and just explore the world. Life on the road would the dream. For periods of time in my life I literally live out of a suitcase!</p>

		<h2>John Burger - Coder</h2>
		<h3>About me</h3>
		<p>I’m a Senior here at the U of R, trying my hardest to send out as many job applications as I can while still working hard to make the most of this last semester! I’m a Central New York kid who found his love for computer programming and web art through video games as a kid. Some of my hobbies include running 5ks, collecting old and new video game software/hardware, repairing old computers, playing video games from just about every genre on just about every device, drawing, and drinking all kinds of beer (especially a good, cloudy Belgian white).</p>

	</div>

	<?php include "inc/footer.php";?>
</body>

<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="js/menu-highlighter.js"></script>

</html>
