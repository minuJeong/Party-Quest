<?php
class SQLQuery {

	public $conn;

	public function SQLQuery() {

		$sqlhost = 'localhost';
		$sqluser = 'root';
		$sqlpass = 'A8057silent';

		$this -> conn = mysqli_connect($sqlhost, $sqluser, $sqlpass);
		mysqli_select_db('LocationData');

	}

	public function ping($param) {

		return $param;

	}

	public function query($query) {

		$result = mysqli_query($this -> conn, $query);

		$ret = '';

		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

			foreach ($row as $key => $val) {
				$ret .= "{$val}, ";
			}
			$ret .= '\n';

		}

		return $ret;

	}

}
