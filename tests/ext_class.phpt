--TEST--
Access a PHP class
--EXTENSIONS--
pcs
--FILE--
<?php
$obj = new Example1\Dummy1();
$obj->hello();
?>
===DONE===
--EXPECT--
Hello World !
===DONE===
