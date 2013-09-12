<?php
class SQLQuery {

	public $conn;

	public function SQLQuery() {

		$sqlhost = SQLLoginData::getHost();
		$sqluser = SQLLoginData::getId();
		$sqlpass = SQLLoginData::getPass();

		$this -> $conn = mysqli_connect($sqlhost, $sqluser, $sqlpass);
		mysqli_select_db('LocationData');

	}

	public function query($query) {

		$ret = mysqli_query($query);

		return $ret;

	}

}
