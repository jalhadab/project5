<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect them to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: directory.php");
	exit;
} ?>
<?php
$formTitle = "Create";
// include the form rendering function 
include("renderform.php");
// connect to the database
include("./inc/connect-db.php");
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$quote = mysqli_real_escape_string($connection, htmlspecialchars($_POST['quote']));
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$about = mysqli_real_escape_string($connection, htmlspecialchars($_POST['about']));
	$website = mysqli_real_escape_string($connection, htmlspecialchars($_POST['website']));
	echo $quote.$firstname.$lastname.$about.$website;

	// check to make sure both fields are entered
	if ($quote == '' || $firstname == '' || $lastname == '' || $about == '' || $website == '') {
		echo $quote.$firstname.$lastname.$about.$website;
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $quote, $firstname, $lastname, $about, $website, $error, $formTitle);

	} else {
		echo $quote.$firstname.$lastname.$about.$website;
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO seoul_directory (quote, firstname, lastname, about, website) VALUES ('$quote', '$firstname', '$lastname', '$about', '$website')");

		// once saved, redirect back to the view page
		header("Location: directory.php");
	}
} else {
	echo $quote.$firstname.$lastname.$about.$website;
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','', '', $formTitle);
}
?>