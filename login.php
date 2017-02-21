<?php
session_start();
	$db=mysqli_connect("localhost","root","","mydb");
	if (isset($_POST["submit"])) {
		$user=mysql_real_escape_string($_POST["user"]);
		$pass=mysql_real_escape_string($_POST["pass"]);
		$inte=3;
			$res=mysqli_query($db,"SELECT * FROM test WHERE user=$user AND pass=$pass") or die(mysqli_error($db));
			if(mysqli_num_rows($res)){
				$_SESSION["message"]="you are now loggedin";
				$_SESSION["username"]=$user;
				header("location:home.php");
			}
			else{
				$_SESSION["message"]="username/password is wrong";
			}
	}
?>