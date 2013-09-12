<?php
class SQLLink {

	public $conn;

	public function SQLLink() {

		$sqlhost = SQLLoginData::getHost();
		$sqluser = SQLLoginData::getId();
		$sqlpass = SQLLoginData::getPass();

		$this -> $conn = mysqli_connect($sqlhost, $sqluser, $sqlpass);
		mysqli_select_db('LocationData');

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

		$query = 'DESC locations;';
		$result = mysqli_query($this -> $conn, $query);

		$ret = '';
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

			foreach ($row as $key => $val) {
				$ret .= "{$key} {$val}";
			}

		}

		mysqli_free_result($result);

		return $ret;

	}

	public function getValues($param) {

		$query = 'SELECT * FROM locations';

		if ($param) {
			$query .= ' WHERE `name` = ' . $param;
		}
		$query .= ';';

		$data = mysqli_query($this -> $conn, $query);

		$locations = '';

		while ($row = mysqli_fetch_array($data, MYSQL_ASSOC)) {

			foreach ($row as $key => $datablob) {
				$locations .= "{$key} : {$datablob} , ";
			}

		}

		mysqli_free_result($data);

		return $locations;

	}

}
