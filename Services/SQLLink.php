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
		return ['ping'];
	}

	public function getValue($param) {

		$data = mysqli_query($conn, "SELECT * FROM locations;");
		
		return [mysqli_affected_rows()];

		while ($row = mysqli_fetch_array($data)) {
			$ret[] = $row;
		}

		return $ret;

	}

}
