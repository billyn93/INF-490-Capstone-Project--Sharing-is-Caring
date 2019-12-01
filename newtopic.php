<?php
	include ('includes/header.php');
  include ('includes/classes/User.php');
	include ('content_function.php');


?>
<html>
<head>
	<title>Classroom Tips Forum</title>
	<link rel="stylesheet" type="text/css" href="assets/css/newtopic.css">
</head>

<body>





			<div class="content">
  <?php
  if (isset($_SESSION['log_username'])) {
    echo "<form action='addnewtopic.php?cid=" . $_GET['cid'] . "&scid=" . $_GET['scid'] . "' method='POST'>
						  <p>Title: </p>
						  <input type='text' id='topic' name='topic' size='80' /><br/><br/>
						  <p>Content: </p>
						  <textarea id='content' name='content' cols='80' rows='5'></textarea><br /><br />
						  <input type='submit' value='Add New Post' /></form>";
  } else {
    echo "<p>please login first or <a href='register.php'>click here</a> to register.</p>";
  }

  ?>
	</div>

	</div>
</body>
</html>
