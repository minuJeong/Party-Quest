<?php
Class TestClass {
public function testMethod() {
$date=new DateTime();
$result=$date->getTimeStamp();
$result=substr(strlen($result),0,1);
return $result;
}
}
?>