--TEST--
Method with void returning type and required params can be without body
--FILE--
<?php

abstract class test {
    abstract function foo(mixed $param): void;
}

class Impl extends Test {
    function foo(mixed $param): void;
    function bar(mixed $param): void;
}

$obj = new Impl();
$obj->foo('foo');
$obj->bar('bar');

echo "Done\n";
?>
--EXPECTF--
Done
