<?php
Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	public function SQLLink() {
		mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db('LocationData');
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValues($param) {

		$locations = array();

		$query = 'SELECT * FROM locations';
		if ($param) {
			$query . ' WHERE `name` = ' . $param . ';';
		} else {
			$query . ' LIMIT 30;';
		}

		$data = mysqli_query($query);
		while ($row = mysqli_fetch_array($data)) {
			$locations[] = $row;
		}

		return $locations;

	}

}
?>