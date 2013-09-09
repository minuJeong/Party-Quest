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

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db($DBNAME);

		$query = "SELECT * FROM `locations`;";
		$data = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($data)) {
			$result . $row['threat level'];
		}

		echo $result;

		return $result;
	}

}
