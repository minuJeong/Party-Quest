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

mysqli_data_seek($queryResult, 0);
$row = mysqli_fetch_row($queryResult);

echo $row[0] . '
';

echo '1
';
echo '1
';
echo '1
';
echo '1
';

echo '
end point
';
?>