<?php $customTitle="Directory";?>
<?php include "inc/html-top.php"?>
	<body>
		<header class="container">
			<div>
			<a href="index.php">
				<h1>CSC 174</h1>
				<p>Students</p>
			</a>
			</div>
			<?php include "inc/nav.php"?>
		</header>
		<div class="background">
			<div class="container">
				<article>
					<header>
						<h2>Directory</h2>
					</header>
						<h3>Team Seoul</h3>
					<section class="dir-student space-below">
						<div class="studentquote">"This is a quote to powerful to name."</div>
						<div>
							<h4>Bo Wu</h4>
							<p>My name is Bo Wu. I am a rising junior student in University of Rochester majoring in
								Computer Science. Before UR, I spend two years of my college life at Saint Louis Unversity
								in Missouri. I am also an international student from Anhui, China. I am passionate about
							video games and many things associated with games since I was in my primary school.</p>
						</div>
						<a href="bo.php">Read more</a>
					</section>
					<section class="dir-student space-below">
						<div class="studentquote">"This is a quote to powerful to name."</div>
						<div>
							<h4>Emely Rosa</h4>
							<p>My name is Emely Rosa-Ortiz. I am a rising senior student in University of Rochester majoring
							in computer science. I am from New York City. I am passionate about coffee and latte art.</p>
						</div>
						<a href="emely.php">Read more</a>
					</section>
					<section class="dir-student">
						<div class="studentquote">"This is a quote to powerful to name."</div>
						<div>
							<h4>Eunlim Kim</h4>
							<p>Hello, my name is Eunlim Kim. I am a senior majoring in computer science, and my particular
								interest is Human Computer Interaction (HCI). I was born in South Korea and came to United
								States when I was 15 years old. I want to use my knowledge in HCI to help people who have
							disadvantages.</p>
						</div>
						<a href="kim.php">Read more</a>
					</section>
					<h3>Other Teams</h3>
					/* feed in other students here from the data form */
					<section class="dir-student space-below">
						<div class="studentquote">"Quote."</div>
						<div>
							<h4>Name</h4>
							<p>biography</p>
						</div>
						<a href="link">Read more</a>
					</section>
				</article>
				<footer class="dir-footer">
					<div>CSC 174: Advanced Front End Web Development - Project 4</div>
				</footer>
			</div>
		</div>
		<?php include "inc/scripts.php"?>
	</body>
</html>