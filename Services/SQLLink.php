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

		if (mysqli_connect_errno($conn)) {
			return "Failed connection to mysql. error: " . mysqli_error();
		}

		$result . "conncetion successful.  ";

		mysqli_select_db($DBNAME);

		$query . 'SELECT ';
		if (isset($param)) {
			$query . ' ' . $param;
		} else {
			$query . "*";
		}

		$query . ' FROM `locations`;';

		if ($dataset = mysqli_query($conn, $query)) {

			$datalen = mysqli_affected_rows();
			$result . "number of " . $datalen . "found.  ";

			$name = "";
			for ($i = 0; $i < $datalen; $i++) {
				mysqli_data_seek($dataset, $i);
				$row = mysqli_fetch_row($dataset);
				$name . $location[name];
			}
		}

		return $result . $name . $param;
	}

}
