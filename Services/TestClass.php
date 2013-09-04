<?php
Class TestClass {
public function testMethod() {
mysqli_query("USE LocationData");
$result=mysqli_query("SELECT * FROM locationtable");
return $result;
}
}
?>