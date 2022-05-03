--TEST--
Method with void returning type can be without body
--FILE--
<?php

abstract class test {
    abstract function foo(): void;
}

class Impl extends Test {
    function foo(): void;
    function bar(): void;
}

$obj = new Impl();
$obj->foo();
$obj->bar();

echo "Done\n";
?>
--EXPECTF--
Done
