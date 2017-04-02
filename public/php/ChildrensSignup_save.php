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

	// insert values into the database
	$statement = $pdo->prepare("
		INSERT INTO parents 
			(fname, lname, email, city, state, about)
		VALUES (?, ?, ?, ?, ?, ?)");

	$statement->execute(array($fname, $lname, $email, $city, $state, $about));


	// select rows that match
	$statement2 = $pdo->prepare("SELECT fname, lname, email, city, state, about
								 FROM volunteers
								 WHERE 'city' = :city");

	$statement2->execute(array(':city' => "$city"));
	$rows = $statement2->fetchAll();
	//die(var_dump($rows));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thank you!</title>
	<meta charset="utf-8" />
</head>
<body>
	<img src="../img/helping hand(3).png" alt="Front" style="width:806px;height:453px;">
	<?php
		echo "<p>Thank you for registering with us $fname.</p>"
		
		/*foreach ($row as $key => $value) {
			echo ""
		*/
	?>
</body>
</html>
