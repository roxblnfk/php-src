--TEST--
Method with null returning type must contain body
--FILE--
<?php

class Impl {
    function foo(): null;
}

echo "Done\n";
?>
--EXPECTF--
Fatal error: Method Impl::foo() must contain body in %s on line %d
