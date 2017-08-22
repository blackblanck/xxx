<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php

	$n = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter name');
	$e = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Missing/illegal parameter email');
	$p = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT) or die('Missing/illegal parameter phone');
	
	$sql = 'INSERT INTO popup (name, email, phone) VALUES (?,?,?)';
	
	require_once('db_con.php');
	$stmt = $con->prepare($sql);
	$stmt->bind_param('sss', $n, $e, $p);
	
	$stmt->execute();
	
	if($stmt->affected_rows > 0){
		echo 'Congratulations you are now added to the Lorem School with the info you provided us below: <br> '.$n.' <br> '.$e.' <br> '.$p.' :-)';
	}
	else {
		echo 'Could not add you to the list - you are already there ;-)';
	}
	
?>
</body>
</html>