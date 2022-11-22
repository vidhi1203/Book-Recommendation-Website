<?php

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php';
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$age = mysqli_real_escape_string($conn,$_POST['age']); 
	$email = mysqli_real_escape_string($conn,$_POST['emails']);
	$user_name = mysqli_real_escape_string($conn,$_POST['user']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pass']);

	$sql = "INSERT INTO userinformation (name, gender, age, emails, user, pass) VALUES ('$name', '$gender', '$age', '$email','$user_name','$pwd')";
	$result=$conn->query($sql);

	if (empty($name) || empty($gender) || empty($age) || empty($email) || empty($user_name) || empty($pwd)){

		header("Location: ../Registration.php?signup=empty");
		exit();

	}
	else{
			if(filter_var($email, FILTER_VALID_EMAIL)){
				header("Location: ../Registration.php?signup=error");
				exit();
			}else{
				$sql = "SELECT * FROM userinformation WHERE username='$user_name'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck > 0){

					header("Location: ../signup.php?signup=usertaken");
					exit();
				}else{

					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

					$sql = "INSERT INTO userinformation (name, gender, age, username, email, pwd) VALUES (?, ?, ?, ?, ?, ?);";

						$stmt = mysqli_stmt_init($conn);
	
						if (!mysqli_stmt_prepare($stmt, $sql)){
							echo "SQL Error";
							echo "";
							echo $conn->error;
						} else {
							mysqli_stmt_bind_param($stmt, "ssssss", $name, $gender, $age, $user_name, $email, $hashedPwd);
							mysqli_stmt_execute($stmt);
						}
						
						header("Location: ../project/Registered.php");
				}
			}
		}
	}
else{
	header("Location: ../index.php?error");
	exit();
}