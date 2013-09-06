<?php


$host = '127.0.0.1';
$usr = 'root';
$pw = 'A8057silent';

$conn = mysqli_connect($host, $usr, $pw, 'LocationData');
echo 'describe locations..
';
$query = 'DESCRIBE locations';
echo mysqli_query($conn, $query);

echo 'SELECT * FROM locations..
';
$query = 'SELECT * FROM locations';
echo mysqli_query($conn, $query);

?>
