<?php
	error_reporting(0);
	@session_start();
	require ('connection.php');
	if(isset($_POST['submit-login'])){
		$uname = mysqli_real_escape_string($con, htmlspecialchars($_POST['username']));
		$pswd = mysqli_real_escape_string($con, htmlspecialchars($_POST['pswrd']));
    $query = "SELECT ``,`` FROM `` WHERE ``='$uname' AND `password`='$pswd' ";
    $sql = mysqli_query($con, $query) or die(mysqli_error($con));
		if(mysqli_num_rows($sql)!=0)
		{
			$_SESSION['username_fac']=$uname;
      		echo "Logged In";
		}
		else{
			echo "Login Error";
		}
    }
?>