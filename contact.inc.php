<?php


if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['fname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);

	if(empty($name) || empty($email) || empty($subject))
	{
		header("Location: ../index.php?form=empty");
		exit();
	}

	else{

		$sql = "INSERT INTO contact (name, email, message) VALUES (?,?,?);";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)){
			echo "SQL Error";
			echo "";
			echo $conn->error;
		}else{
				mysqli_stmt_bind_param($stmt, "sss", $name, $email, $subject);
				mysqli_stmt_execute($stmt);
		}

		header("Location: ../MessageSent.php?sent=success");
	}
}else{

	header("Location: ../contact.inc.php?contactform=error");
	exit();
}

?>