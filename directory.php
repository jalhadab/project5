<?php
	// connect to the database
	include('./inc/connect-db.php');
	// get results from database
	$result = mysqli_query($connection, "SELECT * FROM seoul_directory");
?>
<?php $customTitle = "Directory"; ?>
<?php include "inc/html-top.php"; ?>
<body>
	<header class="container">
		<div>
			<a href="index.php" id="homepagelink">
				<h1 class="title">CSC 174 - Students</h1>
				<!-- TODO: show logged in user or generic greeting -->
				<p class="subtitle">Hi, username!</p>
			</a>
		</div>
		<nav class="menu">
			<a href="index.php">Login</a>
			<a href="index.php">Home</a>
			<a href="">Log Out</a>
			<a href="reset-password.php">Reset Password</a>
		</nav>
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
					<a href="<?php echo $row['website']; ?>" target="_blank"><?php echo $row['firstname']; ?>'s Website</a>
					<a href="renderform.php">Edit</a>
					<a href="">Delete</a>
				</section>
			<?php } ?>
				<footer>
					<p>Add a New Student Record</p>
				</footer>
				<!-- /* feed in other students here from the data form */ -->
				

					<?php
					// connect to the database
					include('connect-db.php');

					// get results from database
					$result = mysqli_query($connection, "SELECT * FROM directory");
					?>
					<div class="data_table">
						<table>
							<!-- <tr>
								<th>Quote</th>
								<th>Name</th>
								<th>Bio</th>
								<th>Link</th>
								<th colspan="2"><em>Delete / Edit</em></th>
							</tr> -->
							<?php
							// loop through results of database query, displaying them in the table
							while ($row = mysqli_fetch_array($result)) {
							?>
								<section class="dir-student space-below">
									<div class="studentquote"><?php echo $row['quote']; ?></div>
									<div>
										<h4><?php echo $row['fullname']; ?></h4>
										<p><?php echo $row['bio']; ?></p>
									</div>
									<a href="http://<?php echo $row['link']; ?>/" target="_blank">Read more</a>
									<a href="edit.php?id=<?php echo $row['id']; ?>" class="buttonslink">Edit</a></td>
									<a onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>" class="buttonslight">Delete</a>
								</section>
								<?php
								// close the loop
							}
							?>


								<!-- <tr>
									<td><?php echo $row['quote']; ?></td>
									<td><?php echo $row['fullname']; ?></td>
									<td><?php echo $row['bio']; ?></td>
									<td><?php echo $row['link']; ?></td>
									<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
									<td><a onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
								</tr> -->
							
						</table>
					</div>
			 
</body>

</html>
<?php
mysqli_free_result($result);
mysqli_close($connection);
?>