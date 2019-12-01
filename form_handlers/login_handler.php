<?php

if(isset($_POST['login_button'])) {

	$username = filter_var($_POST['log_username'], FILTER_SANITIZE_EMAIL); //sanitize email

	$_SESSION['log_username'] = $username; //Store username into session variable
	$password = $_POST['log_password']; //Get password

	$check_database_query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$username = $row['username'];

		$user_closed_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query) == 1) {
			$reopen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE username='username'");
		}


		header("Location: index.php");
		exit();
	}
	else {
		array_push($error_array, "Your username or password was incorrect<br>");
	}


}

?>
