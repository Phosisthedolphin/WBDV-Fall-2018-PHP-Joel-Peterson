<?php

$p = 'Bob';

$a = 'Hello, ' . $p . '!';

$b = "Hello, $p!";

//DOUBLE QUOTES are for INTERPOLATION. You can call variables within the body of a string with DOUBLE QUOTES ONLY

var_dump($a, $b);
