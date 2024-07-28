<?php

class ValidationError extends Exception {

}

$VAL="ok";


$render = function(?int $icor) {
    if (!isset($icor)) {
        throw new ValidationError("icor is required !");
    }

    $iter = 12*$icor;

    // example of closure
    $process = function () use ($iter){
        echo "Iter from $iter";
        return 2*$iter;
    };

    return $process();
};

echo "\n";
print_r($render(9));
