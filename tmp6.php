<?php

// Linked list in php

class Node
{
    public string $data;
    public ?Node $next;

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public ?Node $head;

    /**
     * Basic constructor
     */
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Tells if it's empty
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    /**
     * Ok this
     *
     * @param $data the data
     *
     * @return void
     */
    public function insert(?string $data): void
    {
        $node = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $node;
        }
    }

    /**
     * Just a small description
     *
     * @return void
     */
    public function display(): void
    {
        $current = $this->head;
        while ($current != null) {
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
