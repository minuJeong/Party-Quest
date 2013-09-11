<?php
echo 'Services/SQLLink.php';

Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	public function __construct() {

	}

	public function ping($param) {
		return 'ping';
	}

	public function getValue($param) {

		$conn = mysqli_connect($HOST, $DBUSER, $DBPASS);

		mysqli_select_db($param);

		$data = mysqli_query($conn, "SELECT * FROM locations;");

		$ret = '';

		while ($row = mysqli_fetch_array($data)) {
			$ret . $row['name'] . '<br>';
			echo $row['name'] . '<br>';
		}

		return $ret;

	}

}
?>