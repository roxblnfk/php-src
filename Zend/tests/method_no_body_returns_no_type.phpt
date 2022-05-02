--TEST--
Method without returning type can be without body
--FILE--
<?php

abstract class test {
    abstract function foo();
}

class Impl extends Test {
    function foo();
    function bar();
}

echo "Done\n";
?>
--EXPECTF--
Done
