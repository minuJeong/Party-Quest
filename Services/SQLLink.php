<?php
Class SQLLink {

	private static $HOST = "127.0.0.1";
	private static $DBUSER = "root";
	private static $DBPASS = "A8057silent";

	public function SQLLink() {

	}

	public function ping($param) {
		$arr = array('name' => 'ping', 'threat level' => 10, 'familiar race' => 'human');

		$ret = '';
		foreach ($arr as $key => $val) {
			$ret .= "{$key}: {$val}, ";
		}
		return $ret;
	}

	public function mysql($param) {

		mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db('LocationData');

		$query = 'DESC locations';
		$result = mysqli_query($query);
		$row = mysqli_fetch_array($result);

		$ret = '';

		foreach ($row as $key => $val) {
			$ret .= "{$key} {$val}";
		}

		return $ret;

	}

	public function getValues($param) {

		mysqli_connect($HOST, $DBUSER, $DBPASS);
		mysqli_select_db('LocationData');

		$query = 'SELECT * FROM locations';

		if ($param) {
			$query .= ' WHERE `name` = ' . $param;
		}

		$data = mysqli_query($query);

		$locations = '';

		while ($row = mysqli_fetch_array($data)) {

			foreach ($row as $key => $datablob) {
				$locations .= "{$key} : {$datablob} , ";
			}

		}

		mysqli_free_result($data);

		return $locations;

	}

}
?>