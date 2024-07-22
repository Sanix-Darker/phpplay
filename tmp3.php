<?php

class TooLongException extends Exception {}

function printString(string $input): string{

    if (strlen($input) > 10){
        throw new TooLongException(
            "\n'".$input."' is too long !!!"
        );
    }

    return ">>>>".$input."\n";
}

print_r(printString("hello"));

try{

    print_r(
        printString(12)
    );

    print_r(
        printString("hello there, this is a long string !")
    );
}catch(TooLongException $e) {
    echo "\nOUPS ERROR : " . $e->getMessage();
}

var_dump("DOUMP");
# print_r(xdebug_info());

