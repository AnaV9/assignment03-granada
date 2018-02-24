<?php include "inc/html-top.inc";?>
	<body class="home">
		<div class= "container">
		<!--computer style/design, techno-->
		<!--banner and navigation to be positoin as absolute so that when you slide down you can still see it-->
		<?php include "inc/header.inc";?>
		<?php include "inc/nav.inc";?>

		<div> <!--images of place where each person is from, not with arrows, instead with the little dots of the three pictures udner each picture-->
        	<img src="images/abroad.jpg" alt="">
			<img src="images/favphoto.jpg" alt="">
			<img src="images/toronto.jpg" alt="">
		</div>
		
		<!--list the three people in 1 row, 3 columns - under the slider-->

		<h2>Alejandro Abreu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/abroad.jpg" alt="" >
				<figcaption></figcaption>
			</figure>
			
			<p></p><!---insert small about me-->

		<h2>Bei Lu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/toronto.jpg" alt="">
				<figcaption></figcaption>
			</figure>
			<p></p><!---insert small about me-->

		<h2>Casey Brentnall</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/favphoto.jpg" alt="">
				<figcaption></figcaption>
			</figure>
			<p></p><!---insert small about me-->

		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>