<?php

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";
	private static $DBNAME = "LocationData";

	public function __construct() {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME);

	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$query = "SELECT * FROM locations;";
		$resultArray = mysqli_query($conn, $query);

		while ($row = mysqli_fetch_array($resultArray)) {
			return $row[1];
		}

		return $return;
	}

}
