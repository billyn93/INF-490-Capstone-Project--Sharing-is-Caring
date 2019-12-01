<?php
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");

if(isset($_GET['profile_username'])) {
  $username = $_GET['profile_username'];
  $user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
  $user_array = mysqli_fetch_array($user_details_query);
  $_SESSION['user_profile_img'] = $user_array['profile_pic'];

  $num_friends = (substr_count($user_array['friend_array'], ",")) - 1;
}
?>
<div class="profile_left">
  <img src="<?php echo $user_array['profile_pic']; ?>"/>
  <div class="profile_info">
    <p><?php echo "Posts: " . $user_array['num_posts']; ?></p>
  

  </div>
  <form action="<?php echo $username ?>">
      <?php $profile_user_obj = new User($connection, $username);
      if($profile_user_obj->isClosed()) {
 				header("Location: user_closed.php");
 			}

      $logged_in_user_obj = new User($connection, $userLoggedIn);

       ?>

  </form>
  <input type="submit" class="deep_blue" data-toggle="modal" data-target="#post_form" value="Post something">
</div>


<div class="main_column column">
  <?php $post = new Post($connection, $userLoggedIn);
  $post->loadProfilePosts();
   ?>
  <!-- Button trigger modal -->


</div>


<!-- Modal -->
<div class="modal fade" id="post_form" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post Something!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>This will appear on the user's profile page and hopefully also on their newsfeed</p>

      	<form class="profile_post" action="" method="POST">
      		<div class="form-group">
      			<textarea class="form-control" name="post_body"></textarea>
      			<input type="hidden" name="user_from" value="<?php echo $userLoggedIn; ?>">
      			<input type="hidden" name="user_to" value="<?php echo $username; ?>">
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="post_button" id="submit_profile_post">Post</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>

</html>
