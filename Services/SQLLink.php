<?php

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";
	private $TABLE = "locations";

	public function SQLLink() {
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$return = 'hello. init return';

		$mysqli = new mysqli($HOST, $DBUSER, $DBPASS, $DBNAME);
		if (mysqli_connect_error()) {
			return 'connection error.';
		}

		$query = "SELECT * FROM " . $TABLE;
		$result = $mysqli -> query($query);
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$result -> free();

		$return = $row[0];

		return $return;
	}

}
