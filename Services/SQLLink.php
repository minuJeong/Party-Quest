<?php

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";
	private static $DBNAME = "LocationData";

	private $TABLE = "locations";

	public function SQLLink() {
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME);
		if (mysqli_connect_error()) {
			return "connection error occurred.";
		}

		$query = "SELECT * FROM " . $TABLE;
		$resultArray = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($resultArray)) {
			return $row['name'];
		}

		return $return;
	}

}
