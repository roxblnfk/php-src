--TEST--
Method with empty returning type can be without body
--FILE--
<?php

abstract class test {
}

class Impl extends Test {
    function Foo(): void;
}

echo "Done\n";
?>
--EXPECTF--
Done
