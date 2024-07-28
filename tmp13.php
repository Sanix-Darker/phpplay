<?php

require __DIR__ . '/vendor/autoload.php';

use Sagittaracc\PhpPythonDecorator\Decorator;
use Sagittaracc\PhpPythonDecorator\PythonDecorator;

#[Attribute]
final class Timer extends PythonDecorator
{
    /**
     * Wrapper around a function callback as a decorator.
     *
     * @param  $callback
     * @return
     */
    public function wrapper($callback): mixed
    {
        return function (...$args) use ($callback) {
            $time_start = microtime(true);

            $result = call_user_func_array($callback, $args);

            $time_end = microtime(true);
            $execution_time = $time_end - $time_start;

            return "Total execution: $execution_time; Result: $result";
        };
    }
}

class Calc
{
    use Decorator;

    /**
     * get sum for 2 numbers
     *
     * @param  $a
     * @param  $b
     * @return
     */
    #[Timer]
    function sum(int $a, int $b) : int
    {
        sleep(1);
        return $a + $b;
    }
}

$call = new Calc();
echo call_decorator_func_array([$call, 'sum'], [10, 32]);
// print_r($call->sum(12, 3));
