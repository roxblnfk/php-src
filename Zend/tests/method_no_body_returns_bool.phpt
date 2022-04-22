--TEST--
Method with empty returning type can be without body
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
Fatal error: Non-abstract method Impl::Foo() must contain body in %s on line %d
