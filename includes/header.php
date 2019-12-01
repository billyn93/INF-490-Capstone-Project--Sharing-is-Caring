<?php
require 'config/config.php';

if(isset($_SESSION['log_username'])) {
  $username = $_SESSION['log_username'];
  $user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
  $user_array = mysqli_fetch_array($user_details_query);
  $_SESSION['user_profile_img'] = $user_array['profile_pic'];

  $num_friends = (substr_count($user_array['friend_array'], ",")) - 1;
}


if(isset($_SESSION['log_username'])) {
  $userLoggedIn = $_SESSION['log_username'];
  $user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: register.php");
}

 ?>


<html>
<head>
  <!--jQuery link -->
  <script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <!-- JavaScript link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/sharing.js"></script>
<script src="assets/js/bootbox.min.js"></script>
<script src="assets/js/jquery.jcrop.js"></script>
<script src="assets/js/jcrop_bits.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <!-- Font CSS -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
  <div class="top_bar">
    <div class="logo">
      <a href="index.php" style="color: white; padding-left: 5px; font-family: 'Titillium Web', sans-serif; font-size:25;">Sharing is Caring</a>

    </div>
    <nav>

      <a class="icon" href="<?php echo $userLoggedIn; ?>"><?php echo $user['first_name'];?></a>
      <a class="icon" href="index.php"><i class="fas fa-home"></i></a>

      <a class="icon" href="settings.php"><i class="fas fa-sliders-h"></i></a>
      <a class="icon" href="includes/handlers/logout.php"><i class="fas fa-sign-out-alt"></i></a>

    </nav>

  </div>

  <div class="wrapper">
