<?php
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");

if(isset($_POST['post'])) {
  $post = new Post($connection, $userLoggedIn);
  $post->submitPost($_POST['post_text'], 'none');
  header("Location: index.php");
}
?>
  <div class= "user_details">
    <div class="user_details_left_right column specialcolumn">
    <a href="<?php echo $userLoggedIn ?>"><img src="<?php echo $_SESSION['user_profile_img']; ?>" /></a>
    <a href="<?php echo $userLoggedIn?>">
    <?php
    echo $user['first_name'] . " " . $user['last_name']; ?>
  </a>
</div>
  </div>

<div class="main_column column">
  <h1 style="text-align: center;">What Do You Need, <?php $user_obj = new User($connection, $userLoggedIn); echo $user['first_name']?>?</h1>
  <br/>
  <h3 class="options" style="text-align: center;"><a href="book_rental_landing.php">Textbook Rental </a> &nbsp <a href="forum_landing.php"> Class Tips </a> &nbsp <a href="#">Tutoring</a></h3>


</div>
<div class="main_column column">
		<form class="post_form" action="index.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>

		</form>

		<div class="posts_area">
    <?php $post = new Post($connection, $userLoggedIn);
    $post->loadPostsFriends();
     ?></div>



	</div>
</div>

</body>

</html>
