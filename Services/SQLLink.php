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
		$ret = array();
		$ret[] = 'ping';
		$ret[] = 'hello amfphp';
		return $ret;
	}

	public function getValues($param) {

		$query = 'SELECT * FROM locations';
		if ($param) {
			$query . ' WHERE `name` = ' . $param . ';';
		}

		$data = mysqli_query($query);
		$locations = array();
		while ($row = mysqli_fetch_array($data)) {
			foreach ($row as $datablob) {
				$locations . $datablob;
				$locations . '%%blob%%';
			}
			$locations . '%%terminator%%';
		}

		return $locations[1]['name'];

	}

}
?>