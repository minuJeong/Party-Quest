<?php
Class SQLLink {

	private static $HOST = "localhost";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";

	public function SQLLink() {
		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db($DBNAME);
		echo mysqli_query("DESCRIBE locationtable;");
		$query = "SELECT * FROM locationtable;";
		$result = mysqli_query($query);
		return $result;
		
		echo $result;
	}

	public function getResult($param) {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db($DBNAME);
		echo mysqli_query("DESCRIBE locationtable;");
		$query = "SELECT * FROM locationtable;";
		$result = mysqli_query($query);
		return $result;
	}

}
?>