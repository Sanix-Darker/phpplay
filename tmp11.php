<?php

function runIt(true|int $wait) {
    if ($wait instanceof bool){
        echo "WHAT ??";
    }
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
runIt(false);
// decored('runIt', [3]);
// decored($doSomething, []);
