<?php

class Stack{
    private array $items = [];

    public function __construct(){
        $this->items = [];
    }

    public function __toString(){
        echo "---";
        foreach ($items as $item ){
            echo ">".$item;
        }
    }
    public function push($item){
       $this->items[] = $item;
    }

    public function pop() {
       if ($this->isEmpty()){
            return null;
       }
       return array_pop($this->items);
    }

    public function peek(){
       if ($this->isEmpty()){
            return null;
       }
       return end($this->items);
    }

    public function isEmpty(){
        return empty($this->items);
    }
}

$stk = new Stack();
$stk->push(1);
$stk->push("ok");
$stk->push(0);
$stk->push(false);
print_r($stk);
$stk->pop();
$stk->pop();
print_r($stk);
