<?php 
$customCSS = "<link rel='stylesheet' href='css/home.css'> ";

include "inc/html-top.php";

?>

</head>


<body>
	<?php include "inc/nav.php"; ?>
	<header>
		<h1>City-team: Seoul</h1>
		<section>
			<div>Bo Wu</div>
			<div>Emely Rosa</div>
			<div>Eun Lim Kim</div>
		</section>
	</header>


	<div class="background">	
		<div class="container">
			<article>
				<div class="column_1">
					<figure>
						<img src="images/bo-selfie.jpg" alt="Bo's photo">
					</figure>
					<h2>Bo Wu</h2>
					<div class="major">Rising Junior</div>
					<div class="major">Major in Computer Science</div>
					<a href = "bo.php">Know More...</a>
				</div>

				<div class="column_2">
					<figure>
		            	<img src="images/emely.jpg" alt="Emely's photo">
		        	</figure>
		        	<h2>Emely Rosa</h2>
					<div class="major">xxx</div>
					<div class="major">xxxxx</div>
					<a href = "emely.php">Know More...</a>
				</div>

				<div class="column_3">
					<figure>
		            	<img src="images/eunlimkim.jpg" alt="Kim's photo">
		        	</figure>
		        	<h2>Eun Lim Kim</h2>
					<div class="major">xxx</div>
					<div class="major">xxxxx</div>
					<a href = "kim.php">Know More...</a>
				</div>
			</article>

			<footer>
				<p>CSC 174:Advanced Front-end Web - Project 1</p>
			</footer>
		
		</div><!-- used for center container -->
	</div>


<?php include "inc/scripts.php" ?>
</body>


</html>
