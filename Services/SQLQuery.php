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

		$ret = mysqli_query($this -> conn, $query);

		return $ret;

	}

}
