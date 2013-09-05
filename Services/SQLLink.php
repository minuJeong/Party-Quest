<?php
Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";

	public function SQLLink() {
	}

	public function getResult($param) {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);

		if (mysqli_connect_errno($conn)) {
			return "Failed connection to mysql. error: " . mysqli_error();
		}

		mysqli_select_db($DBNAME);

		$query = "SELECT * FROM locationtable;";
		$result = mysqli_query($query);

		return $result . $param;
	}

}
?>