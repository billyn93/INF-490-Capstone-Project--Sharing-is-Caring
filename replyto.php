<?php
	include ('includes/header.php');
	include('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);




?>
<html>
<head><title>Classroom Tips Forum</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<body>

		<div class="forumdesc">

			<?php
				if (!isset($_SESSION['log_username'])) {
					echo "<p>Please log in first or <a href='register.php'>click here</a> to register</p>";
				}
			 ?>
		</div>





			<div class='content'>
			<?php disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']); ?>

			<?php
			if (isset($_SESSION['log_username'])) {
				replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);

			}
			 ?>
		</div>

	</div>
</body>
</html>
