<?php

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";

	public function SQLLink() {
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$result = "";

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db($DBNAME);

		$query = "SELECT * FROM locations";
		$result . mysqli_query($conn, $query);

		return $result;
	}

}
