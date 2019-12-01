<?php


//Declaring variables to prevent errors
$username = ""; //username
$fname = ""; //First name
$lname = ""; //Last name
$em = ""; //Email
$password = ""; //Password
$password2 = ""; //Password 2
$date = ""; //Date that user signed up
$error_array = array(); //Holds error messages

if(isset($_POST['register_button'])) {
  //Registration form VALUES

  //profile_pic
  $profile_pic = "assets/images/head_deep_blue.png";

  //username
  $username = strip_tags($_POST['reg_username']); //Remove html tags (for cybersecurity);
  $username = str_replace(' ', '', $username); //Remove spaces from the form
  $_SESSION['reg_username'] = $username; //Stores username into a Session variable


  //First Name
  $fname = strip_tags($_POST['reg_first_name']); //Remove html tags (for cybersecurity)
  $fname = str_replace(' ', '', $fname); //Remove spaces from the form
  $fname = ucfirst(strtolower($fname)); //Capitalizes the first letter of first name
  $_SESSION['reg_first_name'] = $fname; //Stores first name into Session variable

  //Last Name
  $lname = strip_tags($_POST['reg_last_name']); //Remove html tags (for cybersecurity)
  $lname = str_replace(' ', '', $lname); //Remove spaces from the form
  $lname = ucfirst(strtolower($lname)); //Capitalizes the first letter of first name
  $_SESSION['reg_last_name'] = $lname; //Stores last name into Session variable
  //Email
  $em = strip_tags($_POST['reg_email']); //Remove html tags (for cybersecurity)
  $em = str_replace(' ', '', $em); //Remove spaces from the form
  $em = ucfirst(strtolower($em)); //Capitalizes the first letter of first name
  $_SESSION['reg_email'] = $em;
  //Password
  $password = strip_tags($_POST['reg_password']); //Remove html tags (for cybersecurity)

  //Password 2
  $password2 = strip_tags($_POST['reg_password2']); //Remove html tags (for cybersecurity)

  //Date

  $date = date("Y-m-d"); //Current Date

  //Check if username already exists
  $u_check = mysqli_query($connection, "SELECT username from users WHERE username ='$username'");

  //Check the number of rows returned for Username
  $num_u_rows = mysqli_num_rows($u_check);

  if($num_u_rows > 0) {
    array_push($error_array, "This username is already in use<br>");
  }



  //Check if email is in the correct format
  if(filter_var($em, FILTER_VALIDATE_EMAIL)) {
    $em = filter_var($em, FILTER_VALIDATE_EMAIL);

    //Check if the email already exists
    $e_check = mysqli_query($connection, "SELECT email from users WHERE email ='$em'");

    //Check the number of rows returned
    $num_rows = mysqli_num_rows($e_check);

    if($num_rows > 0) {
      array_push($error_array, "This email is already in use<br>");
    }

  } else {
      array_push($error_array, "Your email is not entered in valid format<br>");
  }

  if($password != $password2) {
      array_push($error_array, "Your passwords do not match<br>");

  }
  if(empty($error_array)) {
  //Profile Picture assignment
  $profile_pic = "assets/images/head_deep_blue.png";


  $query = mysqli_query($connection, "INSERT INTO users VALUES('','$fname', '$lname', '$username', '$em', '$password', '$date', '$profile_pic', '0', '0', 'no', ',',
  ',', ',')");

  array_push($error_array, "<span style='color: green;'>You have successfully registered</span><br>");
  $_SESSION['reg_username'] = "";
  $_SESSION['reg_first_name'] = "";
  $_SESSION['reg_last_name'] = "";
  $_SESSION['reg_email'] = "";


}


}


?>
