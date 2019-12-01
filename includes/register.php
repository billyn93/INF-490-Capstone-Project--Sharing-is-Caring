<?php
require 'config/config.php';
require 'form_handlers/register_handler.php';
require 'form_handlers/login_handler.php';

?>
<html>
<head>

  <title>Welcome to Sharing is Caring</title>

</head>

<body>
  <form method="POST" action="register.php">
    <div>
    <label>Username: </label>
      <input type="text" name="log_username" value="<?php
      if(isset($_SESSION['log_username'])) {echo $_SESSION['log_username'
      ];} ?>" required>
    </div>
    <br>
    <div>
    <label>Password: </label>
      <input type="password" name="log_password" required>
    </div>
    <br>
    <?php if(in_array("Your username or password was incorrect<br>", $error_array))
    echo "Your username or password was incorrect<br>";?>
    <input type="submit" name="login_button" value="Login" />


  </form>
  <br/><br/>

  <form method="POST" action="register.php">

    <div>

      <label>Username:</label>

        <input type="text" name="reg_username" value="<?php if(isset($_SESSION['reg_username'])) {echo $_SESSION['reg_username'];}?>" required>

    </div>
    <br>
    <?php if(in_array("This username is already in use<br>", $error_array))
      echo "This username is already in use<br>";
     ?>

    <div>

      <label>First Name:</label>

        <input type="text" name="reg_first_name" value="<?php
        if(isset($_SESSION['reg_first_name'])) {echo $_SESSION['reg_first_name'];}?>" required>

    </div>
    <br>

    <div>

      <label>Last Name:</label>

        <input type="text" name="reg_last_name" value="<?php
        if(isset($_SESSION['reg_last_name'])) {echo $_SESSION['reg_last_name'];}?>" required>

    </div>
    <br>

    <div>

      <label>Email:</label>

        <input  type="email" name="reg_email" value="<?php
        if(isset($_SESSION['reg_email'])) {echo $_SESSION['reg_email'];}?>" required>

    </div>
    <br>
    <?php if(in_array("This email is already in use<br>",$error_array))
      echo "This email is already in use<br>";
     ?>
     <?php if(in_array("Your email is not entered in valid format<br>",$error_array))
       echo "Your email is not entered in valid format<br>";
      ?>
    <div>

      <label>Password: </label>

      <input type="password" name="reg_password">

    </div>
    <br>

    <div>

      <label>Confirm Password: </label>
      <input type="password" name="reg_password2">
    </div>
    <br>
    <?php if(in_array("Your passwords do not match<br>",$error_array))
      echo "Your passwords do not match<br>";
     ?>
    <input type="submit" name="register_button" value="register" />
    <?php if(in_array("<span style='color: #14C800;'>You have successfully registered</span><br>", $error_array)) echo "<span style='color: #14C800;'>You have successfully registered</span><br>"; ?>
  </form>
</body>

</html>
