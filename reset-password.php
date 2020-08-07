<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">
</head>
<body class = "formpage">
    <div class = "form-container">
        <h1 class = "blieg">Reset Password</h1>
        <p>Please fill out this form to reset your password.</p>
        <form class = "field" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
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
            <div class = "field is-grouped">
                <a class = "button is-link is-light" href="directory.php">Cancel</a>
                <input class = "button is-link" type="submit" value="Reset">
            </div>
            
        </form>
    </div>
</body>
</html>