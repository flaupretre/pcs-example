--TEST--
Access a PHP function
--EXTENSIONS--
pcs
--FILE--
<?php
Example1\func1();
?>
===DONE===
--EXPECT--
Hello from func1 !
===DONE===
