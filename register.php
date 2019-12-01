<?php
require 'config/config.php';
require 'form_handlers/register_handler.php';
require 'form_handlers/login_handler.php';

?>
<html>
<head>

  <title>Welcome to Sharing is Caring</title>
  <link rel="stylesheet" href="assets/css/register_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="assets/js/register.js"></script>

</head>

<body>

  <div class="wrapper">

  <div class="login_box">
  <div class="login_header" style="background-color: #27ae60; width: 100%; height: 90px; text-align: center; border-top-left-radius: 1em; border-top-right-radius: 1em;">
    <h1 style="color: white; margin-top: 0; margin-bottom: 0;">Sharing is Caring</h1>
  </div>
  <br/>
  <div class="first">

      <form method="POST" action="register.php">
        <div>

          <input type="text" name="log_username" placeholder="Username" value="<?php
          if(isset($_SESSION['log_username'])) {echo $_SESSION['log_username'
          ];} ?>" required>
        </div>
        <br>
        <div>

          <input type="password" name="log_password" placeholder="Password" required>
        </div>
        <br>
        <?php if(in_array("Your username or password was incorrect<br>", $error_array))
        echo "Your username or password was incorrect<br>";?>
        <input type="submit" name="login_button" value="Login" style="background-color: #27ae60; font-size: 20px; border-radius: 2px;" />
        <br/>
        <a href="#" id="signup" class="signup">Need an account? Register for one here! </a>

      </form>
    </div>
    <div class="second">
      <form method="POST" action="register.php">

        <div>



            <input type="text" name="reg_username" placeholder="Username" value="<?php if(isset($_SESSION['reg_username'])) {echo $_SESSION['reg_username'];}?>" required>

        </div>
        <br>
        <?php if(in_array("This username is already in use<br>", $error_array))
          echo "This username is already in use<br>";
         ?>

        <div>



            <input type="text" name="reg_first_name" placeholder="First Name" value="<?php
            if(isset($_SESSION['reg_first_name'])) {echo $_SESSION['reg_first_name'];}?>" required>

        </div>
        <br>

        <div>



            <input type="text" name="reg_last_name" placeholder= "Last Name" value="<?php
            if(isset($_SESSION['reg_last_name'])) {echo $_SESSION['reg_last_name'];}?>" required>

        </div>
        <br>

        <div>



            <input  type="email" name="reg_email" placeholder="Email" value="<?php
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



          <input type="password" name="reg_password" placeholder="Password">

        </div>
        <br>

        <div>


          <input type="password" name="reg_password2" placeholder="Re-enter Password">
        </div>
        <br>
        <?php if(in_array("Your passwords do not match<br>",$error_array))
          echo "Your passwords do not match<br>";
         ?>
        <input type="submit" name="register_button" value="Register" style="background-color: #27ae60; font-size: 20px; border-radius: 2px;" />
        <br/>
        <a href="#" id="signin" class="signin">Already have an account? Sign in! </a>
        <?php if(in_array("<span style='color: #14C800;'>You have successfully registered</span><br>", $error_array)) echo "<span style='color: #14C800;'>You have successfully registered</span><br>"; ?>
      </form>
</div>
</div>

</div>

</body>

</html>
