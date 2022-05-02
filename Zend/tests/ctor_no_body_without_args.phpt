--TEST--
Constructor promotion without body (without any args)
--FILE--
<?php

class Point {
    public function __construct();
}

var_dump(new Point());

?>
--EXPECT--
object(Point)#1 (0) {
}
