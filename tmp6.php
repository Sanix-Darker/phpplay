<?php

// Linked list in php

class Node {
    public string $data;
    public ?Node $next;

    public function __construct(string $data){
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList{
    public ?Node $head;

    public function __construct(){
        $this->head = null;
    }

    public function isEmpty(){
       return $this->head === null;
    }

    public function insert(?string $data){
        $node = new Node($data);
        if ($this->isEmpty()){
            $this->head = $node;
        }else{
            $current = $this->head;
            while ($current->next !== null){
                $current = $current->next;
            }
            $current->next = $node;
        }
    }

    public function display(){
        $current = $this->head;
        while($current != null){
            echo " > ".$current->data;
            $current = $current->next;
        }
    }
}

$linked = new LinkedList();
$linked->insert("x");
$linked->insert("y");
$linked->insert("a");
$linked->insert("b");

$linked->display();
