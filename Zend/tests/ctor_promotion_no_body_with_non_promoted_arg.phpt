--TEST--
Constructor promotion without body (with non-promoted arg)
--FILE--
<?php

class Point {
    public function __construct(public $x, public $y, $z);
}

var_dump(new Point(x: 1, y: 2, z: 3));

?>
--EXPECT--
object(Point)#1 (3) {
  ["x"]=>
  int(1)
  ["y"]=>
  int(2)
  ["z"]=>
  int(3)
}
