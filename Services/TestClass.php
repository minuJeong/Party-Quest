<?php
Class TestClass {
public function testMethod() {
mysqli_query("USE LocationData
                      SELECT name FROM locationtable WHERE id LIKE 0");
$result='fdasfdas';
return $result;
}
}
?>