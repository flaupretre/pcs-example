--TEST--
heck PHP function via function_exists()
--EXTENSIONS--
pcs
--FILE--
<?php
var_dump(function_exists("Example1\\func1"));
?>
===DONE===
--EXPECT--
bool(true)
===DONE===
