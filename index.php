<?php $customTitle="Home";?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Project 5 Seoul Team">
		<title><?php echo $customTitle;?> | Seoul Project 5</title>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
		<link rel="stylesheet" type="text/css" href="css/override.css">
	</head>

	<body class="z-pattern">
		<header class="persistent">
			<section class="container">
				<div class="primary">
					<!-- Primary Optical Area -->
						<div class="is-hidden-mobile">CSC 174 - Summer 2020</div>
						<div class="is-hidden-tablet">Explore CSC 174:</div>
						<div class="is-hidden-tablet">Summer 2020 semester</div>
				</div>
				
				<form class="field">
					<!-- Strong Fallow Area -->
					<div>Student login:</div>
					<!-- TODO: Make this not a div so maybe a h#? -->
					
					<div class="field is-horizontal">
						<div class="field-label">
							<label for="username" class="label has-text-white">Username:</label>
						</div>
						<div class="field-body">
							<div class="field">
								<div class="control">
									<input type="text" name="username" id="username" placeholder="Username" class="input">
								</div>
							</div>
						</div>
					</div>
					<div class="field is-horizontal">
						<div class="field-label">
							<label for="passcode" class="label has-text-white">Password:</label>
						</div>
						<div class="field-body">
							<div class="field">
								<div class="control">
									<input type="password" name="passcode" id="passcode" placeholder="Password" class="input">
								</div>
							</div>
						</div>
					</div>					
					<div class="field">
						<div class="control is-pulled-right">
							<a href="directory.php" class="button is-link">Go!</a>
						</div>
					</div>
				</form>
				
			</section><!-- .container -->
		</header>
		<main class="big-message">
			<!-- Some big center content -->
			<div class="is-hidden-mobile">
			<h1>Explore CSC 174</h1>
			<h2>Summer 2020 semester</h2>
			</div>
		</main>
		<footer class="persistent">
			<div class="container">
				<div class="weak">
					<!-- Weak Fallow Area -->
					<p>CSC 174: Advanced Front End Web Development:</p>
					<p>Project 5 Team Seoul</p>
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