<?php

session_start();

if (isset($_POST['loginbutton']))
{
	include_once 'dbh.inc.php';

	$userid = mysqli_real_escape_string($conn, $_POST['usernamebox']); 
	$password = mysqli_real_escape_string($conn, $_POST['passwordbox']);

		$sql = "SELECT * FROM userinformation WHERE user ='$userid' AND pass='$password'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		echo $resultcheck;
		if ($resultcheck < 1)
		{
			echo'<script>
			alert("Please check username and password.");
			</script>';

		} 

		else 
		{
					
		$row = $result->fetch_assoc();
					$_SESSION['login_time_stamp'] = time();
					$_SESSION['u_user_id'] = $row['id'];
					$_SESSION['u_username'] = $row['user'];
					$_SESSION['u_name'] = $row['name'];
					$_SESSION['u_gender'] = $row['gender'];
					$_SESSION['u_age'] = $row['age'];
					$_SESSION['u_email'] = $row['emails'];
					header('Location:../project/home_login.php');
					exit();
		}

	}
else
{
	header("Location: ../index.php?login=error");
	exit();
}
?>