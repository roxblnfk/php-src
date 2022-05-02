--TEST--
Method with empty returning type can be without body
--FILE--
<?php

abstract class test {
    abstract function foo(): void;
}

class Impl extends Test {
    function foo(): void;
    function bar(): void;
}

echo "Done\n";
?>
--EXPECTF--
Done
