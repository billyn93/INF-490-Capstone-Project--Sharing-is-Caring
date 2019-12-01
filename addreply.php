<?php
include('config/config.php');
include ('includes/classes/User.php');
include ('content_function.php');




$comment = nl2br(addslashes($_POST['comment']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	$tid = $_GET['tid'];

  $insert = mysqli_query($connection, "INSERT INTO replies (`cat_id`, `subcat_id`, `topic_id`, `author`, `comment`, `date_posted`)
								  VALUES ('".$cid."', '".$scid."', '".$tid."', '".$_SESSION['log_username']."', '".$comment."', NOW());");





                if ($insert) {
                  		header("Location: readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$tid."");
                  	}

									





 ?>
