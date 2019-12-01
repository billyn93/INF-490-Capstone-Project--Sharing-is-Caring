<?php




function dispcategories() {

  $timezone = date_default_timezone_set("America/Chicago");
  $host = "localhost";
  $database = "sharing";
  $user = "root";
  $pass = "";

  $connection = mysqli_connect($host, $user, $pass, $database);



		$select = mysqli_query($connection, "SELECT * FROM categories");

		while ($row = mysqli_fetch_assoc($select)) {
			echo "<table class='category-table'>";
			echo "<tr><td class='main-category' colspan='2'>".$row['cat_title']."</td></tr>";
      dispsubcategories($row['cat_id']);
			echo "</table>";
		}
	}



  function dispsubcategories($parent_id) {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);

		$select = mysqli_query($connection, "SELECT cat_id, subcat_id, subcat_title, subcat_desc FROM categories, subcategories
									  WHERE ($parent_id = categories.cat_id) AND ($parent_id = subcategories.parent_id)");

		while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td class='category_title'><a href='topics.php?cid=".$row['cat_id']."&scid=".$row['subcat_id']."'>
				  ".$row['subcat_title']."<br />";
			echo $row['subcat_desc']."</a></td>";


		}
	}

  function dispbooks() {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);

    $select = mysqli_query($connection, "SELECT * FROM books JOIN categories ON categories.cat_id = books.cat_id JOIN subcategories ON subcategories.subcat_id = books.subcat_id JOIN users ON users.id = books.owner_id");
    echo "<table class='book-table'>";
    echo "<tr colspan='5'><th>Textbook Name</th><th>Owner</th><th>Category</th><th>Course</th><th>Available</th></tr>";
    while ($row = mysqli_fetch_assoc($select)) {
      echo "<tr><td class='main-category'>".$row['name']."</td><td> ".$row['username']."</td><td>".$row['cat_title']."</td><td>".$row['subcat_title']."</td><td>" .$row['available']."</td></tr>";

    }
echo "</table>";
  }

  function disptopics($cid, $scid) {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);
		$select = mysqli_query($connection, "SELECT topic_id, author, title, date_posted, views, replies FROM categories, subcategories, topics
									  WHERE ($cid = topics.cat_id) AND ($scid = topics.subcat_id) AND ($cid = categories.cat_id)
									  AND ($scid = subcategories.subcat_id) ORDER BY topic_id DESC");
		if (mysqli_num_rows($select) != 0) {
			echo "<table class='topic-table'>";
			echo "<tr><th>Title</th><th>Posted By</th><th>Date Posted</th><th>Views</th><th>Replies</th></tr>";
			while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td><a href='readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$row['topic_id']."'>
					 ".$row['title']."</a></td><td>".$row['author']."</td><td>".$row['date_posted']."</td><td>".$row['views']."</td>
					 <td>".$row['replies']."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<p>this category has no topics yet!  <a href='/forum-tutorial/newtopic/cid=".$cid."/". "&scid=".$scid."'>
				 add the very first topic like a boss!</a></p>";
		}
	}

  function disptopic($cid, $scid, $tid) {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);
		$select = mysqli_query($connection, "SELECT categories.cat_id, subcategories.subcat_id, topic_id, author, title, content, date_posted FROM
									  categories, subcategories, topics WHERE ($cid = categories.cat_id) AND
									  ($scid = subcategories.subcat_id) AND ($tid = topics.topic_id)");

		$row = mysqli_fetch_assoc($select);
		echo nl2br("<div class='content'><h2 class='title'>".$row['title']."</h2><p>".$row['author']."\n".$row['date_posted']."</p></div>");
		echo "<div class='content'><p>".$row['content']."</p></div>";
    echo mysqli_error($connection);
	}

  function addView($cid, $scid, $tid) {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);

    $update = mysqli_query($connection, "UPDATE topics SET views = views + 1 WHERE cat_id = ".$cid." AND
									  subcat_id = ".$scid." AND topic_id = ".$tid."");

  }

    function replylink ($cid, $scid, $tid) {
      echo "<a href='replyto.php?cid=".$cid."&scid=".$scid."&tid=".$tid."'><button>
      Reply to this post</button></a>";
    }

    function replytopost ($cid, $scid, $tid) {
      echo "<div class='content'><form action='addreply.php?cid=".$cid."&scid=".$scid."&tid=".$tid."'
      method ='POST'>
      <p>Comment: </p>
      <textarea cols='80' rows='5' id='comment' name='comment'></textarea><br/><br/>
			  <input type='submit' value='Reply' />
			  </form></div>";
    }

    function dispreplies($cid, $scid, $tid) {
      $timezone = date_default_timezone_set("America/Chicago");
      $host = "localhost";
      $database = "sharing";
      $user = "root";
      $pass = "";

      $connection = mysqli_connect($host, $user, $pass, $database);

		$select = mysqli_query($connection, "SELECT replies.author, comment, replies.date_posted FROM categories, subcategories,
									  topics, replies WHERE ($cid = replies.cat_id) AND ($scid = replies.subcat_id)
									  AND ($tid = replies.topic_id) AND ($cid = categories.cat_id) AND
									  ($scid = subcategories.subcat_id) AND ($tid = topics.topic_id) ORDER BY reply_id DESC");

		if (mysqli_num_rows($select) != 0) {
			echo "<div class='content'><table class='reply-table'>";
			while ($row = mysqli_fetch_assoc($select)) {
				echo nl2br("<tr><th width='15%'>".$row['author']."</th><td>".$row['date_posted']."\n".$row['comment']."\n\n</td></tr>");
			}
			echo "</table></div>";
		}
	}


  function countReplies($cid, $scid, $tid) {
    $timezone = date_default_timezone_set("America/Chicago");
    $host = "localhost";
    $database = "sharing";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);
  		$select = mysqli_query($connection, "SELECT cat_id, subcat_id, topic_id FROM replies WHERE ".$cid." = cat_id AND
  									  ".$scid." = subcat_id AND ".$tid." = topic_id");
  		return mysqli_num_rows($select);
  	}
