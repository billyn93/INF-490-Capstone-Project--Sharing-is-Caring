<?php
	include ('includes/header.php');
  include ('includes/classes/User.php');
	include ('content_function.php');


?>
<html>
<head><title>Classroom Tips Forum</title></head>

<link href="assets/css/forum.css" type="text/css" rel="stylesheet" />
<body>

		<div class="forumdesc">

		</div>
		<br/><br/>


		<div class="content">
			<?php disptopics($_GET['cid'] , $_GET['scid']); ?><br/>
			<?php
				if (isset($_SESSION['log_username'])) {
					echo "<div class='newtopicbutton'><a href='newtopic.php?cid=". $_GET['cid'] . "&scid=" . $_GET['scid'] . "'><button>
						  Add New Topic</button></a></div>";
				}
			?>
		</div>
	</div>
</body>
</html>
