<?php
echo 'Services/SQLLink.php';

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	public function __construct() {
		mysqli_connect($HOST, $DBUSER, $DBPASS);

		mysqli_select_db('LocationData');
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValues($param) {

		if ($param) {

			return mysqli_query('SELECT * FROM locations WHERE `name` = ' . $param . ';');

		} else {

			return mysqli_query('SELECT `name` FROM locations LIMIT 30;');

		}

	}

}
?>