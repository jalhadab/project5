<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit New Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/override.css">
</head>
<body>

<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<div class="container">

<h1>Submit New Record</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="field">
		<div class="control">
			<strong>ID: *</strong> <input type="text" name="firstname" value="<?php echo $id; ?>"/><br><br>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<strong>Picture Upload: *</strong>
			<input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $picture; ?>" /><br><br>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<strong>Name: *</strong> <input type="text" name="lastname" value="<?php echo $name; ?>"/><br>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<strong>Bio: *</strong> <input type="text" class="textarea is-large" name="phone" value="<?php echo $bio; ?>"/><br>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<strong>Link: *</strong> <input type="text" name="email" value="<?php echo $link; ?>"/><br>
		</div>
	</div>
	<div>* required</div>
	<div class="field is-grouped">
		<div class="control">
			<input class="button is-link" type="submit" name="submit" value="Submit">
		</div>
		
		<div class="control">
			<a href="." class="button is-link is-light">Cancel</a>
		</div>
	</div>
</form>

</div>
</body>
</html>
<?php
}
?>
