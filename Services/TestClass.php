<?php
Class TestClass {
	public function testMethod($param) {

		$HOST = "localhost";
		$DBNAME = "LocationData";
		$DBUSER = "root";
		$DBPASS = "A8057silent";

		$conn = mysqli_connect("$HOST", "$DBUSER", "$DBPASS");
		mysqli_select_db("$DBNAME", $conn);

		$QUERY = "SELECT * FROM locationtable";

		$result = mysqli_query($QUERY);

		$result = $result . $param;
		return $result;
	}

}
?>