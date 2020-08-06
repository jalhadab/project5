
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>  
 <div>CSC 174 - Summer 2020</div>  
        <h1>Sign Up</h1>
        <p >Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username: </label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password: </label>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class=" <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password: </label>
                <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
          
                <input type="submit" value="Submit">
                <a href="index.php">Cancel</a>
          
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>

</body>
</html>