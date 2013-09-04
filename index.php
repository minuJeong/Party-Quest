<html>
	<head>
<<<<<<< HEAD
		<title>PHP Å×½ºÆ®</title>

		<?php

		$db_host = "54.250.220.66"
		$db_usr = "root"
		$db_pass = "A8057silent"
		$db_name = "LocationData"

		$connection = mysqli_connect($db_host, $db_usr, $db_pass, $db_name);
		if (mysqli_connect_errno($connection)) {
		echo "¿¬°á ½ÇÆÐ " . mysqli_connect_error()
		} else {
		echo "connection successful."
		}

		$sql = "CREATE DATABASE test_db";
		if (mysqli_query($connection, $sql)) {
		echo "db creattion successful."
		} else {
		echo "db creation error " . mysqli_error($connection);
		}

		$sql = "CREATE TABLE
		Persions(
		FirstName CHAR(30),
		LastName CHAR(30),
		Age INT
		)";

		if (my_sqli_query($connection, $sql)) {
		echo "table creation successful."
		} else {
		echo "table creation error " . mysqli_error($connection);
		}

		?>

=======
		<title>PHP ï¿½×½ï¿½Æ®</title>
>>>>>>> b54c341f69ee7edc75b19e5317d4882c4e2226bc
	</head>
	<body>
		fdsafdsa1111
		fdsaf1111
		fdsa1111
		dsaf1111
<<<<<<< HEAD
=======
		
		<?php
		   echo 'from ipad...'
		?>
>>>>>>> b54c341f69ee7edc75b19e5317d4882c4e2226bc
	</body>
</html>
