<?php
class SQLQuery {

	public $mysqli;

	public function SQLQuery() {

		$sqlhost = 'localhost';
		$sqluser = 'root';
		$sqlpass = 'A8057silent';

		$this -> mysqli = new mysqli($sqlhost, $sqluser, $sqlpass, "LocationData");

	}

	public function ping($param) {

		return $param;

	}

	public function query($query) {

		$result = $this -> mysqli -> query($query);

		$ret = '';

		while ($row = $result -> fetch_array(MYSQL_ASSOC)) {

			foreach ($row as $key => $val) {
				$ret .= "{$val}, ";
			}
			$ret .= '\n';

		}

		$result -> free();

		return $ret;

	}

	public function sendMail($param) {
		$arr = explode('?', $param);
		$to = $arr[0];
		$subject = $arr[1];
		$message = $arr[2];

		mail($to, $subject, $message);
	}

}
