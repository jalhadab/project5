<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $quote, $citation, $about, $website, $error, $formTitle) {
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $formTitle; ?> Record</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
		<link rel="stylesheet" type="text/css" href="css/override.css">
	</head>
	<body class="formpage">
		<?php
		// if there are any errors, display them
		if ($error != '') {
			echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
		}
		?>
		<div class="form-container">
			<h1 class="blieg"><?php echo $formTitle; ?> Record</h1>
			<form class="field" action="" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="field">
					<div class="control">
						<label><strong>First Name: *</strong></label>
						<input type="text" name="firstname" value="<?php echo $firstname; ?>" required/><br>
					</div>
					<div class="control">
						<label><strong>Last Name: *</strong></label>
						<input type="text" name="lastname" value="<?php echo $lastname; ?>" required/><br>
					</div>
				</div>
				<div class="field">
					<div class="control">
						<label><strong>About: *</strong></label>
						<textarea class="textarea is-normal" name="about" id="about" required><?php echo $about; ?></textarea><br>
					</div>
				</div>
				<div class="field">
					<div class="control">
						<label><strong>Favorite Quote: *</strong></label>
						<input type="text" name="quote" value="<?php echo $quote; ?>" required/><br>
					</div>
					<div class="control">
						<label><strong>Who said the quote: *</strong></label>
						<input type="text" name="citation" value="<?php echo $citation; ?>" required/><br>
					</div>
				</div>
				<div class="field">
					<div class="control">
						<label><strong>Website: *</strong></label>
						<input type="text" name="website" id="website" value="<?php echo $website; ?>" required/><br>
					</div>
				</div>
				
				<div>* required</div>
				<div class="field is-grouped">
					<div class="control">
						<a href="directory.php" class="button is-link is-light">Cancel</a>
					</div>
					<div class="control">
						<input class="button is-link" type="submit" name="submit" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<?php } ?>