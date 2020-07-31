<?php $customTitle="Home";?>
<?php include "inc/html-top.php";?>
	<body class="z-pattern">
		<header class="persistent">
			<section class="container">
				<div class="primary">
					<!-- Primary Optical Area -->
					<a href="index.php">
						<h1>CSC 174:</h1>
						<div>Summer 2020</div>
					</a>
				</div>
				
				<div class="button">
				<a href="new.php">Student access form</a>
				</div>
				
				<form class="strong">
					<!-- Strong Fallow Area -->
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" placeholder="username">
					<label for="passcode">Password:</label>
					<input type="password" name="passcode" id="passcode" placeholder="password">
					<input type="submit" value="Submit" id="submit">
				</form>
			</section><!-- .container -->
		</header>
		<main class="big-message">
			<!-- Some big center content -->
			<h2>.</h2>
			<h3>.</h3>
		</main>
		<footer class="persistent">
			<div class="container">
				<div class="weak">
					<!-- Weak Fallow Area -->
					<p>CSC 174:Advanced Front-end Web:</p>
					<p>Project 4 Team Seoul</p>
				</div>
				<div class="terminal">
					<!-- Terminal Area -->
					<a href="directory.php">Go to Directory →</a>
				</div>
			</div><!-- .container -->
		</footer>
		<?php include "inc/scripts.php" ?>
	</body>
</html>