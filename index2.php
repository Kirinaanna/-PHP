<?php
$variable = 1;
$variable = 'one';
$variable = true;
$variable = 3.14;
$variable = null;


if (is_int($variable)) {
    echo 'int';
} elseif (is_string($variable)) {
    echo 'string';
} elseif (is_bool($variable)) {
    echo 'bool';
} elseif (is_float($variable)) {
    echo 'float';
} elseif (is_null($variable)) {
    echo 'null';
} elseif (is_array($variable)) {
    echo 'array';
} else {
    echo 'other';
}

