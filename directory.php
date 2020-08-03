<?php $customTitle = "Directory"; ?>
<?php include "inc/html-top.php" ?>

<body>
  <header class="container">
    <div>
      <a href="index.php" id="homepagelink">
        <h1>CSC 174</h1>
        <p>Students</p>
      </a>
    </div>
    <?php include "inc/nav.php" ?>
  </header>

  <div class="background">
    <div class="container">
      <article>
        <header class="direct">
          <h2>Directory</h2>
        </header>

        <h3>Team Seoul</h3>
        <section class="dir-student space-below">
          <div class="studentquote">"This is a quote too powerful to name."</div>
          <div>
            <h4>Bo Wu</h4>
            <p>My name is Bo Wu. I am a rising junior student in University of Rochester majoring in
              Computer Science. Before UR, I spend two years of my college life at Saint Louis Unversity
              in Missouri. I am also an international student from Anhui, China. I am passionate about
              video games and many things associated with games since I was in my primary school.</p>
          </div>
          <a href="bo.php">Read more</a>
        </section>
        <section class="dir-student space-below">
          <div class="studentquote">"This is a quote too powerful to name."</div>
          <div>
            <h4>Emely Rosa</h4>
            <p>My name is Emely Rosa-Ortiz. I am a rising senior student in University of Rochester majoring
              in computer science. I am from New York City. I am passionate about coffee and latte art.</p>
          </div>
          <a href="emely.php">Read more</a>
        </section>
        <section class="dir-student">
          <div class="studentquote">"This is a quote too powerful to name."</div>
          <div>
            <h4>Eunlim Kim</h4>
            <p>Hello, my name is Eunlim Kim. I am a senior majoring in computer science, and my particular
              interest is Human Computer Interaction (HCI). I was born in South Korea and came to United
              States when I was 15 years old. I want to use my knowledge in HCI to help people who have
              disadvantages.</p>
          </div>
          <a href="kim.php">Read more</a>
        </section>

        <h3>Other Teams</h3>
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