<?php
Class TestClass {
	public function testMethod() {

		$HOST = "localhost:3306";
		$DBNAME = "LocationData";
		$DBUSER = "root";
		$DBPASS = "A8057silent";

		$conn = mysqli_connect("$HOST", "$DBUSER", "$DBPASS");
		mysqli_select_db("$DBNAME", $conn);

		$QUERY = "SELECT * FROM locationtable";

		$result = mysqli_query($QUERY);
		return $result;
	}

}
?>