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
		$ret = '';
		$ret .= 'ping';
		$ret .= ', ';
		$ret .= 'hello amfphp';
		return $ret;
	}

	public function getValues($param) {

		$query = 'SELECT * FROM locations';

		if ($param) {
			$query .= ' WHERE `name` = ' . $param;
		}

		$query .= ';';

		$data = mysqli_query($query);

		$locations = '';

		while ($row = mysqli_fetch_array($data)) {

			foreach ($row as $key => $datablob) {
				$locations .= "{$key} : ";
				$locations .= $datablob;
				$locations .= ', ';
			}

			$locations .= '\n';
		}

		mysqli_free_result($data);

		return $locations;

	}

}
?>