<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
     <div>CSC 174 - Summer 2020</div>  
        <h1>Reset Password</h1>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
             <div class="<?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password: </label>
                <input type="password" name="new_password" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password: </label>
                <input type="password" name="confirm_password">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            
                <input type="submit" value="Reset">
                <a href="directory.php">Cancel</a>
            
        </form>
</body>
</html>