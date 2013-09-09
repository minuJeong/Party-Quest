<?php

echo "SQLLink.php";

$instance = new SQLLink();
$test = $instance -> getValue($param);

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	private $DBNAME = "LocationData";
	private $TABLE = "locations";

	public function SQLLink() {
	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$return = 'hello. init return';

		$connection = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME);
		if (mysqli_connect_error()) {
			return 'connection error.';
		}

		$query = "SELECT * FROM " . $TABLE;
		$result = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($result)) {

			echo $row[0];

			$return . $row[0] . '
			';
			$return . $row[1] . '
			';
			$return . $row[2] . '
			';

		}
		mysqli_free_result($result);

		$return = $row[$param];

		return $return;
	}

}
