<?php

echo '
start point
';

$HOST = "127.0.0.1";
$USER = "root";
$PW = "A8057silent";
$DB = "LocationData";

$conn = mysqli_connect($HOST, $USER, $PW, $DB);
if (mysqli_errno($conn)) {
	echo mysqli_error();
} else {
	echo '
	connection successful.
	';
}

$que = "SELECT name FROM locationtable;";
$queryResult = mysqli_query($conn, $que);

echo $queryResult . '
';

echo mysqli_data_seek($queryResult, 0) . '
';

echo '
end point
';
?>