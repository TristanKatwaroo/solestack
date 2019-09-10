<?php
	

	if (isset($_POST['submit'])) {
		include_once 'dbh.inc.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
		$agree = mysqli_real_escape_string($conn, $_POST['agree']);

		//Error Handlers
		//Check for empty fields
		if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($cpwd)) {
			header("Location: ../signup.php?signup=empty&first=$first&last=$last&email=$email&uid=$uid");
			exit();
		}
		else {
			//Check for invalid characters in name
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../signup.php?signup=char");
				exit();
			}
			else {
				//Check for valid email address
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=email&first=$first&last=$last&uid=$uid");
					exit();
				}
				else {
					//Check if username is unique
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=usertaken&first=$first&last=$last&email=$email");
						exit();
					}
					else {
						//Check if passwords match
						if ($pwd != $cpwd) {
							header("Location: ../signup.php?signup=password&first=$first&last=$last&email=$email&uid=$uid");
							exit();
						}
						else {
							//Check TOS and Privacy Policy
							if (empty($_POST['agree'])) {
								header("Location: ../signup.php?signup=agree&first=$first&last=$last&email=$email&uid=$uid");
								exit();
							}
							else {
								//Hash password
								$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
								//Successful signup
								$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
								VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
								mysqli_query($conn, $sql);
								header("Location: ../signup.php?signup=success");
								exit();
							}
						}
					}
				}
			}
		}
	}
	else {
		header("Location: ../signup.php?signup=error");
		exit();
	}

	
?>