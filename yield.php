<?php

define('MAX_ITER', 10_000);
define('PER_ITER', 1);
define('TO_SEARCH', 10);


function getMicroTime(): float{
    return round(microtime(true) * 1000)/1000;
}

function logIt(string $message): void {
   echo date("Y-m-d/h:m:s") . " :: $message". PHP_EOL;
}

function doSomething(int $val) : int{
   sleep(2);
   return $val * 10;
}

function getSubsetVal(int $iter) : Generator{
    for ($i = 1; $i < MAX_ITER; $i+=PER_ITER){
        if ($i < $iter){
            yield doSomething($i);
        }else{
            break;
        }
    }
}

function getSubsetVal0(int $iter): array{
    $subset = array();
    for ($i = 1; $i < MAX_ITER; $i+=PER_ITER){
        if ($i < $iter){
            $subset[] = doSomething($i);
        }else{
            break;
        }
    }
    return $subset;
}

function assertArray(array|Generator $arr1, array|Generator $arr2) : bool{
    if (count($arr1) != count($arr2)){
        return false;
    }

    sort($arr1);
    sort($arr2);

    return $arr1 === $arr2;
}

$start = getMicroTime();
$val2 = getSubsetVal0(TO_SEARCH);
logIt("No generators / done in ".(getMicroTime() - $start)."s");

$start = getMicroTime();
$val1 = getSubsetVal(TO_SEARCH); // only when we want to use it  // iterator_to_array(val)[0]
logIt("with generators / done in ".(getMicroTime() - $start)."s");

if (!assertArray(iterator_to_array($val1), iterator_to_array($val2))) {
    throw new Exception("ERROR on values comparaison");
}
