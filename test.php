<?php

$x = [
  2,
  4,
  6,
];
$multiplier = 7;

// array map with $multiplier implicitly bound
$y = array_map(fn($x) => $x * $multiplier, $x);
var_dump($y); // [14, 28, 42]

// array filter
$z = array_filter($x, fn($elem) => $elem % 3 !== 0);
var_dump($z); // [2, 4]

$arr = [
  'this' => 'this value',
  'there' => 'there value',
  'that' => 'that value',
  'whatever' => 'whatever value',
  'theother' => 'theother value',
  'whichother' => 'whichother value',
];
$keys = ['this', 'that', 'theother'];

// long map
function array_values_from_keys_long($arr, $keys) {
    return array_map(function ($x) use ($arr) { return $arr[$x]; }, $keys);
};
var_dump(array_values_from_keys_long($arr, $keys));

// short map
function array_values_from_keys_short($arr, $keys) {
    return array_map(fn($x) => $arr[$x], $keys);
}
var_dump(array_values_from_keys_short($arr, $keys));

echo "\n\n";
