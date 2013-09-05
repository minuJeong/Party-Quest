<?php
Class TestClass {
	public function testMethod($param) {

		$HOST = "localhost";
		$DBNAME = "LocationData";
		$DBUSER = "root";
		$DBPASS = "A8057silent";

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME);

		$QUERY = "SELECT * FROM locationtable";

		$result = mysqli_query($QUERY);

		$result = $result . $param;
		return $result;
	}

}
?>