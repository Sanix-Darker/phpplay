<?php

function searchPath(int $value): int {
    if ($value <= 5){
        return 1;
    }

    return $value * searchPath($value-1);
}


$var = searchPath(10);
print_r($var);
