<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Phone list</title>
	      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

       <link type="text/css" rel="stylesheet" href="override.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<h1>Submit New Record</h1>
	 <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<div class="input_contain">
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID: *</strong> <input type="text" name="firstname" value="<?php echo $id; ?>"/><br><br>
	<strong>Picture Upload: *</strong>
	<input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $picture; ?>" /><br><br>
	<strong>Name: *</strong> <input type="text" name="lastname" value="<?php echo $name; ?>"/><br>
	<strong>Bio: *</strong> <input type="text" name="phone" value="<?php echo $bio; ?>"/><br>
	<strong>Link: *</strong> <input type="text" name="email" value="<?php echo $link; ?>"/><br>
	<div>* required</div>
	<input type="submit" name="submit" value="Submit">
</form>

<div class="input_cancel">
	<br>
	<a  href="directory.php">Cancel</a>
</div>
</div>
</body>
</html>
<?php
}
?>
