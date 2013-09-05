<?php
Class SQLLink {

	private static $HOST = "localhost";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";

	public function SQLLink() {

	}

	public function getResult($param) {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME);
		$query = "SELECT * FROM locationtable";
		$result = mysqli_query($query);
		return $result;
	}

}
?>