<?php
Class TestClass {
public function testMethod() {
$result=mysqli_query("USE LocationData
                      SELECT name FROM locationtable WHERE id LIKE 0");
return $result;
}
}
?>