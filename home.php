<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<div>
<h1>hello <?php echo $_SESSION["username"] ?></h1>
<a href="logout.php" color="green">LogOut</a>
</div>
</body>
</html>