<?php
session_start();
// $token = $_SESSION['token'];
// $conn = mysqli_connect("localhost", "root", "", "csrf");
// $query = "SELECT * FROM users WHERE
// 			username = '$username'
// 			AND password = '$password'";

// $result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="post">
		<button type="submit">Add</button>
	</form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$post = $_POST['post'];

	$conn = mysqli_connect("localhost", "root", "", "csrf");

	$query = "insert into post values ('$post')";

	$result = mysqli_query($conn, $query);

}

?>