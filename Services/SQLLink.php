<?php

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

		$return = 'hello';

		return $return;
	}

}
