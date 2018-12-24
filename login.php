<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = mysqli_connect("localhost", "root", "", "csrf");

	$query = "SELECT * FROM users WHERE
			username = '$username'
			AND password = '$password'";

	$result = mysqli_query($conn, $query);

	if($result->num_rows > 0) {
		session_start();
		$_SESSION['username'] = $username;
		header("Location: http://localhost/CSRFAttack2/post.php");
	} else {
		echo "Fail";
	}

}

?>