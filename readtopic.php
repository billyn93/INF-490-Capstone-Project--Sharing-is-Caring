<?php
	include ('includes/header.php');
  include ('includes/classes/User.php');
	include ('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);


?>
<html>
<head><title>Classroom Tips Forum</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<body>

		<div class="forumdesc">


		</div>



			<?php
			disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
			echo "<div class='content'><p>All Replies (".countReplies($_GET['cid'], $_GET['scid'], $_GET['tid']).")
				  </p></div>";

			dispreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);

			 ?>
			 <?php
 			replylink($_GET['cid'], $_GET['scid'], $_GET['tid']);
 			 ?>

	</div>
</body>
</html>
