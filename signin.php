<?php
	session_start();
	$db=mysqli_connect("localhost","root","","mydb");
	if (isset($_POST["submit"])) {
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$pass2=$_POST["pass2"];
		$inte=1;
		die(mysqli_error($db))
		if($pass2==$pass){
			$_SESSION["message"]="one row is inserted";
			$query=mysqli_query($db,"INSERT INTO test(user,pass) VALUES($user,$pass)");
			$_SESSION["message"]="one row is inserted";
		}
		else{
			$_SESSION["message"]="not matched yet";
		}
	}
	else{
		$_SESSION["message"]="not set ";
	}
?>