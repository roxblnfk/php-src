--TEST--
Method with bool returning type must contain body
--FILE--
<?php

abstract class test {
}

class Impl extends Test {
    function Foo(): bool;
}

echo "Done\n";
?>
--EXPECTF--
Fatal error: Method Impl::Foo() must contain body in %s on line %d
