<?php
// Include config file
require_once "./inc/connect-db.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connection);
}
$customTitle="Sign Up";
?>
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
	<body class="formpage">
        <div class = "form-container">
    		<h1 class="blieg">Sign Up</h1>
    		<p>Please fill this form to create an account.</p>
    		<form class = "field" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    			<div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
    				<label for="username" class="label blieg">Username: </label>
    				<input type="text" name="username" value="<?php echo $username; ?>" class="input">
    				<span class="help"><?php echo $username_err; ?></span>
    			</div>
    			<div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
    				<label for="password" class="label blieg">Password: </label>
    				<input type="password" name="password" value="<?php echo $password; ?>" class="input">
    				<span class="help"><?php echo $password_err; ?></span>
    			</div>
    			<div class=" <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
    				<label for="confirm_password" class="label blieg">Confirm Password: </label>
    				<input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" class="input">
    				<span class="help-block"><?php echo $confirm_password_err; ?></span>
    			</div>
                <div class = "field is-grouped">
                    <div class = "control">
        			 <a class="button is-light" href="index.php">Cancel</a>
                    </div>
                    <div class = "control">
                        <input type="submit" value="Submit" class="button is-link">
                    </div>
                </div>
    			
    			<p>Already have an account? <a class = "button is-light" href="index.php">Login here</a></p>
    		</form>
        </div>
	</body>
</html>