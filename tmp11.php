<?php

function runIt(int $wait) {
    sleep($wait);
    echo "\nHello am doing something... waited ${wait}s";
}

// Simple decorator implem
function decored(
    callable $fn,
    ?array $args = [],
): void{
    call_user_func_array($fn, $args);
}

decored('runIt', [3]);
// decored($doSomething, []);
