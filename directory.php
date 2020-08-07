<?php
	// connect to the database
	include('./inc/connect-db.php');
	// get results from database
	$result = mysqli_query($connection, "SELECT * FROM seoul_directory");
?>
<?php $customTitle = "Directory"; ?>
<?php include "inc/html-top.php"; ?>
	<body>
		<header>
			<div class = "band">
				<div class = "container">
					<a href="index.php" id="homepagelink">
						<h1 class = "blieg">CSC 174 - Students</h1>
						<p>Hi, username!</p>
					</a>
					<nav class="menu">
						<a class = "button" href="index.php">Home/Login</a>
						<?php ?>
						<a class = "button deleter" href="logout.php">Log Out</a>
						<a class = "button" href="reset-password.php">Reset Password</a>
					</nav>
				</div>
			</div>
		</header>
		<div class="background">
			<div class="container">
				<article>
					<header class="direct">
						<h2>Directory</h2>
					</header>
					<?php while($row = mysqli_fetch_array($result)) { // loop through results of db query?>
					<section class="dir-student space-below">
						<q class="studentquote"><?php echo $row['special']; ?></q>
						<div>
							<h3><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h3>
							<p><?php echo $row['about']; ?></p>
						</div>
						<nav class="menu">
							<a class="button" href="<?php echo $row['website']; ?>" target="_blank"><?php echo $row['firstname']; ?>'s Website</a>
							<a class="button" href="edit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a>
							<a class="button deleter" onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo htmlspecialchars($row['id']); ?>">Delete</a>
						</nav>
					</section>
					<?php } ?>
					<footer>
						<p>Add a New Student Record</p>
					</footer>
				</article>
			</div>
		</div>
	</body>
</html>
<?php mysqli_free_result($result); mysqli_close($connection); ?>