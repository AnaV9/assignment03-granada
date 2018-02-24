<?php include "inc/html-top.inc";?>
	<body>
		<div class= "container">
		<!--computer style/design, techno-->
		<!--banner (header) and navigation need to be positoined as absolute so that when you slide down you can still see them-->
		<?php include "inc/header.inc";?>
		<?php include "inc/nav.inc";?>

		<div> <!--slider of images of place where each person is from, not with arrows, instead with the little dots of the three pictures udner each picture-->
        	<img src="images/aa.jpg" alt="Alejandro Abreu Picture">
			<img src="images/cb.jpg" alt="Casey Brentnall Picture">
			<img src="images/bl.jpg" alt="Bei Lu Picture">
		</div>
		
		<!--list the three people in 1 row, 3 columns - under the slider-->
		<!--order of last name-->

		<h2>Alejandro Abreu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/aa.jpg" alt="Alejandro Abreu Picture">
				<figcaption></figcaption>
			</figure>
			<p></p><!---insert small about me-->

		<h2>Casey Brentnall</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/cb.jpg" alt="Casey Brentnall Picture">
				<figcaption></figcaption>
			</figure>
			<p></p><!---insert small about me-->

		<h2>Bei Lu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/bl.jpg" alt="Bei Lu Picture">
				<figcaption></figcaption>
			</figure>
			<p></p><!---insert small about me-->

		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>