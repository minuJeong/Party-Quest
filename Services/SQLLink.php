<?php
Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";

	public function SQLLink() {
	}

	public function getResult($param) {

		$result = "";

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);

		if (mysqli_connect_errno($conn)) {
			return "Failed connection to mysql. error: " . mysqli_error();
		}

		$result . "conncetion successful.  ";

		mysqli_select_db($DBNAME);

		$query = "SELECT name FROM locationtable;";
		$dataset = mysqli_query($conn, $query);

		$datalen = mysqli_affected_rows();
		$result . "number of " . $datalen . "found.  ";

		for ($i = 0; $i < $datalen; $i++) {
			mysqli_data_seek($dataset, $i);
			$location = mysqli_fetch_array($dataset);
			$result . $location[name];
		}

		return $result . $param;
	}

}
?>