<?php
	$host = '127.0.0.1';
	$db   = 'kindcare';
	$user = 'root';
	$pass = '';
	$charset = 'utf8';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

	$pdo = new PDO($dsn, $user, $pass, $opt);

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$about = $_POST['about'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thank you!</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php
		echo "<p>Thank you for registering $fname.</p>"
	?>
</body>
</html>