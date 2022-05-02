--TEST--
Method with self returning type must contain body
--FILE--
<?php

class Impl {
    function bar(): self;
}

echo "Done\n";
?>
--EXPECTF--
Fatal error: Method Impl::Foo() must contain body in %s on line %d
