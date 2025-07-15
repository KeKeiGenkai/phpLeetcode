<?php
$first = 38;
$second = 6;
$myltiply = function() use($first, $second) {
    return $first * $second;
};
print($myltiply() . PHP_EOL); // универсально


?>