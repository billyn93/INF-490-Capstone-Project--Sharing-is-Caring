<?php

  include('config/config.php');

  $topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];

	$insert = mysqli_query($connection, "INSERT INTO topics (`cat_id`, `subcat_id`, `author`, `title`, `content`, `date_posted`)
								  VALUES ('".$cid."', '".$scid."', '".$_SESSION['log_username']."', '".$topic."', '".$content."', NOW());");

	if ($insert) {
		header("Location: topics.php?cid=".$cid. "&scid=".$scid."");
	}

?>
