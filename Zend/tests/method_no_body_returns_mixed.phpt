--TEST--
Method with mixed returning type must contain body
--FILE--
<?php

class Impl {
    function foo(): mixed;
}

echo "Done\n";
?>
--EXPECTF--
Fatal error: Method Impl::foo() must contain body in %s on line %d
