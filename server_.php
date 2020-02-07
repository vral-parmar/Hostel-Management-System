<?php
	//error_reporting(0);
	session_start();
	require ('connection.php');
	if(isset($_POST['submit-login'])){
		$uname = mysqli_real_escape_string($con, htmlspecialchars($_POST['username']));
		$pswd = mysqli_real_escape_string($con, htmlspecialchars($_POST['pswrd']));
    $query = "SELECT `email`,`password` FROM `student_merit_info` WHERE `email`='$uname' AND `password`='$pswd' ";
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));
		if(mysqli_num_rows($sql)!=0)
		{
			$_SESSION['user_session']=$uname;
      		echo "Logged_In";
		}
		else{
			echo "Login Error";
		}
    }
?>
