<?php
	session_start();
	$db=mysqli_connect("localhost","root","","mydb");
	if (isset($_POST["user"])&&isset($_POST["pass"])) {
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$pass2=$_POST["pass2"];
		$inte=1;
		if($pass2==$pass){
			$_SESSION["message"]="one row is inserted";
			echo $_SESSION["message"];
			$query=mysqli_query($db,"INSERT INTO test(user,pass) VALUES('$user','$pass');") or die(mysqli_error($db));
			$_SESSION["message"]="one row is inserted";
		}
		else{
			$_SESSION["message"]="not matched yet";
			echo $_SESSION["message"];
		}
	}
	else{
		$_SESSION["message"]="not set ";
		echo $_SESSION["message"];
	}
?>