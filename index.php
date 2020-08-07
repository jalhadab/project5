<?php
// Initialize the session
session_start();
 
// Include config file
require_once "./inc/connect-db.php";

// Check if the user is already logged in, if yes then load the home page without login form
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  // header("location: index.php");
} else {
	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		// Check if username is empty
		if(empty(trim($_POST["username"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["username"]);
		}
		
		// Check if password is empty
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}
		
		// Validate credentials
		if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT id, username, password FROM users WHERE username = ?";
			
			if($stmt = mysqli_prepare($connection, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				
				// Set parameters
				$param_username = $username;
				
				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){
					// Store result
					mysqli_stmt_store_result($stmt);
					
					// Check if username exists, if yes then verify password
					if(mysqli_stmt_num_rows($stmt) == 1){                    
						// Bind result variables
						mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($password, $hashed_password)){
								// Password is correct, so start a new session
								session_start();
								
								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;                            
								
								// Redirect user to welcome page
								header("location: directory.php");
							} else{
								// Display an error message if password is not valid
								$password_err = "The password you entered was not valid.";
							}
						}
					} else{
						// Display an error message if username doesn't exist
						$username_err = "No account found with that username.";
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}

				// Close statement
				mysqli_stmt_close($stmt);
			}
		}
		
		// Close connection
		mysqli_close($connection);
	}
}
?>
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
			<div class = "band">
				<section class="container">
					<div class="primary">
						<!-- Primary Optical Area -->
							<div class="boxer">CSC 174 - Summer 2020</div>
					</div>
					<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>
						<div class="buttons paddis">
							<a class = "button" href="reset-password.php">Reset Password</a>
							<a class = "button deleter" href="logout.php">Log Out</a>
						</div>
					<?php } else { ?>
					<form class="field" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<!-- Strong Fallow Area -->
						<div>Student login:</div>
						<!-- TODO: Make this not a div so maybe a h#? -->
						<div class="field <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<div class="field is-horizontal">
								<div class="field-label">
									<label for="username" class="label has-text-white">Username:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" name="username" id="username" placeholder="Username" class="input" value="<?php echo $username; ?>">
										</div>
									</div>
								</div>
							</div>
							<p class="help is-pulled-right has-text-danger"><?php echo $username_err; ?></p>
						</div>
						<div class="field <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<div class="field is-horizontal">
								<div class="field-label">
									<label for="passcode" class="label has-text-white">Password:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="password" name="password" id="passcode" placeholder="Password" class="input">
										</div>
									</div>
								</div>
							</div>
							<p class="help is-pulled-right has-text-danger"><?php echo $password_err; ?></p>
						</div>
						<div class="field">
							<div class="control is-pulled-right">
								<input type="submit" class="button is-link" value="Go!">
							</div>
						</div>
					</form>
					<?php } ?>
				</section><!-- .container -->
			</div>
		</header>
		<main class="big-message">
			<!-- Some big center content -->
			<div class="white-back">
			<h1>Explore CSC 174</h1>
			<h2>Summer 2020 semester</h2>
			</div>
		</main>
		<footer class="persistent">
			<div class = "band silver">
			</div>
			<div class = "band">
				<div class="container">
					<div class="weak">
						<!-- Weak Fallow Area -->
						<p>CSC 174: Advanced Front End Web Development:</p>
						<p>Project 5 Team Seoul</p>
					</div>
					<div class="terminal">
						<!-- Terminal Area -->
						<a class = "button is-link" href="directory.php">Go to Directory →</a>
					</div>
				</div><!-- .container -->
			</div>
		</footer>
		<?php include "inc/scripts.php" ?>
	</body>
</html>